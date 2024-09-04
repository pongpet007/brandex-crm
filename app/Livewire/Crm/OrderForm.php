<?php

namespace App\Livewire\Crm;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('livewire.layout.themebd')]
class OrderForm extends Component
{
    public function render()
    {
        return view('livewire.crm.order-form');
    }
}
