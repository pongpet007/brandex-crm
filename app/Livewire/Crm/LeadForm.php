<?php

namespace App\Livewire\Crm;

use App\Models\ActivityLog;
use App\Models\Calendar;
use App\Models\Leads;
use App\Models\Memo;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;

#[Layout('livewire.layout.themebd')]
class LeadForm extends Component
{
    public $leads_id;
    public $calendar_date;
    public $calendar_detail;
    public $memo_message;
    public $memmo_attach;

    public function render()
    {
        $leads = Leads::find($this->leads_id);
        $calendars = $leads->calendars()->orderBy('calendar_date', 'desc')->paginate(5);
        $memos = $leads->memos()->orderBy('memo_timestamp', 'desc')->paginate(5);
        $logs = $leads->activityLogs()->orderBy('log_timestamp', 'desc')->paginate(5);
        return view('livewire.crm.lead-form', compact('leads', 'calendars', 'memos'));
    }

    public function nextstep()
    {
        $arr = ['ใหม่', 'นำเสนอ', 'เข้าพบ', 'ต่อรอง', 'ปิดการขาย'];
        $leads = Leads::find($this->leads_id);
        
        if ($leads->step_id == 4) {           
            $this->dispatch('leads-final-step-open');                     
        } elseif ($leads->step_id < 6) {
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
            $this->dispatch('leads-activity-refresh');
        } else {
            $this->dispatch('toast-alert', msg: ['Leads status ปิดการขายแล้ว', 'danger']);
        }
    }

    public function setCancle()
    {
        $leads = Leads::find($this->leads_id);
        $leads->step_id = 6;
        $leads->save();

        $msg = "Cancle leads ";
        ActivityLog::create([
            'log_message' => $msg,
            'leads_id' => $this->leads_id,
            'cby' => Auth::user()->name
        ]);
        $this->dispatch('leads-activity-refresh');
    }

    public function saveCalendar()
    {
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
        $this->dispatch('toast-alert', msg: ['Calendar saved.', 'success']);
        $this->dispatch('leads-activity-refresh');

        $this->reset('calendar_date');
        $this->reset('calendar_detail');
        $this->dispatch('$refresh');
    }

    public function saveMemo()
    {
        Memo::create([
            'memo_message' => $this->memo_message,
            'memo_timestamp' => now(),
            'leads_id' => $this->leads_id,
            'cby' => Auth::user()->name
        ]);

        $msg = "create memo : $this->memo_message ";
        ActivityLog::create([
            'log_message' => $msg,
            'leads_id' => $this->leads_id,
            'cby' => Auth::user()->name
        ]);

        $this->dispatch('toast-alert', msg: ['Memo saved.', 'success']);
        $this->dispatch('leads-activity-refresh');
        $this->reset('memo_message');
        // $this->dispatch('$refresh');
        $this->dispatch('leadschangtab', tab: "2");
    }

    #[On('check-step')]
    public function setStep($leads_id)
    {
        $this->leads_id = $leads_id;
    }

    #[On('leads-refresh')]
    public function setRefresh($data = "")
    {
        $this->dispatch('$refresh');
    }
}
