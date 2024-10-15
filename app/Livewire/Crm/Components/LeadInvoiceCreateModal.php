<?php

namespace App\Livewire\Crm\Components;

use App\Models\ActivityLog;
use App\Models\Leads;
use App\Models\Products;
use App\Models\Quotation;
use App\Models\QuotationItem;
use App\Models\QuoteType;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class LeadInvoiceCreateModal extends Component
{
    use WithFileUploads;

    #[Validate('mimes:png|max:1024')]
    public $filereplace;

    public $quote_id = 1;
    public $leads_id;
    public $com_name;
    public $com_address;
    public $com_tel;
    public $com_mobile;
    public $logo = 'logo/logo.png';
    public $taxid;

    public $cus_id;
    public $cus_name;
    public $cus_company;
    public $cus_address;
    public $cus_tel;
    public $cus_mobile;

    public $code;
    public $user_id;
    public $quote_type;
    public $discount = 0;
    public $quotation_status;
    public $pro_id;
    public $iseditheader = false;
    public $iseditmode1 = false;
    public $iseditmode2 = false;


    #[On('add-quotation')]
    public function addQuotation()
    {

        $setting = Setting::find(1);
        $this->com_name = $setting->companyname;
        $this->com_address = $setting->address;
        $this->com_tel = $setting->com_tel;
        $this->com_mobile = $setting->com_mobile;
        $this->taxid = $setting->taxid;

        $leads = Leads::find($this->leads_id);

        $this->cus_id = $leads->cus_id;
        $this->cus_name = $leads->customer->contact_name;
        $this->cus_company = $leads->customer->cus_name;
        // $this->cus_address = $leads->customer->cus_address_th;
        $this->cus_tel = $leads->customer->contact_telephone;
        $this->cus_mobile = $leads->customer->contact_mobile;
        $this->user_id = $leads->user_id;
        $this->quote_type = 1;
        $this->quotation_status = 2;
        $this->logo = 'logo/logo.png';

        $quotation = Quotation::create([
            'com_name' => $this->com_name,
            'com_address' => $this->com_address,
            'com_tel' => $this->com_tel,
            'com_mobile' => $this->com_mobile,
            'logo' => $this->logo,
            'taxid' => $this->taxid,
            'leads_id' => $this->leads_id,
            'cus_id' => $this->cus_id,
            'cus_name' => $this->cus_name,
            'cus_company' => $this->cus_company,
            'cus_address' => $this->cus_address,
            'cus_tel' => $this->cus_tel,
            'cus_mobile' => $this->cus_mobile,
            'user_id' => $this->user_id,
            'quote_type' => $this->quote_type,
            'quotation_status' => $this->quotation_status,
            'y' => date('y'),
            'm' => date('m'),
            'd' => date('d'),
            'cby' => Auth::user()->name
        ]);

        $runno = Quotation::where('y', date('y'))->where('m', date('m'))->where('d', date('d'))->max('runno');
        $runno++;
        $runno = str_pad($runno, 3, '0', STR_PAD_LEFT);
        $code = 'Q' . $quotation->y . $quotation->m . $quotation->d . $runno;
        $quotation->code = $code;
        $quotation->runno = $runno;
        $quotation->save();
        $this->code = $code;
        $this->quote_id = $quotation->quote_id;
        $this->dispatch('leads-invoice-create-modal-show');

        $msg = $code . " :  created. ";
        ActivityLog::create([
            'log_message' => $msg,
            'leads_id' => $this->leads_id,
            'cby' => Auth::user()->name
        ]);
        $this->dispatch('leads-activity-refresh');
    }

    #[On('edit-quotation')]
    public function editmodequotation($quote_id)
    {
        $this->quote_id = $quote_id;
    }
    public function editheader()
    {
        $this->iseditheader =  !$this->iseditheader;
    }

    public function saveheader()
    {
        $quotation = Quotation::find($this->quote_id);
     
        if ($this->filereplace) {
            $this->logo = $this->filereplace->store('/storage/logo');
            $quotation->logo = $this->logo;
        }
     
        $quotation->com_name = $this->com_name;
        $quotation->com_address = $this->com_address;
        $quotation->com_tel = $this->com_tel;
        $quotation->com_mobile = $this->com_mobile;
        $quotation->taxid = $this->taxid;
        $quotation->save();
        
        $this->iseditheader = false;
    }

    public function editmode1()
    {
        $this->iseditmode1 =  !$this->iseditmode1;
    }

    public function editmode2()
    {
        $this->iseditmode2 =  !$this->iseditmode2;
    }

    public function savemode1()
    {
        $quotation = Quotation::find($this->quote_id);
        $quotation->cus_name = $this->cus_name;
        $quotation->cus_company = $this->cus_company;
        $quotation->cus_address = $this->cus_address;
        $quotation->cus_tel = $this->cus_tel;
        $quotation->cus_mobile = $this->cus_mobile;
        $quotation->save();
        $this->iseditmode1 =  false;
    }

    public function savemode2()
    {
        $quotation = Quotation::find($this->quote_id);
        $quotation->user_id = $this->user_id;
        $quotation->quote_type = $this->quote_type;
        $quotation->save();

        $this->iseditmode2 =  false;
    }


    public function addItem()
    {
        if ($this->pro_id > 0) {
            $product = Products::find($this->pro_id);

            $quotation = QuotationItem::create([
                'quote_id' => $this->quote_id,
                'pro_id' => $product->pro_id,
                'price' => $product->pro_price,
                'cby' => Auth::user()->name
            ]);
            $code = $quotation->quote->code;
            $msg = $code . " :  modified (add item). ";
            ActivityLog::create([
                'log_message' => $msg,
                'leads_id' => $this->leads_id,
                'cby' => Auth::user()->name
            ]);
            $this->dispatch('leads-activity-refresh');


            $this->dispatch('toast-alert', msg: ['product added.', 'success']);
            $this->dispatch('leads-quotation-show-refresh');
        }
    }

    public function deleteitem($quote_item_id)
    {

        $QuotationItem = QuotationItem::find($quote_item_id);
        $QuotationItem->delete();

        $code = $QuotationItem->quote->code;
        $msg = $code . " :  modified (delete item). ";
        ActivityLog::create([
            'log_message' => $msg,
            'leads_id' => $this->leads_id,
            'cby' => Auth::user()->name
        ]);
        $this->dispatch('leads-activity-refresh');

        $this->dispatch('toast-alert', msg: ['product removed.', 'danger']);
        $this->dispatch('leads-quotation-show-refresh');
    }

    public function render()
    {
        $quotation = Quotation::find($this->quote_id);
        $this->com_name = $quotation->com_name;
        $this->com_address = $quotation->com_address;
        $this->com_tel = $quotation->com_tel;
        $this->com_mobile = $quotation->com_mobile;
        $this->logo = $quotation->logo;
        $this->taxid = $quotation->taxid;
        $this->cus_name = $quotation->cus_name;
        $this->cus_company = $quotation->cus_company;
        $this->cus_address = $quotation->cus_address;
        $this->cus_tel = $quotation->cus_tel;
        $this->cus_mobile = $quotation->cus_mobile;
        $this->code = $quotation->code;
        $this->user_id = $quotation->user_id;
        $this->quote_type = $quotation->quote_type;
        $this->quotation_status = $quotation->quotation_status;


        $products = Products::where('is_active', 1)->orderBy('pro_name', 'asc')->get();
        $quotationItems = QuotationItem::where('quote_id', $this->quote_id)->get();
        $users = User::orderBy('name')->get();
        $quote_types = QuoteType::all();
        return view('livewire.crm.components.lead-invoice-create-modal', compact('quotation', 'products', 'quotationItems', 'users', 'quote_types'));
    }
}
