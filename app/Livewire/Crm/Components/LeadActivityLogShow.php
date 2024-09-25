<?php

namespace App\Livewire\Crm\Components;

use App\Models\Leads;
use Livewire\Attributes\On;
use Livewire\Component;

class LeadActivityLogShow extends Component
{
    public $leads_id;
    public $search;
    public function render()
    {
        $leads = Leads::find($this->leads_id);

        $logs = $leads->activityLogs()
        ->where('log_message', 'like', "%$this->search%")
        ->orderBy('log_timestamp', 'desc')
        ->paginate(5);

        return view('livewire.crm.components.lead-activity-log-show',compact('logs'));
    }

    #[On('leads-activity-refresh')]
    public function setRefresh()
    {
        $this->dispatch('$refresh');
    }

}
