<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <x-button wire:click="editInsuranceInformation()" class="py-2 px-4 text-sm text-white hover:bg-gray-100 dark:hover: dark:text-gray-200 dark:hover:text-white">Edit</x-button>
    <x-dialog-modal wire:model="showEditInsuranceModal">
        <x-slot name="title">
            Edit Insurance Information
        </x-slot>

        <x-slot name="content">
            <div class="max-w-md mx-auto bg-white rounded-md overflow-hidden shadow-md">
                <div class="p-6">
                    <h2 class="text-xl font-semibold mb-4">Insurance Information</h2>
                    {{-- <form wire:submit.prevent=""> --}}
                        
                        <!-- Insurance Name -->
                        <div class="mb-4">
                            <label for="insurance_name" class="block text-sm font-medium text-gray-700">Insurance Name</label>
                            <input type="text" name="insurance_name" id="insurance_name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <!-- Insurance Number -->
                        <div class="mb-4">
                            <label for="insurance_number" class="block text-sm font-medium text-gray-700">Insurance Number</label>
                            <input type="text" name="insurance_number" id="insurance_number" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <!-- Insurance Provider -->
                        <div class="mb-4">
                            <label for="insurance_provider" class="block text-sm font-medium text-gray-700">Insurance Provider</label>
                            <input type="text" name="insurance_provider" id="insurance_provider" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <!-- Policy Number -->
                        <div class="mb-4">
                            <label for="policy_number" class="block text-sm font-medium text-gray-700">Policy Number</label>
                            <input type="text" name="policy_number" id="policy_number" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <!-- Coverage Details -->
                        <div class="mb-4">
                            <label for="coverage_details" class="block text-sm font-medium text-gray-700">Coverage Details</label>
                            <textarea name="coverage_details" id="coverage_details" rows="3" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                        </div>
                    {{-- </form> --}}
                </div>
            </div>
            
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="$toggle('showEditInsuranceModal')" wire:loading.attr="disabled">
                Cancel
            </x-secondary-button>

            <x-button class="ms-3" wire:click="updateInsuranceInformation()" wire:loading.attr="disabled">
                Save
            </x-button>
        </x-slot>
    </x-dialog-modal>
</div>
