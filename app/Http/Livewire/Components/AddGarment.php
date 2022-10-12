<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use App\Http\Livewire\Traits\AddProductTrait;

class AddGarment extends Component
{
    use AddProductTrait;

    public $product = "garment";
    public $productTitle = "Garment";

    public function render()
    {
        return view('livewire.components.add-garment');
    }
}
