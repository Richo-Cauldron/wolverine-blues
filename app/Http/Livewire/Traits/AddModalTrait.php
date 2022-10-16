<?php

namespace App\Http\Livewire\Traits;


trait AddModal {

    public $showModal = false;

    public $product, $productDescriptor;

    // protected $listeners = ['openModal'];

    public function openModal($product, $productDescriptor)
    {
        $this->showModal = true;

        $this->product = $product;
        $this->productDescriptor = $productDescriptor;

    }

    public function closeModal()    
    {
        $this->showModal = false;
    }

}