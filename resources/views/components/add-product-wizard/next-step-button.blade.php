@aware(['productType'])

@if (($this->currentStep == 4))

    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none  dark:focus:ring-blue-800" wire:click="{{ $nextStep }}('{{ $productType }}')" type="button">Next</button>
    
@else

    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none  dark:focus:ring-blue-800" wire:click="{{ $nextStep }}" type="button">Next</button>
    
@endif
