<?php

use App\Livewire\Forms\LoginForm;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component {
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirectIntended(default: RouteServiceProvider::HOME, navigate: true);
    }
}; ?>

<div>
  <!-- Session Status -->
  <x-auth-session-status class="mb-4" :status="session('status')" />

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
              <form wire:submit='login'>
                <!-- Input Email -->
                <div class="mb-3">
                  <x-input-label for="email" :value="__('Email Address')" />
                  <x-text-input id="email" type='text' name='email' wire:model='form.email' />
                  <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <!-- Input Password -->
                <div class="mb-2">
                  <x-input-label for="password" :value="__('Password')" />
                  <x-text-input id="password" type='password' name='password' wire:model='form.password' />
                  <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <!-- Remember Me -->
                <div class="mb-3 d-flex justify-content-between">
                  <div class="block">
                    <label for="remember" class="d-flex align-items-center">
                      <input wire:model="form.remember" id="remember" type="checkbox"
                        class="rounded-md shadow-sm border-1" name="remember">
                      <small class="text-sm ms-2 grey-color">{{ __('Remember me') }}</small>
                    </label>
                  </div>
                  <div>
                    @if (Route::has('password.request'))
                      <a class="text-sm rounded-md text-decoration-none grey-color"
                        href="{{ route('password.request') }}" wire:navigate>
                        <small>{{ __('Forgot your password?') }}</small>
                      </a>
                    @endif
                  </div>
                </div>
                <div class="mt-4 mb-3 d-grid">
                  <button type="submit" class="px-3 py-2 btn-main">Sign In</button>
                  <small class="mt-3 text-center">Don't have an account? <a href="{{ route('register') }}" wire:navigate
                      class="main-color text-decoration-none fw-medium">Sign Up</a></small>
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
