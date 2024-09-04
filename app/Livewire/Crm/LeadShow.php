<?php

namespace App\Livewire\Crm;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('livewire.layout.themebd')]
class LeadShow extends Component
{
    public function render()
    {
        return view('livewire.crm.lead-show');
    }
}
