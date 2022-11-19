<!-- Wizard Step 1 - Product Type -->
@aware(['productType', 'brand', 'category'])

<div class=" {{ $this->currentStep != 1 ? 'hidden' : '' }}" id="step-1">
    <p class="text-3xl font-semi-bold mb-6">Add {{ $productType }} Type:</p>
    <div class="mb-3">
        <x-input-label for="brand">{{ $productType }} Brand:</x-input-label>
        <div class="w-full">
            <div class="flex relative">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <x-svg.search-input-magnifying-glass />
                </div>
                <input wire:model="brand" type="text" class="w-full indent-6 rounded-md shadow border-gray-300 focus:border-blue-300  focus:ring-blue-200 focus:ring-opacity-50 focus:ring-1 " placeholder="{{ $productType }} Brand" required>
                <div class="flex items-center ml-4">
                    <button wire:click="$emit('openModal', '{{ $productType }}', '{{ $brand }}')" class="text-sm border border-gray-300 bg-gray-200 rounded px-2" >Add Brand</button>
                </div>
            </div>
        </div>
        <div>
            @if (isset($this->brandResults) && !empty($this->brand))
                <div class="w-64 rounded shadow-lg ml-2 border border-gray-300">
                    @if ($this->brandResults->count() > 0)
                        <ul>
                            @foreach ($this->brandResults as $result)
                                <li class="list-item cursor-pointer hover:bg-gray-100" wire:click="setBrand('{{ $result->name }}')">{{ $result->name }}</li>
                            @endforeach 
                        </ul>
                    @elseif ($this->brandResults->count() == 0)
                        <p>No Results</p>
                    @endif
                </div>
            @endif
        </div>
        @error('brand') <span class="error text-red-500">*{{ $message }}</span> @enderror
    </div>
    <div class="mb-3">
        <x-input-label for="category">{{ $productType }} Category:</x-input-label>
        <div class="w-full">
            <div class="flex relative">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <x-svg.search-input-magnifying-glass />
                </div>
                <input wire:model="category" type="text" class="w-full indent-6 rounded-md shadow border-gray-300 focus:border-blue-300  focus:ring-blue-200 focus:ring-opacity-50 focus:ring-1 " placeholder="{{ $productType }} Category" required>
                <div class="flex items-center ml-4">
                    <button wire:click="$emit('openModal', '{{ $productType }}', '{{ $category }}')" class="text-sm border border-gray-300 bg-gray-200 rounded px-2" >Add Category</button>
                </div>
            </div>
        </div>
        <div>
            @if (isset($this->categoryResults) && !empty($this->category))
                <div class="w-64 rounded shadow-lg ml-2 border border-gray-300">
                    @if ($this->categoryResults->count() > 0)
                        <ul>
                            @foreach ($this->categoryResults as $result)
                                <li class="list-item cursor-pointer hover:bg-gray-100" wire:click="setCategory('{{ $result->name }}')">{{ $result->name }}</li>
                            @endforeach 
                        </ul>
                    @elseif ($this->categoryResults->count() == 0)
                        <p>No Results</p>
                    @endif
                </div>
            @endif
        </div>
        @error('category') <span class="error text-red-500">*{{ $message }}</span> @enderror
    </div>

    <x-add-product-wizard.next-step-button nextStep="firstStepSubmit"/>
    
    @livewire('components.modals.step-one-modal')
</div>