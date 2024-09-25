<?php

namespace App\Livewire\Crm;

use App\Models\Leads;
use Illuminate\Contracts\Database\Eloquent\Builder;
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

    public function delete($id)
    {
        $leads = Leads::find($id);
        $leads->delete();
        $this->setRefresh();
    }

    public function render()
    {
        $countNew = Leads::where('step_id', '=', 1)->count();
        $countPresent = Leads::where('step_id', '=', 2)->count();
        $countMeet = Leads::where('step_id', '=', 3)->count();
        $countNegotiate = Leads::where('step_id', '=', 4)->count();
        $countFinish = Leads::where('step_id', '=', 5)->count();
        $countCancle = Leads::where('step_id', '=', 6)->count();

        $leads = Leads::where(function (Builder $query) {
            $query->where('leads_name', 'like', "%$this->search%")
                ->orWhere('code', 'like', "%$this->search%");
        })
            ->where('step_id', '=', $this->step_id)
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
