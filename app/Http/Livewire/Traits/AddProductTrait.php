<?php

namespace App\Http\Livewire\Traits;

use Livewire\WithFileUploads;


trait AddProductTrait {

    use WithFileUploads;

    public $currentStep = 1;

    public $successMsg = '';

    public $brandTitle = "Brand";
    public $categoryTitle = "Category";

    public $brand = '';
    public $category = '';

}