<?php

namespace App\Http\Livewire\Traits;

use App\Models\GarmentBrand;
use App\Models\GarmentCategory;
use Livewire\WithFileUploads;


trait AddProductTrait {

    use WithFileUploads;

    public $currentStep = 1;

    public $successMsg = '';

    public $brandTitle = "Brand";
    public $categoryTitle = "Category";

    public $brand, $category, $brandResults, $categoryResults;

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

    public function setBrand($value)
    {
        // dd($value);
        $this->brand = $value;
        // dd($this->brand);
        $this->reset('brandResults');
    }

    public function setCategory($value)
    {
        // dd($value);
        $this->category = $value;
        // dd($this->brand);
        $this->reset('categoryResults');
    }

    public function firstStepSubmit()
    {
        $validatedData = $this->validate([
            'brand' => 'required|min:2',
            'category' => 'required|min:3'
        ]);
        // $this->currentStep = 2;
    }

}