<?php

namespace App\Livewire\Crm\Components;

use App\Models\ActivityLog;
use App\Models\Leads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class LeadFinalStepModal extends Component
{
    public $leads_id;
    public $continue_leads = 1;
    public $continue_start;

    public function mount(){
        $leads = Leads::find($this->leads_id);
        $this->continue_start = $leads->leads_start;
    }


    public function save()
    {

        $leads = Leads::find($this->leads_id);
        $arr = ['ใหม่', 'นำเสนอ', 'เข้าพบ', 'ต่อรอง', 'ปิดการขาย'];
        $before = $arr[$leads->step_id - 1];
        $after = $arr[$leads->step_id];
        $leads->step_id = $leads->step_id + 1;
        $leads->save();

        $msg = "change status from $before to $after ";
        ActivityLog::create([
            'log_message' => $msg,
            'leads_id' => $this->leads_id,
            'cby' => Auth::user()->name
        ]);


        if ($this->continue_leads == 1) {

            list($y, $m, $d) = explode('-', $this->continue_start);
            $y =  substr($y, -2);
            $newLeads = $leads->replicate();
            $newLeads->step_id = 1;
            $newLeads->y = $y;
            $newLeads->m = $m;
            $newLeads->d = $d;
            $newLeads->runno = 0;
            $newLeads->leads_start = $this->continue_start;
            $newLeads->cby = Auth::user()->name;
            $newLeads->leads_name = "Clone( $leads->code ) - " . $leads->leads_name;
            $newLeads->save();

            $runno = Leads::where('y', $y)->where('m', $m)->where('d', $d)->max('runno');
            $runno++;
            $runno = str_pad($runno, 3, '0', STR_PAD_LEFT);
            $code = 'L' . $newLeads->y . $newLeads->m . $newLeads->d . $runno;
            $newLeads->code = $code;
            $newLeads->runno = $runno;
            $newLeads->save();

            Leads::where('leads_id', $newLeads->leads_id)->update(['leads_expire' => DB::raw("date_add(leads_start,interval 3 month)")]);

            $this->dispatch('toast-alert', msg: ['New leads clone complete start : ' . $this->continue_start, 'success']);
            
        }
       
        $this->dispatch('leads-activity-refresh');
        $this->dispatch('leads-refresh');
        $this->dispatch('final-step-modal-close');
    }

    public function render()
    {
        return view('livewire.crm.components.lead-final-step-modal');
    }
}
