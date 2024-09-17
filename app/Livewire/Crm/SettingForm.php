<?php

namespace App\Livewire\Crm;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('livewire.layout.themebd')]
class SettingForm extends Component
{
    public $msg = "";
    public function render()
    {
        return view('livewire.crm.setting-form');
    }

    public function save($xx) {
        dd($xx);
    }

    public function xxx(){
        // $this->emit('showalert');
        $this->msg = 'Setting updated';
        $this->dispatch('updatedxxx');
    }
}
