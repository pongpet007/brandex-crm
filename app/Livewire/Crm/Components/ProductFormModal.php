<?php

namespace App\Livewire\Crm\Components;

use App\Models\Products;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class ProductFormModal extends Component
{
    public $title = 'Product Add';
    public $pro_id = 0;
    public $pro_name = "";
    public $pro_detail = "";
    public $pro_price = 0;
    public $is_active = 1;

    public function save()
    {
        if ($this->pro_id == 0) {
            Products::create([
                'pro_name' => trim($this->pro_name),
                'pro_detail' => $this->pro_detail,
                'pro_price' => $this->pro_price,
                'is_active' => $this->is_active,
                'cby' => Auth::user()->name
            ]);
            $msg = "Product saved.";
        } else {
            $product = Products::find($this->pro_id);
            $product->pro_name = $this->pro_name;
            $product->pro_detail = $this->pro_detail;
            $product->pro_price = $this->pro_price;
            $product->is_active = $this->is_active;
            $product->uby = Auth::user()->name;
            $product->save();
            $msg = "Product updated.";
        }

        $this->reset('pro_name');
        $this->reset('pro_detail');
        $this->reset('pro_price');       
        $this->reset('is_active');

        $this->dispatch('product-refresh');       
        $this->dispatch('toast-alert', msg: [$msg, 'success']);
        $this->dispatch('product-modal-close');
    }

    #[On('product-edit')]
    public function setEdit($id)
    {
        $this->pro_id = $id;
        $this->title = "Product edit";
        
        $product = Products::find($this->pro_id);
        $this->pro_name = $product->pro_name;
        $this->pro_detail = $product->pro_detail;
        $this->pro_price = $product->pro_price;
        $this->is_active = $product->is_active;       
    }

    public function render()
    {
        return view('livewire.crm.components.product-form-modal');
    }
}
