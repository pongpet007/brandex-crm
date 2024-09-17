<?php

namespace App\Livewire\Crm;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;

#[Layout('livewire.layout.themebd')]
class CustomerForm extends Component
{
    public $a = 0;
    public $b = 0;
    public $c = 0;

    public function render()
    {
        return view('livewire.crm.customer-form');
    }

    #[On('show-contact')]
    public function setContact($id)
    {

        $this->a = 10 * $id;
        $this->b = 20 * $id;
        $this->c = 30 * $id;
    }
}
