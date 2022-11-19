<?php

namespace App\Http\Livewire\Traits;

use Illuminate\Support\Str;
use App\Models\GarmentBrand;
use Livewire\WithFileUploads;
use App\Models\GarmentCategory;


trait AddProductTrait {

    use WithFileUploads;

    public $currentStep = 1;

    public $successMsg = '';

    // Step 1 wire:model variables
    public $brand, $category, $brandResults, $categoryResults;
    // Step 2 wire:model variables
    public $valueMin, $valueMax, $salePrice;
    // Step 3 wire:model variables
    public $details, $reference;
    // Step 4 wire:model variables
    public $imageTitle, $image, $imageFile;

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
        // dd($validatedData);

        $this->currentStep = 4;
    }
    
    public function fourthStepSubmit($productType)
    {
        $imageSubFolder = Str::plural(strtolower($productType));
        //dd($imageSubFolder);
        
        $validatedData = $this->validate(
            [
                'imageTitle' => 'nullable|required_with:image',
                'image' => 'nullable|required_with:imageTitle|image|mimes:jpg,jpeg,png|max:5048'
            ],
            [
                'imageTitle.required_with' => 'An image title is required when an image is uploaded.',
                'image.required_with' => 'An image must be uploaded if a Title is supplied.'
            ]
        );
        // dd($validatedData);

        if (!$this->imageTitle == null && !$this->image == null) {
      
            $newImageTitle = Str::camel($this->imageTitle);
            // dd($newImageTitle);

            $imagePath = $this->image->getFileName();
            $extension = pathinfo($imagePath, PATHINFO_EXTENSION);
            // dd($imagePath);

            $this->imageFile = date('d-m-y') . '-' . $newImageTitle . '.' . $extension;
            // dd($newImageFilePath);

            $this->image->storeAs('images/'. $imageSubFolder, $this->imageFile, 'public');
        }

        $this->currentStep = 5;
        
    }

    public function submitForm()
    {
        // Product::create([
        //     'name' => $this->name,
        //     'price' => $this->price,
        //     'detail' => $this->detail,
        // ]);
  
        // $this->successMsg = 'Product successfully created.';
  
        // $this->clearForm();
  
        // $this->currentStep = 1;
    }

    public function updatedImage()
    {
        $this->resetErrorBag('image');
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

    public function back($step)
    {
        $this->currentStep = $step;    
    }

}