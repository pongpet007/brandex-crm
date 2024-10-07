<?php

namespace App\Livewire\Crm;

use App\Models\Leads;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\WithPagination;

#[Layout('livewire.layout.themebd')]
class LeadShow extends Component
{
    use WithPagination;

    public $search = "";
    public $step_id = 1;
    public $allstep = 0;

    public function delete($id)
    {
        $leads = Leads::find($id);
        $leads->delete();
        $this->setRefresh();
    }

    public function render()
    {
        $countNew = Leads::where('step_id', '=', 1)
            ->when(Auth::user()->is_admin <> 1, function (Builder $query) {
                $query->where('user_id', Auth::user()->id);
            })->count();
        $countPresent = Leads::where('step_id', '=', 2)
            ->when(Auth::user()->is_admin <> 1, function (Builder $query) {
                $query->where('user_id', Auth::user()->id);
            })->count();
        $countMeet = Leads::where('step_id', '=', 3)
            ->when(Auth::user()->is_admin <> 1, function (Builder $query) {
                $query->where('user_id', Auth::user()->id);
            })->count();
        $countNegotiate = Leads::where('step_id', '=', 4)
            ->when(Auth::user()->is_admin <> 1, function (Builder $query) {
                $query->where('user_id', Auth::user()->id);
            })->count();
        $countFinish = Leads::where('step_id', '=', 5)
            ->when(Auth::user()->is_admin <> 1, function (Builder $query) {
                $query->where('user_id', Auth::user()->id);
            })->count();
        $countCancle = Leads::where('step_id', '=', 6)
            ->when(Auth::user()->is_admin <> 1, function (Builder $query) {
                $query->where('user_id', Auth::user()->id);
            })->count();

            

        $leads = Leads::where(function (Builder $query) {
            $query->where('leads_name', 'like', "%$this->search%")
                ->orWhere('code', 'like', "%$this->search%");
        })->when($this->allstep <> 1, function (Builder $query) {
            $query->where('step_id', '=', $this->step_id);
        })->when(Auth::user()->is_admin <> 1, function (Builder $query) {
            $query->where('user_id', Auth::user()->id);
        })
            ->orderBy('leads_start', 'desc')
            ->paginate(10);

        // dd($leads->toSql());

        return view('livewire.crm.lead-show', compact('countNew', 'countPresent', 'countMeet', 'countNegotiate', 'countFinish', 'countCancle', 'leads'));
    }

    public function setStep($step)
    {
        $this->step_id = $step;
    }

    #[On('leads-refresh')]
    public function setRefresh($data = "")
    {
        if (strlen($data) > 0) {
            $this->search = $data;
        }

        $this->dispatch('$refresh');
    }
}
