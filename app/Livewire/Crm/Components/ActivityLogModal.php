<?php

namespace App\Livewire\Crm\Components;

use Livewire\Attributes\On;
use Livewire\Component;

class ActivityLogModal extends Component
{
    public $msg = "ok";
    
    #[On('show-log')]
    public function show_log($msg){
        $this->msg = $msg;
    }

    public function render()
    {
        return view('livewire.crm.components.activity-log-modal');
    }
}
