<!-- Wizard Progress Bar -->
@php
    $steps = ['Type', 'Value', 'Details', 'Image', 'Save'];
@endphp

<div class="table relative w-full mb-8">
    <div class="table-row">
        @for ($i = 0; $i < 5; $i++)
            <div class="text-center relative table-cell">
                <button class=" {{ $this->currentStep !=  $i+1 ? 'text-white bg-blue-400 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 cursor-default'  : 'text-white bg-green-400  font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 cursor-default' }}">{{ $i+1 }}</button>
                <p>{{ $this->productTitle }} {{ $steps[$i] }}</p>
            </div>
        @endfor
    </div>
</div>

{{-- <div class="table relative w-full mb-8">
    <div class="table-row">
        <div class="text-center relative table-cell">
            <button class=" {{ $this->currentStep != 1 ? 'text-white bg-blue-400 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 cursor-default'  : 'text-white bg-green-400  font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 cursor-default' }}">1</button>
            <p>{{ $this->productTitle }} Type</p>
        </div>
        <div class="text-center relative table-cell">
            <button class=" {{ $this->currentStep != 2 ? 'text-white bg-blue-400 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 cursor-default'  : 'text-white bg-green-400  font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 cursor-default' }}">2</button>
            <p>{{ $this->productTitle }} Value</p>
        </div>
        <div class="text-center relative table-cell">
            <button class=" {{ $this->currentStep != 3 ? 'text-white bg-blue-400 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 cursor-default'  : 'text-white bg-green-400  font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 cursor-default' }}">3</button>
            <p>{{ $this->productTitle }} Details</p>
        </div>
        <div class="text-center relative table-cell">
            <button class=" {{ $this->currentStep != 4 ? 'text-white bg-blue-400 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 cursor-default'  : 'text-white bg-green-400  font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 cursor-default' }}">4</button>
            <p>{{ $this->productTitle }} Image</p>
        </div>
        <div class="text-center relative table-cell">
            <button class=" {{ $this->currentStep != 5 ? 'text-white bg-blue-400 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 cursor-default'  : 'text-white bg-green-400  font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 cursor-default' }}">5</button>
            <p>{{ $this->productTitle }} Save</p>
        </div>
    </div>
</div> --}}