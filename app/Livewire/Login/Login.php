<?php

namespace App\Livewire\Login;

use Livewire\Component;
use App\View\Components\LoginLayout;

class Login extends Component
{
    public function render()
    {
        return view('livewire.login.login')
        ->layout(LoginLayout::class, ['title' => 'Título da página']);
    }
}
