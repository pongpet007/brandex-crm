<?php

namespace App\Livewire\Crm\Components;

use App\Models\Customers;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CustomerFormModal extends Component
{
    public $title = "Customer Add";
    public $cus_id = 0;
    public $taxid = "";
    public $cus_name = "";
    public $cus_name_register_th = "";
    public $cus_name_register_en = "";
    public $cus_address_th = "";
    public $cus_address_en = "";
    public $cus_email = "";
    public $cus_telephone = "";
    public $cus_website = "";
    public $cus_fax = "";
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
    public $msg_toast = "";

    public function save()
    {
        $customer = [
            'cus_name' => trim($this->cus_name),
            'taxid' => $this->taxid,
            'cus_name_register_th' => $this->cus_name_register_th,
            'cus_name_register_en' => $this->cus_name_register_en,
            'cus_address_th' => $this->cus_address_th,
            'cus_address_en' => $this->cus_address_en,
            'cus_email' => $this->cus_email,
            'cus_telephone' => $this->cus_telephone,
            'cus_website' => $this->cus_website,
            'cus_fax' => $this->cus_fax,
            'contact_name' => $this->contact_name,
            'contact_nickname' => $this->contact_nickname,
            'contact_birthday' => $this->contact_birthday,
            'contact_position' => $this->contact_position,
            'contact_email' => $this->contact_email,
            'contact_mobile' => $this->contact_mobile,
            'contact_telephone' => $this->contact_telephone,
            'contact_line' => $this->contact_line,
            'contact_ig' => $this->contact_ig,
            'contact_facebook' => $this->contact_facebook,
            'cby' => Auth::user()->name,
        ];        
        
        Customers::create($customer);
        
        $msg = "Customer saved.";
        $this->dispatch('customer-refresh');       
        $this->dispatch('toast-alert', msg: [$msg, 'success']);
        // $this->dispatch('customer-modal-close');

    }

    public function render()
    {
        return view('livewire.crm.components.customer-form-modal');
    }
}
