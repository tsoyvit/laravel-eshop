<?php

namespace App\Livewire;

use App\Models\Product;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render(): view
    {
        $hitProducts = Product::query()
            ->orderBy('id', 'desc')
            ->where('is_hit', 0)
            ->limit(4)
            ->get();

        $newProducts = Product::query()
            ->orderBy('id', 'desc')
            ->where('is_new', 0)
            ->limit(8)
            ->get();

        return view('livewire.home-component', compact('hitProducts', 'newProducts'));
    }
}
