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

        <x-add-product-wizard.next-step-button nextStep="thirdStepSubmit" />

        <x-add-product-wizard.back-step-button backStep="2" />
    </div>
</div> 