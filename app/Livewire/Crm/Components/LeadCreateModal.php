<?php

namespace App\Livewire\Crm\Components;

use App\Livewire\Customer;
use App\Models\Customers;
use App\Models\Leads;
use App\Models\User;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;


class LeadCreateModal extends Component
{
    public $leads_name = "";
    public $leads_detail = "";
    public $search_cus_name = "";
    public $cus_id = 0;
    public $user_id = 0;
    public $step_id = 1;
    public $leads_start;

    public function resetsearch()
    {
        $this->search_cus_name = "";
        $this->cus_id = 0;
    }
    public function save()
    {
        // $customer = Customers::where('cus_name', $this->cus_name)->select('cus_id')->get();
        // $this->cus_id = $customer[0]->cus_id;

        // $user = User::where('name', $this->user_name)->select('id')->get();
        // $this->user_id = $user[0]->id;

        $leads = Leads::create([
            'leads_name' => $this->leads_name,
            'leads_detail' => $this->leads_detail,
            'y' => date('y'),
            'm' => date('m'),
            'd' => date('d'),
            'cus_id' => $this->cus_id,
            'user_id' => $this->user_id,
            'leads_start' => $this->leads_start,
            'step_id' => $this->step_id,
            'cby' => Auth::user()->name
        ]);

        $runno = Leads::where('y', date('y'))->where('m', date('m'))->where('d', date('d'))->max('runno');
        $runno++;
        $runno = str_pad($runno, 3, '0', STR_PAD_LEFT);
        $code = 'L' . $leads->y . $leads->m . $leads->d . $runno;
        $leads->code = $code;
        $leads->runno = $runno;
        $leads->save();
        Leads::where('leads_id', $leads->leads_id)->update(['leads_expire' => DB::raw("date_add(leads_start,interval 3 month)")]);

        $msg = "Leads saved.";
        $this->dispatch('leads-refresh', data: $this->leads_name);
        $this->dispatch('toast-alert', msg: [$msg, 'success']);
        $this->dispatch('leads-modal-close');

        $this->reset('search_cus_name');
        $this->reset('leads_name');
        $this->reset('cus_id');
        $this->reset('user_id');
        $this->reset('leads_detail');
        $this->reset('leads_start');
    }

    public function render()
    {
        if (Auth::user()->is_admin != 1) {
            $this->user_id = Auth::user()->id;
        }

        if ($this->cus_id > 0 && $this->user_id > 0) {
            $cus = Customers::find($this->cus_id);
            $usr = User::find($this->user_id);
            $this->leads_name = "" . $cus->cus_name . ' - ' . $usr->name;           
        }

        $customers = Customers::where('cus_name', 'like', "%$this->search_cus_name%")
            ->orderBy('cus_name', 'asc')->get();

        $users = User::orderBy('name')->get();

        return view('livewire.crm.components.lead-create-modal', compact('customers', 'users'));
    }
}
