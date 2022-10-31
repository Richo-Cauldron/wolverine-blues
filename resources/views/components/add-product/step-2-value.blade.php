<!-- Wizard Step 2 - Product Value -->
<div class=" {{ $this->currentStep != 2 ? 'hidden' : '' }}" id="step-2">
    <p class="text-3xl font-semi-bold mb-6">{{ $this->productTitle }} Price Range</p>
    <div class="mb-3">
        <x-input-label for="value_min">{{ $this->productTitle }} Valued Minimum Price:</x-input-label>
        <div class="flex">
            <span class="mt-1 p-1 text-gray-600">$</span>
            <x-text-input type="number" min="0" wire:model="value_min" class="w-full text-gray-700 focus:shadow-outline focus:ring-1" id="value_min"/>
        </div>
        @error('value_min') <span class="error text-red-500">*{{ $message }}</span> @enderror
    </div>
    <div class="mb-3">
        <x-input-label for="value_max">{{ $this->productTitle }} Valued Maximum Price:</x-input-label>
        <div class="flex">
            <span class="mt-1 p-1 text-gray-600">$</span>
            <x-text-input type="number" min="0" wire:model="value_max" class="w-full text-gray-700 focus:shadow-outline focus:ring-1" id="value_max" />
        </div>
        @error('value_max') <span class="error text-red-500">*{{ $message }}</span> @enderror
    </div>
    <div class="mb-3">
        <x-input-label for="sale_price">{{ $this->productTitle }} Sale Price:</x-input-label>
        <div class="flex">
            <span class="mt-1 p-1 text-gray-600">$</span>
            <x-text-input type="number" min="0" wire:model="sale_price" class="w-full text-gray-700 focus:shadow-outline focus:ring-1" id="sale_price" />
        </div>
        @error('sale_price') <span class="error text-red-500">*{{ $message }}</span> @enderror
    </div>
    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none  dark:focus:ring-blue-800" wire:click="secondStepSubmit" type="button">Next</button>
    <button class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-8 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900" type="button" wire:click="back(1)">Back</button>
</div> 
