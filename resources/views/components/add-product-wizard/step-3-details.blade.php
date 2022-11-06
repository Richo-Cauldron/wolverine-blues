<!-- Wizard Step 3 - Product Details & Search Reference-->
@aware(['productType'])

<div class="row setup-content {{ $this->currentStep != 3 ? 'hidden' : '' }}" id="step-3">
    <div class="col-md-12">
        <p class="text-3xl font-semi-bold my-6"> {{ $productType }} Details</p>
        <div class="mb-4">
            <x-input-label class="block text-gray-700 text-smdm font-semi-bold mb-2" for="details">{{ $productType }} Details:</x-input-label>
            <x-text-area wire:model="details" id="details">
            </x-text-area>
            @error('details') <span class="error text-red-500">*{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <x-input-label class="block text-gray-700 text-smdm font-semi-bold mb-2" for="reference">Search Reference:</x-input-label>
            <input type="text" wire:model="reference" class="w-full text-gray-700 focus:shadow-outline focus:ring-1" id="reference"/>
            @error('reference') <span class="error text-red-500">*{{ $message }}</span> @enderror
        </div>
        <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none  dark:focus:ring-blue-800" type="button"
            wire:click="thirdStepSubmit">Next</button>
        <button class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-8 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900" type="button" wire:click="back(2)">Back</button>
    </div>
</div> 