<!-- Wizard Progress Bar -->
<div class="table relative w-full mb-8">
    <div class="table-row">
        <div class="text-center relative table-cell">
            <button class=" {{ $currentStep != 1 ? 'text-white bg-blue-400 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 cursor-default'  : 'text-white bg-green-400  font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 cursor-default' }}">1</button>
            <p>Product Type</p>
        </div>
        <div class="text-center relative table-cell">
            <button class=" {{ $currentStep != 2 ? 'text-white bg-blue-400 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 cursor-default'  : 'text-white bg-green-400  font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 cursor-default' }}">2</button>
            <p>Product Value</p>
        </div>
        <div class="text-center relative table-cell">
            <button class=" {{ $currentStep != 3 ? 'text-white bg-blue-400 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 cursor-default'  : 'text-white bg-green-400  font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 cursor-default' }}">3</button>
            <p>Product Details</p>
        </div>
        <div class="text-center relative table-cell">
            <button class=" {{ $currentStep != 4 ? 'text-white bg-blue-400 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 cursor-default'  : 'text-white bg-green-400  font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 cursor-default' }}">4</button>
            <p>Product Image</p>
        </div>
        <div class="text-center relative table-cell">
            <button class=" {{ $currentStep != 5 ? 'text-white bg-blue-400 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 cursor-default'  : 'text-white bg-green-400  font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 cursor-default' }}">5</button>
            <p>Product Save</p>
        </div>
    </div>
</div>