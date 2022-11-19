<!-- Wizard Step 2 - Product Value -->
@aware(['productType'])
<div class=" {{ $this->currentStep != 2 ? 'hidden' : '' }}" id="step-2">
    <p class="text-3xl font-semi-bold mb-6">{{ $productType }} Price Range</p>
    <div class="mb-3">
        <x-input-label for="valueMin">{{ $productType }} Valued Minimum Price:</x-input-label>
        <div class="flex">
            <span class="mt-1 p-1 text-gray-600">$</span>
            <x-text-input type="number" min="0" wire:model="valueMin" class="w-full text-gray-700 focus:shadow-outline focus:ring-1" id="value_min"/>
        </div>
        @error('valueMin') <span class="error text-red-500">*{{ $message }}</span> @enderror
    </div>
    <div class="mb-3">
        <x-input-label for="valueMax">{{ $productType }} Valued Maximum Price:</x-input-label>
        <div class="flex">
            <span class="mt-1 p-1 text-gray-600">$</span>
            <x-text-input type="number" min="0" wire:model="valueMax" class="w-full text-gray-700 focus:shadow-outline focus:ring-1" id="value_max" />
        </div>
        @error('valueMax') <span class="error text-red-500">*{{ $message }}</span> @enderror
    </div>
    <div class="mb-3">
        <x-input-label for="salePrice">{{ $productType }} Sale Price:</x-input-label>
        <div class="flex">
            <span class="mt-1 p-1 text-gray-600">$</span>
            <x-text-input type="number" min="0" wire:model="salePrice" class="w-full text-gray-700 focus:shadow-outline focus:ring-1" id="sale_price" />
        </div>
        @error('salePrice') <span class="error text-red-500">*{{ $message }}</span> @enderror
    </div>

    <x-add-product-wizard.next-step-button nextStep="secondStepSubmit" />

    <x-add-product-wizard.back-step-button backStep="1" />

</div> 
