<?php

namespace App\Livewire\Crm;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;

#[Layout('livewire.layout.themebd')]
class LeadForm extends Component
{
    public $leads_id;
   
    public function render()
    {
        return view('livewire.crm.lead-form');
    }

    #[On('check-step')]
    public function setStep($leads_id)
    {
       $this->leads_id = $leads_id;
    }
}
