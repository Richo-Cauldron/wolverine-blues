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

    public function setBrand($value)
    {
        $this->brand = $value;
        $this->reset('brandResults');
    }

    public function setCategory($value)
    {
        $this->category = $value;
        $this->reset('categoryResults');
    }

    public function firstStepSubmit()
    {
        $this->reset('brandResults', 'categoryResults');
        $validatedData = $this->validate([
            'brand' => 'required|min:2',
            'category' => 'required|min:3'
        ]);
        
        // $this->currentStep = 2;
    }

}