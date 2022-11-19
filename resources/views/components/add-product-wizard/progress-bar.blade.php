<!-- Wizard Progress Bar -->
@aware(['productType'])

@php
    $steps = ['Type', 'Value', 'Details', 'Image', 'Submit'];
@endphp

<div class="table relative w-full mb-8">
    <div class="table-row">
        @for ($i = 0; $i < 5; $i++)
            <div class="text-center relative table-cell">
                <button class=" {{ $this->currentStep !=  $i+1 ? 'text-white bg-blue-400 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 cursor-default'  : 'text-white bg-green-400  font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 cursor-default' }}">{{ $i+1 }}</button>
                <p>{{ $productType }} {{ $steps[$i] }}</p>
            </div>
        @endfor
    </div>
</div>
