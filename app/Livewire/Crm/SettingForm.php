<?php

namespace App\Livewire\Crm;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('livewire.layout.themebd')]
class SettingForm extends Component
{
    public function render()
    {
        return view('livewire.crm.setting-form');
    }
}