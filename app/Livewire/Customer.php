<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('livewire.layout.themebd')]
class Customer extends Component
{
    public function render()
    {
        return view('livewire.customer');
    }
}
