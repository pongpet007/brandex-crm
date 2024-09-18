<?php

namespace App\Livewire\Crm;

use App\Models\Products;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('livewire.layout.themebd')]
class ProductForm extends Component
{
    public $pro_id = 0;
    public $pro_name = "";
    public $pro_detail = "";
    public $pro_price = 0;
    public $is_active = 1;

    
    public function save()
    {
        if ($this->pro_id == 0) {
            Products::create([
                'pro_name' => $this->pro_name,
                'pro_detail' => $this->pro_detail,
                'pro_price' => $this->pro_price,
                'is_active' => $this->is_active,
                'cby' => Auth::user()->name
            ]);
        } else {
            $product = Products::find($this->pro_id);
            $product->pro_name = $this->pro_name;
            $product->pro_detail = $this->pro_detail;
            $product->pro_price = $this->pro_price;
            $product->is_active = $this->is_active;
            $product->uby = Auth::user()->name;
            $product->save();
        }
        redirect("product");
    }

    public function render()
    {
       
        if ($this->pro_id > 0) {
            $product = Products::find($this->pro_id);
            $this->pro_name = $product->pro_name;
            $this->pro_detail = $product->pro_detail;
            $this->pro_price = $product->pro_price;
            $this->is_active = $product->is_active;
        }

        return view('livewire.crm.product-form');
    }
}
