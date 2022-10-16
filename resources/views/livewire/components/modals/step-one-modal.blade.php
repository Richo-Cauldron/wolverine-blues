<div class="@if (!$showModal) hidden @endif flex items-center justify-center h-screen m-auto md:inset-0 h-modal md:h-full bg-gray-600 fixed h-modal">
    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
        <form wire:submit.prevent="save">
            <div class="flex items-center justify-center h-screen m-auto md:inset-0 h-modal md:h-full bg-gray-600 fixed">
                <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <x-svg.close-modal-button /> 
                        <div class="p-3 text-center">
                            <x-svg.modal-icon />
                        </div>
                        <div class="flex flex-col items-start p-4 w-full">
                            <div class="text-gray-900 font-medium text-2xl mx-auto">
                                Add {{ $department }} {{ $heading }}
                            </div>
                            <div class="w-full pt-2">
                                <hr class=" border-t border-gray-200">
                                <label class="block font-semibold text-sm text-gray-700 pt-6" for="name">
                                     Add {{ $department }} {{ $heading }}
                                </label>
                                <input type="text" wire:model.defer="name" style="width:inherit" class="mt-2 text-sm sm:text-base pl-2 pr-4 rounded-lg border-gray-200">
                                @error('name')
                                    <div class="text-sm text-red-500 ml-1">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="ml-auto mt-4">
                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-md" type="submit">Save
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    
            </div>
        </div>
    </div>
</div>