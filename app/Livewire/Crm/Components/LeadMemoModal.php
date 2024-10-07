<?php

namespace App\Livewire\Crm\Components;

use App\Models\ActivityLog;
use App\Models\Memo;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class LeadMemoModal extends Component
{

    use WithFileUploads;
    public $memofile;

    public $leads_id;
    public $memo_message;

    public function save()
    {
        $originalfilename = "";
        $filename = "";
        if ($this->memofile) {
            $originalfilename = $this->memofile->getClientOriginalName();
            $filename = $this->memofile->store('storage/memo');           
        }
        Memo::create([
            'memo_message' => $this->memo_message,
            'memo_timestamp' => now(),
            'originalfilename' => $originalfilename,
            'filename' => $filename,
            'leads_id' => $this->leads_id,
            'cby' => Auth::user()->name
        ]);

        $msg = "create memo : $this->memo_message ";
        if ($this->memofile) {
            $msg .= " ( with file ) ";
        }
        
        ActivityLog::create([
            'log_message' => $msg,
            'leads_id' => $this->leads_id,
            'cby' => Auth::user()->name
        ]);

        $this->dispatch('toast-alert', msg: ['Memo saved.', 'success']);
        $this->dispatch('leads-activity-refresh');
        if ($this->memofile) {
        $this->reset('memofile');
        }
        $this->reset('memo_message');
        $this->dispatch('leads-refresh');
       
    }

    public function render()
    {
        return view('livewire.crm.components.lead-memo-modal');
    }
}
