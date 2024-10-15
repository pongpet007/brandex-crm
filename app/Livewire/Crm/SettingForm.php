<?php

namespace App\Livewire\Crm;

use App\Models\Setting;
use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;

#[Layout('livewire.layout.themebd')]
class SettingForm extends Component
{
    use WithFileUploads;

    #[Validate('mimes:png|max:1024')]
    public $logo;

    public $taxid;
    public $companyname;
    public $com_tel;
    public $com_mobile;
    public $companyname_en;
    public $address;
    public $address_en;
    public $leadsowner;
    public $timereturn;

    public function mount()
    {
        $setting = Setting::find(1);
        $this->taxid = $setting->taxid;
        $this->companyname = $setting->companyname;
        $this->com_tel = $setting->com_tel;
        $this->com_mobile = $setting->com_mobile;
        $this->companyname_en = $setting->companyname_en;
        $this->address = $setting->address;
        $this->address_en = $setting->address_en;
        $this->leadsowner = $setting->leadsowner;
        $this->timereturn = $setting->timereturn;
    }

    public function render()
    {
        $users = User::orderBy('name')->get();
        return view('livewire.crm.setting-form', compact('users'));
    }

    public function save()
    {

        $setting = Setting::find(1);

        $setting->taxid = $this->taxid;
        $setting->companyname = $this->companyname;
        $setting->com_tel = $this->com_tel;
        $setting->com_mobile = $this->com_mobile;
        $setting->companyname_en = $this->companyname_en;
        $setting->address = $this->address;
        $setting->address_en = $this->address_en;
        $setting->leadsowner = $this->leadsowner;
        $setting->timereturn = $this->timereturn;
        $setting->save();
        
        // $valid = $this->validate([
        //     'logo' => 'mimes:png',
        // ]);           

        if ($this->logo) {
            $this->logo->storeAs('logo', 'logo.png');
        }

        $this->reset('logo');
        $msg = "Setting saved.";
        $this->dispatch('toast-alert', msg: [$msg, 'success']);
    }
}
