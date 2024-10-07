<?php

namespace App\Livewire\Crm\Components;

use App\Models\ActivityLog;
use App\Models\Leads;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class LeadAssignToModal extends Component
{
    public $leads_id;   
    public $user_id;
    public $leads_start;
    public $old_assignee;
    public $old_start;

    public function mount()
    {
        $leads = Leads::find($this->leads_id);       
        $this->user_id = $leads->user_id;
        $this->leads_start = $leads->leads_start;
        $usr = User::find($this->user_id);
        $this->old_assignee =  $usr->name;
        $this->old_start =  $this->leads_start;
    }

    public function save()
    {

        $leads = Leads::find($this->leads_id);       
        $leads->leads_start = $this->leads_start;
        $leads->user_id = $this->user_id;
        $leads->save();

        Leads::where('leads_id', $this->leads_id)->update(['leads_expire' => DB::raw("date_add(leads_start,interval 3 month)")]);

        $usr = User::find($this->user_id);
        $msg = "Change assignee <br>From $this->old_assignee => $usr->name <br>Date From $this->old_start => $this->leads_start ";
        ActivityLog::create([
            'log_message' => $msg,
            'leads_id' => $this->leads_id,
            'cby' => Auth::user()->name
        ]);
        $this->old_assignee =  $usr->name;
        $this->old_start =  $this->leads_start;

        $this->dispatch('leads-refresh');
        $this->dispatch('leads-activity-refresh');
        $this->dispatch('assign-to-modal-close');
    }

    public function render()
    {

        $users = User::orderBy('name')->get();
        return view('livewire.crm.components.lead-assign-to-modal', compact('users'));
    }
}
