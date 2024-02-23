<?php

use Illuminate\Support\Facades\Password;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component {
    public string $email = '';

    /**
     * Send a password reset link to the provided email address.
     */
    public function sendPasswordResetLink(): void
    {
        $this->validate([
            'email' => ['required', 'string', 'email'],
        ]);

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $status = Password::sendResetLink($this->only('email'));

        if ($status != Password::RESET_LINK_SENT) {
            $this->addError('email', __($status));

            return;
        }

        $this->reset('email');

        session()->flash('status', __($status));
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
              <form wire:submit="sendPasswordResetLink">
                <!-- Email Address -->
                <div>
                  <x-input-label for="email" :value="__('Email Address')" />
                  <x-text-input wire:model="email" id="email" type="email" name="email" required autofocus />
                  <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Button Login -->
                <div class="mt-4 mb-3 d-grid">
                  <button type="submit" class="px-3 py-2 btn-main">{{ __('Send Email Password Reset Link') }}</button>
                </div>
                {{-- <x-primary-button>
                    {{ __('Email Password Reset Link') }}
                  </x-primary-button> --}}
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>

  </main>
  <!-- Main end -->

</div>
