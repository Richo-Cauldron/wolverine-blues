 <!-- Wizard Step 5 - Product Save -->
 @aware(['productType'])

 <div class="{{ $this->currentStep != 5 ? 'hidden' : '' }}" id="step-5">
    <div class="col-md-12">
        <p class="text-3xl font-bold my-6"> {{ $productType }} Submit :</p>

        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class=" inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="text-center">
                            <thead class="border-b bg-white">
                                <tr>
                                    <th scope="col" class="font-medium text-gray-900 px-6 py-2">
                                    <strong>Fields:</strong>
                                    </th>
                                    <th scope="col" class="font-medium text-gray-900 px-6 py-2">
                                    <strong>Data to Submit:</strong>
                                    </th>
                                    
                                </tr>
                            </thead class="border-b">
                            <tbody>
                                <tr class="bg-white border-b">
                                    <td class="px-6 py-2 whitespace-nowrap text-sm font-bold text-gray-600">Product Type:</td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                    {{  $productType }}
                                    </td>
                                </tr class="bg-white border-b">
                                <tr class="bg-white border-b">
                                    <td class="px-6 py-2 whitespace-nowrap text-sm font-bold text-gray-600">{{$productType}} Brand:</td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap">
                                    {{ $this->brand }}
                                    </td>
                                </tr>
                                <tr class="bg-white border-b">
                                    <td class="px-6 py-2 whitespace-nowrap text-sm font-bold text-gray-600">{{$productType}} Category:</td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap text-center">
                                    {{ $this->category }}
                                    </td>
                                </tr>
                                <tr class="bg-white border-b">
                                    <td class="px-6 py-2 whitespace-nowrap text-sm font-bold text-gray-600">{{$productType}} Valued Minimum Price:</td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap text-center">
                                        {{ $this->valueMin }}
                                    </td>
                                </tr>
                                <tr class="bg-white border-b">
                                    <td class="px-6 py-2 whitespace-nowrap text-sm font-bold text-gray-600">{{$productType}} Valued Maximum Price:</td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap text-center">
                                    {{ $this->valueMax }}
                                    </td>
                                </tr>
                                <tr class="bg-white border-b">
                                    <td class="px-6 py-2 whitespace-nowrap text-sm font-bold text-gray-600">{{$productType}} Ticketed Sale Price:</td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap text-center">
                                    {{ $this->salePrice }}
                                    </td>
                                </tr>
                                <tr class="bg-white border-b">
                                    <td class="px-6 py-2 whitespace-nowrap text-sm font-bold text-gray-600">{{$productType}} Details:</td>
                                    <td  class="text-sm text-gray-900 font-light px-6 py-2 text-justify whitespace-normal w-9/12">
                                        {{ $this->details }}
                                    </td>
                                </tr>
                                <tr class="bg-white border-b">
                                    <td class="px-6 py-2 whitespace-nowrap text-sm font-bold text-gray-600">{{$productType}} Search Reference:</td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap text-center">
                                    {{ $this->reference }}
                                    </td>
                                </tr>
                                <tr class="bg-white border-b">
                                    <td class="px-6 py-2 whitespace-nowrap text-sm font-bold text-gray-600">{{$productType}} Image File:</td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-2 whitespace-nowrap text-center">
                                    {{ $this->imageFile}}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <x-add-product-wizard.next-step-button nextStep="submitForm" />
        <x-add-product-wizard.back-step-button backStep="4" />
    </div>
</div> 