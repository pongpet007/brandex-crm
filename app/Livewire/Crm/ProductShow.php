<?php

namespace App\Livewire\Crm;

use App\Models\Crm\Products;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('livewire.layout.themebd')]
class ProductShow extends Component
{
    use WithPagination;

    public $search;

    public function render()
    {
        $products = Products::when(strlen($this->search) > 0, function (Builder $query) {
            $query->where('name', 'like', "%$this->search%")
                ->orWhere('email', 'like', "%$this->search%");
        })->paginate(10);
        
        return view('livewire.crm.product-show',compact('products'));
    }
}
