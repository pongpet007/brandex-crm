<?php

namespace App\Livewire\Crm\Components;

use App\Models\CustomersContactList;
use Livewire\Attributes\On;
use Livewire\Component;

class CustomerContactViewModal extends Component
{
    public $contact_id = 0;
    public $contact_name = "";
    public $contact_nickname = "";
    public $contact_birthday = "";
    public $contact_position = "";
    public $contact_email = "";
    public $contact_mobile = "";
    public $contact_telephone = "";
    public $contact_line = "";
    public $contact_ig = "";
    public $contact_facebook = "";

    public function render()
    {
        $contact = "";
        if ($this->contact_id > 0) {
            $contact  =   CustomersContactList::find($this->contact_id);
        }
        return view('livewire.crm.components.customer-contact-view-modal', compact('contact'));
    }

    #[On('show-contact')]
    public function setContact($id)
    {
        $this->contact_id = $id;
    }
}
