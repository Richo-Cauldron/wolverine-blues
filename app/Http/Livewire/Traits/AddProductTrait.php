<?php

namespace App\Http\Livewire\Traits;

use App\Models\GarmentBrand;
use App\Models\GarmentCategory;
use Livewire\WithFileUploads;


trait AddProductTrait {

    use WithFileUploads;

    public $currentStep = 1;

    public $successMsg = '';

    // public $brandTitle = "Brand";
    // public $categoryTitle = "Category";

    // Step 1-5 wire:model variables
    public $brand, $category, $brandResults, $categoryResults;
    public $valueMin, $valueMax, $salePrice;
    public $details, $reference;

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
        // dd($validatedData);
        
        $this->currentStep = 2;
    }

    public function secondStepSubmit()
    {
        $validatedData = $this->validate([
            'valueMin' => 'required_if:valueMax,=,null',
            'valueMax' => 'required_if:valueMin,=,null',
            'salePrice' => 'required'
        ]);
        // dd($validatedData);

        $this->currentStep = 3;
    }

    public function thirdStepSubmit()
    {
        $validatedData = $this->validate([
            'details' => 'required',
            'reference' => 'required'
        ]);
        dd($validatedData);

        $this->currentStep = 4;
    }

    public function back($step)
    {
        $this->currentStep = $step;    
    }

}