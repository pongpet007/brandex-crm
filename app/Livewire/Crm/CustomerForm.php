<?php

namespace App\Livewire\Crm;

use App\Models\Customers;
use App\Models\CustomersContactList;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;

#[Layout('livewire.layout.themebd')]
class CustomerForm extends Component
{
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

    public function save()
    {
        if ($this->cus_id > 0) {
            $customer = Customers::find($this->cus_id);
            $customer->cus_name = $this->cus_name;
            $customer->taxid = $this->taxid;
            $customer->cus_name_register_th = $this->cus_name_register_th;
            $customer->cus_name_register_en = $this->cus_name_register_en;
            $customer->cus_address_th = $this->cus_address_th;
            $customer->cus_address_en = $this->cus_address_en;
            $customer->cus_email = $this->cus_email;
            $customer->cus_telephone = $this->cus_telephone;
            $customer->cus_website = $this->cus_website;
            $customer->cus_fax = $this->cus_fax;
            $customer->contact_name = $this->contact_name;
            $customer->contact_nickname = $this->contact_nickname;
            $customer->contact_birthday = $this->contact_birthday;
            $customer->contact_position = $this->contact_position;
            $customer->contact_email = $this->contact_email;
            $customer->contact_mobile = $this->contact_mobile;
            $customer->contact_telephone = $this->contact_telephone;
            $customer->contact_line = $this->contact_line;
            $customer->contact_ig = $this->contact_ig;
            $customer->contact_facebook = $this->contact_facebook;
            $customer->uby = Auth::user()->name;
            $customer->save();
        } else {
            $customer = [
            'cus_name' => $this->cus_name,
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
        }
    }

    public function newcontact()
    {
        CustomersContactList::create([
            'cus_id' => $this->cus_id,
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
            'cby' => Auth::user()->name
        ]);

        $this->reset('contact_name');
        $this->reset('contact_nickname');
        $this->reset('contact_birthday');
        $this->reset('contact_position');
        $this->reset('contact_email');
        $this->reset('contact_mobile');
        $this->reset('contact_telephone');
        $this->reset('contact_line');
        $this->reset('contact_ig');
        $this->reset('contact_facebook');
    }

    public function restoreContact($contact_id)
    {
        $contact = CustomersContactList::find($contact_id);
        $customer = Customers::find($this->cus_id);
        $customer->contact_name = $contact->contact_name;
        $customer->contact_nickname = $contact->contact_nickname;
        $customer->contact_birthday = $contact->contact_birthday;
        $customer->contact_position = $contact->contact_position;
        $customer->contact_email = $contact->contact_email;
        $customer->contact_mobile = $contact->contact_mobile;
        $customer->contact_telephone = $contact->contact_telephone;
        $customer->contact_line = $contact->contact_line;
        $customer->contact_ig = $contact->contact_ig;
        $customer->contact_facebook = $contact->contact_facebook;
        $customer->save();
    }

    public function deleteContact($contact_id)
    {
        $contact = CustomersContactList::find($contact_id);
        $contact->delete();
    }

    public function render()
    {
        if ($this->cus_id > 0) {
            $customer = Customers::find($this->cus_id);
            $this->cus_name = $customer->cus_name;
            $this->taxid = $customer->taxid;
            $this->cus_name_register_th = $customer->cus_name_register_th;
            $this->cus_name_register_en = $customer->cus_name_register_en;
            $this->cus_address_th = $customer->cus_address_th;
            $this->cus_address_en = $customer->cus_address_en;
            $this->cus_email = $customer->cus_email;
            $this->cus_telephone = $customer->cus_telephone;
            $this->cus_website = $customer->cus_website;
            $this->cus_fax = $customer->cus_fax;
            $this->contact_name = $customer->contact_name;
            $this->contact_nickname = $customer->contact_nickname;
            $this->contact_birthday = $customer->contact_birthday;
            $this->contact_position = $customer->contact_position;
            $this->contact_email = $customer->contact_email;
            $this->contact_mobile = $customer->contact_mobile;
            $this->contact_telephone = $customer->contact_telephone;
            $this->contact_line = $customer->contact_line;
            $this->contact_ig = $customer->contact_ig;
            $this->contact_facebook = $customer->contact_facebook;
        }

        $contacts = CustomersContactList::where('cus_id', '=', $this->cus_id)->paginate(10);

        return view('livewire.crm.customer-form', compact('contacts'));
    }
}
