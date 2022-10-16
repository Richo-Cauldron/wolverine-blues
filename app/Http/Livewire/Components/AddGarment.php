<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use App\Models\GarmentBrand;
use App\Models\GarmentCategory;
use App\Http\Livewire\Traits\AddProductTrait;

class AddGarment extends Component
{
    use AddProductTrait;

    public $product = "garment";
    public $productTitle = "Garment";

    protected $listeners = ['updateCategories' => 'mount'];

    public function mount()
    {
        $this->brands = GarmentBrand::all();
        $this->categories = GarmentCategory::all();
    }

    public function render()
    {
        return view('livewire.components.add-garment');
    }

    public function updatedBrand()
    {
        $this->resetErrorBag('brand');
        $this->brandResults = GarmentBrand::search($this->brand)->get();
    }

    public function updatedCategory()
    {
        $this->resetErrorBag('category');
        $this->categoryResults = GarmentCategory::search($this->category)->get();
    }
}
