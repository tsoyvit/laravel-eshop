<?php

namespace App\Livewire\Product;

use App\Models\Product;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class ProductComponent extends Component
{
    public function render(): View
    {
        $products = Product::all();
        return view('livewire.product.product-component', ['products' => $products]);
    }
}
