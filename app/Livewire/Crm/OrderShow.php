<?php

namespace App\Livewire\Crm;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('livewire.layout.themebd')]
class OrderShow extends Component
{
    public function render()
    {
        return view('livewire.crm.order-show');
    }
}
