<?php

namespace App\Livewire\Crm;

use Livewire\Attributes\Layout;
use Livewire\Component;
#[Layout('livewire.layout.themebd')]
class UsersShow extends Component
{
    public function render()
    {
        return view('livewire.crm.users-show');
    }
}
