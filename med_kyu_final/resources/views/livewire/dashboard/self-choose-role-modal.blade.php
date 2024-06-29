<div>
    {{-- The whole world belongs to you. --}}

    @props(['id', 'maxWidth'])

    @php
        $id = uniqid('modal-');

        $maxWidth = [
            'sm' => 'sm:max-w-sm',
            'md' => 'sm:max-w-md',
            'lg' => 'sm:max-w-lg',
            'xl' => 'sm:max-w-xl',
            '2xl' => 'sm:max-w-2xl',
        ][$maxWidth ?? '2xl'];
    @endphp

    <div x-data="{ show: @entangle('selfChooseRoleModal_isOpen') }" x-on:close.stop="show = false" x-show="show" id="{{ $id }}"
        class="jetstream-modal  fixed inset-0 overflow-y-auto px-4 py-6 sm:px-0 z-50" style="display: none;">
        <div x-show="show" class="fixed inset-0 transform transition-all" x-transition:enter="ease-out duration-300"
            x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0">
            <div class="absolute inset-0 bg-gray-500 dark:bg-gray-900 opacity-95"></div>
        </div>

        <div x-show="show"
            class="mb-6 bg-white dark:bg-gray-800 rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full {{ $maxWidth }} sm:mx-auto"
            x-trap.inert.noscroll="show" x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">

            <div
                class="bg-white dark:bg-gray-800 rounded-lg shadow-xl overflow-hidden transform transition-all sm:w-full {{ $maxWidth }} sm:mx-auto">
                <div class="px-6 py-4">
                    <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Welcome!</h2>
                    <p class="text-md text-gray-600 dark:text-gray-200">What best suits you?</p>
                    <form wire:submit.prevent="">
                        <div class="mt-8 space-y-4">
                            <x-validation-errors class="mb-4" />
                            <div class="flex items-center">
                                <input type="radio" wire:model.live="selectedRole" value="farmer"
                                    class="form-radio h-5 w-5 text-blue-600">
                                <label for="farmer"
                                    class="ml-2 block text-sm font-medium text-gray-900 dark:text-gray-300">
                                    Farmer
                                </label>
                            </div>
                            <div class="flex items-center">
                                <input type="radio" wire:model.live="selectedRole" value="buyer"
                                    class="form-radio h-5 w-5 text-blue-600">
                                <label for="buyer"
                                    class="ml-2 block text-sm font-medium text-gray-900 dark:text-gray-300">
                                    Buyer
                                </label>
                            </div>
                            <div class="mt-6">
                                <button wire:click="submitRole"
                                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>


</div>
