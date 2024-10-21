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
use Livewire\Attributes\Url;
use Livewire\WithFileUploads;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

#[Layout('livewire.layout.themebd')]
class LeadForm extends Component
{
    use WithPagination, WithoutUrlPagination;

    public $leads_id;
    public $tab_id = 1;
    public $calendar_date;
    public $calendar_detail;
    public $memo_message;
    public $memmo_attach;
    public $is_leads_name_edit = false;
    public $leads_name;

    public function settab($tab_id)
    {
        $this->tab_id = $tab_id;
    }

    public function render()
    {
        $leads = Leads::find($this->leads_id);
        $this->leads_name = $leads->leads_name;
        $calendars = $leads->calendars()->orderBy('calendar_date', 'desc')->paginate(5, pageName: 'calendar-page');
        $memos = $leads->memos()->orderBy('memo_timestamp', 'desc')->paginate(5, pageName: 'memo-page');
        $logs = $leads->activityLogs()->orderBy('log_timestamp', 'desc')->paginate(5, pageName: 'log-page');
        return view('livewire.crm.lead-form', compact('leads', 'calendars', 'memos'))->title($leads->code . ' - ' . $leads->leads_name);
    }

    public function savetitle()
    {
        $leads = Leads::find($this->leads_id);
        $leads->leads_name = $this->leads_name;
        $leads->save();
        $this->is_leads_name_edit  = !$this->is_leads_name_edit;
        $this->dispatch('$refresh');
    }

    public function edit()
    {
        $this->is_leads_name_edit  = !$this->is_leads_name_edit;
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

    public function addquote()
    {
        $this->dispatch('add-quotation');
    }
}
