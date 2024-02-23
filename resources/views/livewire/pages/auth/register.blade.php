<?php

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component {
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        event(new Registered(($user = User::create($validated))));

        Auth::login($user);

        $this->redirect(RouteServiceProvider::HOME, navigate: true);
    }
}; ?>

<div>
  <!-- Main start -->
  <main>
    <div class="container">
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-4">
          <div class="mb-4 d-flex justify-content-center">
            <img src="assets/img/logo-main.png" width="80%" alt="">
          </div>
          <div class="p-4 border-0 shadow card rounded-4">
            <div class="card-body">
              <form wire:submit="register">
                <div class="mb-3">
                  <x-input-label for="fullname" :value="__('Fullname')" />
                  <x-text-input id="fullname" name="name" wire:model='name' />
                  @error('name')
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                  @enderror
                </div>
                <div class="mb-3">
                  <x-input-label for="email" :value="__('Email Address')" />
                  <x-text-input id="email" type='email' name="email" wire:model='email' />
                  <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class="mb-3">
                  <x-input-label for="password" :value="__('Password')" />
                  <x-text-input id="password" type='password' name="password" wire:model='password' />
                  <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <div class="mb-3">
                  <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                  <x-text-input id="password_confirmation" type='password' name="password_confirmation"
                    wire:model='password_confirmation' />
                  <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
                <div class="mt-4 mb-3 d-grid">
                  <button type="submit" class="px-3 py-2 btn-main">Sign Up</button>

                  <small class="mt-3 text-center">Do you have an account? <a href="{{ route('login') }}" wire:navigate
                      class="main-color text-decoration-none fw-medium">Sign In</a></small>
                </div>

              </form>
              <div class="text-center">
                <label for="" class="my-4">Or</label>
                <a href=""
                  class="py-3 shadow text-decoration-none text-dark d-flex align-items-center justify-content-center bg-light rounded-pill bg-warning"><iconify-icon
                    icon="flat-color-icons:google" class="fs-4 me-3"></iconify-icon> Login with Google</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main>
  <!-- Main end -->
</div>
