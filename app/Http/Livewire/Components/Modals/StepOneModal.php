<?php

namespace App\Http\Livewire\Components\Modals;

use Livewire\Component;
use App\Models\GarmentBrand;
use App\Models\GarmentCategory;

class StepOneModal extends Component
{
    public $showModal = false;

    public $department, $heading, $name;

    protected $listeners = ['openModal'];

    public function render()
    {
        return view('livewire.components.modals.step-one-modal');
    }

    public function openModal($department, $heading)
    {
        $this->showModal = true;
        
        $this->department = $department;
        $this->heading = $heading;
    }

    public function closeModal()    
    {
        $this->showModal = false;
    }

    protected function rules()
    {
        if ($this->heading === 'Brand') {
            return [
                'name' => 'required|min:2|unique:garment_brands,name',
            ];
        } elseif ($this->heading === 'Category') {
            return [
                'name' => 'required|min:3|unique:garment_categories,name',
            ];
        }
    }

    public function save()
    {
        $this->validate();

        if ($this->heading === 'Brand') {
            GarmentBrand::create([
                'name' => ucwords($this->name)
            ]);
        } elseif ($this->heading === 'Category') {
            GarmentCategory::create([
                'name' => ucwords($this->name)
            ]);
        }
        
        $this->reset('name');

        $this->emit('updateCategories');

        $this->closeModal();
    }
}
