<?php

namespace App\Livewire\Crm;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('livewire.layout.themebd')]
class ChangePasswordForm extends Component
{
    public $oldpass;
    public $newpass;
    public $confirmpass;

    public function save(){
        
        $this->dispatch('toast-alert',msg:['save complete','success']);
    }

    public function render()
    {
        return view('livewire.crm.change-password-form');
    }
}
