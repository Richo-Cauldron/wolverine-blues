<?php

namespace App\Http\Livewire\Traits;

use App\Models\GarmentBrand;
use Livewire\WithFileUploads;


trait AddProductTrait {

    use WithFileUploads;

    public $currentStep = 1;

    public $successMsg = '';

    public $brandTitle = "Brand";
    public $categoryTitle = "Category";

    public $brand, $category, $results;

    public function updatedBrand()
    {
        $this->results = GarmentBrand::search($this->brand)->get();
    }

    public function captureBrand($value)
    {
        // dd($value);
        $this->brand = $value;
        // dd($this->brand);
        $this->reset('results');
    }

    public function firstStepSubmit()
    {
        $validatedData = $this->validate([
            'brand' => 'required'
        ]);
        // $this->currentStep = 2;
    }

}