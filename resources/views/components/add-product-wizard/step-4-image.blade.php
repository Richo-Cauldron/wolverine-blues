 <!-- Wizard Step 4 - Product Image -->
 @aware(['productType'])

<div class="{{ $this->currentStep != 4 ? 'hidden' : '' }}" id="step-4"> 
    <p class="text-3xl font-semi-bold mb-6">Add {{ $productType }} Image</p>

    <div>
        {{-- <form wire:submit.prevent="fourthStepSubmit"> --}}
            <div class="mb-3">
                <x-input-label for="imageTitle">Image Title:</x-input-label>
                <x-text-input type="text" wire:model="imageTitle" class="w-full text-gray-700 focus:shadow-outline focus:ring-1" id="product_brand" />
                @error('imageTitle') <span class="error text-red-500">*{{ $message }}</span> @enderror
            </div>
            <div>
                <x-input-label for="imageFile"> Image Upload: </x-input-label>
                <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                    <div class="space-y-1 text-center">
                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <div class="text-sm text-gray-600">
                            <x-input-label for="image" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                <span>Upload a file</span>
                                <x-text-input id="image" name="image" type="file" class="sr-only" wire:model="image"/>
                            </x-input-label>
                            {{-- <p class="">or drag and drop</p> --}}
                        </div>
                        <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                        @error('image') <span class="error text-red-500">*{{ $message }}</span> @enderror
                        @if ($this->image)
                            Photo Preview:
                            <img src="{{ $this->image->temporaryUrl() }}" class="object-scale-down h-48 w-96">
                        @endif
                    </div>
                </div>
            </div> 
            <div class="mt-3">
                <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none  dark:focus:ring-blue-800" type="button" wire:click="fourthStepSubmit('{{ $productType }}')">Next</button>
                <button class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-8 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900" type="button" wire:click="back(3)">Back</button>
            </div>
        {{-- </form> --}}
    </div>
</div>
