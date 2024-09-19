<?php

namespace App\Livewire\Crm;

use App\Models\Customers;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\WithPagination;

#[Layout('livewire.layout.themebd')]
class CustomerShow extends Component
{
    use WithPagination;

    public $search;

    public function delete($id){
        $customer = Customers::find($id);
        $customer->delete();
        $this->setRefresh();
    }

    public function render()
    {
        $customers = Customers::when(strlen($this->search) > 0, function (Builder $query) {
            $query->where('cus_name', 'like', "%$this->search%")
                ->orWhere('contact_name', 'like', "%$this->search%")
                ->orWhere('cus_address_th', 'like', "%$this->search%")
                ;
        })
        ->orderBy('cus_name','asc')
        ->paginate(10);
        return view('livewire.crm.customer-show',compact('customers'));
    }

    #[On('customer-refresh')]
    public function setRefresh()
    {
        $this->dispatch('$refresh');
    }
}
