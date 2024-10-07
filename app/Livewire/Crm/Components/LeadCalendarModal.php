<?php

namespace App\Livewire\Crm\Components;

use App\Models\ActivityLog;
use App\Models\Calendar;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LeadCalendarModal extends Component
{
    public $leads_id;
    public $calendar_date;
    public $calendar_detail;

    public function save(){
        Calendar::create([
            'calendar_date' => $this->calendar_date,
            'calendar_detail' => $this->calendar_detail,
            'leads_id' => $this->leads_id,
            'cby' => Auth::user()->name
        ]);

        $msg = "create calendar : $this->calendar_date - $this->calendar_detail";
        ActivityLog::create([
            'log_message' => $msg,
            'leads_id' => $this->leads_id,
            'cby' => Auth::user()->name
        ]); 
        $this->reset('calendar_date');
        $this->reset('calendar_detail');
        $this->dispatch('toast-alert', msg: ['Calendar saved.', 'success']);
        $this->dispatch('leads-activity-refresh');
       
        $this->dispatch('leads-refresh');
    }

    public function render()
    {
        return view('livewire.crm.components.lead-calendar-modal');
    }
}
