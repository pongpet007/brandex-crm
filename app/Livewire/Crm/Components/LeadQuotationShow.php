<?php

namespace App\Livewire\Crm\Components;

use App\Models\ActivityLog;
use App\Models\Quotation;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class LeadQuotationShow extends Component
{
    public $leads_id;

    public function setactive($quote_id){
        $quotation = Quotation::find($quote_id);
        $quotation->is_active = 1;
        $quotation->save();

        $msg = $quotation->code." :  SET ACTIVE ";
        ActivityLog::create([
            'log_message' => $msg,
            'leads_id' => $this->leads_id,
            'cby' => Auth::user()->name
        ]);
        $this->dispatch('leads-activity-refresh');
    }

    public function setinactive($quote_id){
        $quotation = Quotation::find($quote_id);
        $quotation->is_active = 2;
        $quotation->save();

        $msg = $quotation->code." :  SET INACTIVE ";
        ActivityLog::create([
            'log_message' => $msg,
            'leads_id' => $this->leads_id,
            'cby' => Auth::user()->name
        ]);
        $this->dispatch('leads-activity-refresh');
    }

    public function render()
    {
        $quotations = Quotation::where('leads_id', $this->leads_id)->orderBy('quote_date', 'desc')->get();       
        return view('livewire.crm.components.lead-quotation-show', compact('quotations'));
    }

    #[On('leads-quotation-show-refresh')]
    public function setRefresh($data = "")
    {
        $this->dispatch('$refresh');
    }
}
