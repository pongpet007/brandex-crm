<?php

namespace App\Livewire\Crm\Components;

use Livewire\Attributes\On;
use Livewire\Component;

class ToastAlert extends Component
{
    public $msg_toast;
    public $msg_type = 'success';
    public function render()
    {
        return view('livewire.crm.components.toast-alert');
    }

    #[On('toast-alert')]
    public function setMessage($msg)
    {
        $this->msg_toast = $msg[0];
        if ($msg[1])
            $this->msg_type = $msg[1];

        $this->dispatch('updated');
    }
}
