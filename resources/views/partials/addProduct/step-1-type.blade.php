<!-- Wizard Step 1 - Product Type -->
<div class=" {{ $currentStep != 1 ? 'hidden' : '' }}" id="step-1">
    <p class="text-3xl font-semi-bold mb-6">Add {{ $productTitle }}</p>
    <div class="mb-3">
        <x-input-label for="brand">{{ $productTitle }} Brand:</x-input-label>
        <div class="w-full">
            <div class="flex relative">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <x-svg.search-input-magnifying-glass />
                </div>
                <input wire:model="brand" type="text" class="w-full indent-6 rounded-md shadow border-gray-300 focus:border-blue-300  focus:ring-blue-200 focus:ring-opacity-50 focus:ring-1 " placeholder="{{ $productTitle }} Brand" required>
                <div class="flex items-center ml-4">
                    <button wire:click="$emit('openModal', '{{ $productTitle }}', '{{ $brandTitle }}')" class="text-sm border border-gray-300 bg-gray-200 rounded px-2" >Add Brand</button>
                </div>
            </div>
        </div>
        <div>
            @if (isset($brandResults) && !empty($brand))
                <div class="w-64 rounded shadow-lg ml-2 border border-gray-300">
                    @if ($brandResults->count() > 0)
                        <ul>
                            @foreach ($brandResults as $result)
                                <li class="list-item cursor-pointer hover:bg-gray-100" wire:click="setBrand('{{ $result->name }}')">{{ $result->name }}</li>
                            @endforeach 
                        </ul>
                    @elseif ($brandResults->count() == 0)
                        <p>No Results</p>
                    @endif
                </div>
            @endif
        </div>
        @error('brand') <span class="error text-red-500">*{{ $message }}</span> @enderror
    </div>
    <div class="mb-3">
        <x-input-label for="category">{{ $productTitle }} Category:</x-input-label>
        <div class="w-full">
            <div class="flex relative">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <x-svg.search-input-magnifying-glass />
                </div>
                <input wire:model="category" type="text" class="w-full indent-6 rounded-md shadow border-gray-300 focus:border-blue-300  focus:ring-blue-200 focus:ring-opacity-50 focus:ring-1 " placeholder="{{ $productTitle }} Category" required>
                <div class="flex items-center ml-4">
                    <button wire:click="$emit('openModal', '{{ $productTitle }}', '{{ $categoryTitle }}')" class="text-sm border border-gray-300 bg-gray-200 rounded px-2" >Add Category</button>
                </div>
            </div>
        </div>
        <div>
            @if (isset($categoryResults) && !empty($category))
                <div class="w-64 rounded shadow-lg ml-2 border border-gray-300">
                    @if ($categoryResults->count() > 0)
                        <ul>
                            @foreach ($categoryResults as $result)
                                <li class="list-item cursor-pointer hover:bg-gray-100" wire:click="setCategory('{{ $result->name }}')">{{ $result->name }}</li>
                            @endforeach 
                        </ul>
                    @elseif ($categoryResults->count() == 0)
                        <p>No Results</p>
                    @endif
                </div>
            @endif
        </div>
        @error('category') <span class="error text-red-500">*{{ $message }}</span> @enderror
    </div>
    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none  dark:focus:ring-blue-800" wire:click="firstStepSubmit" type="button">Next</button>
    @livewire('components.modals.step-one-modal')
</div>