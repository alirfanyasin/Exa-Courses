<?php

namespace App\Livewire\Layout;

use App\Livewire\Actions\LogoutAction;
use Livewire\Component;

class Logout extends Component
{
    public function logout(LogoutAction $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
    public function render()
    {
        return view('livewire.layout.logout');
    }
}
