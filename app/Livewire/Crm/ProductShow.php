<?php

namespace App\Livewire\Crm;

use App\Models\Products;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('livewire.layout.themebd')]
class ProductShow extends Component
{
    use WithPagination;

    public $search;

    public function delete($id){
        $product = Products::find($id);
        $product->delete();
        $this->setRefresh();
    }

    public function render()
    {
        $products = Products::when(strlen($this->search) > 0, function (Builder $query) {
            $query->where('pro_name', 'like', "%$this->search%")
                ->orWhere('pro_detail', 'like', "%$this->search%");
        })->paginate(10);
        
        return view('livewire.crm.product-show',compact('products'));
    }

    #[On('product-refresh')]
    public function setRefresh()
    {
        $this->dispatch('$refresh');
    }
}
