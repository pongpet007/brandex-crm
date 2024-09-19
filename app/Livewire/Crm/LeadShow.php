<?php

namespace App\Livewire\Crm;

use App\Models\Leads;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\WithPagination;

#[Layout('livewire.layout.themebd')]
class LeadShow extends Component
{   use WithPagination;

    public $search;

    public function delete($id){
        $leads = Leads::find($id);
        $leads->delete();
        $this->setRefresh();
    }

    public function render()
    {
        $countNew = Leads::where('step_id','=',1)->count();
        $countPresent = Leads::where('step_id','=',2)->count();
        $countMeet = Leads::where('step_id','=',3)->count();
        $countNegotiate = Leads::where('step_id','=',4)->count();
        $countFinish = Leads::where('step_id','=',5)->count();
        $countCancle = Leads::where('step_id','=',6)->count();

        $leads = Leads::when(strlen($this->search) > 0, function (Builder $query) {
            $query->where('leads_name', 'like', "%$this->search%")
                ->orWhere('code', 'like', "%$this->search%");
        })
        ->where('step_id','=',1)
        ->paginate(10);

        return view('livewire.crm.lead-show',compact('countNew','countPresent','countMeet','countNegotiate','countFinish','countCancle','leads'));
    }

    #[On('leads-refresh')]
    public function setRefresh()
    {
        $this->dispatch('$refresh');
    }
}
