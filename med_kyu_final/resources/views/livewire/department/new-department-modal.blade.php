<div>
    <a href="#" wire:click="newDepartmentModal"
        class="bg-blue-500 text-white px-4 py-2 rounded mt-4 hover:bg-blue-600">Add Department</a>
        <x-dialog-modal wire:model="newDepartmentModal_isOpen">
            <x-slot name="title">
                {{ __('New Department') }}
            </x-slot>

            <x-slot name="content">
                <x-form-section submit="">
                    <x-slot name="title">
                        {{ __('New Department') }}
                    </x-slot>

                    <x-slot name="description">
                        {{ __('Create a new department for your users.') }}
                    </x-slot>

                    <x-slot name="form">
                        <div class="col-span-6">
                            <x-label for="department_name" value="{{ __('Name') }}" />
                            <x-input id="department_name" type="text" class="mt-1 block w-full" wire:model.defer="department_name" />
                            <x-input-error for="department_name" class="mt-2" />
                        </div>
                        <div class="col-span-6">
                            <x-label for="department_description" value="{{ __('Description') }}" />
                            <textarea id="department_description" class="mt-1 block w-full form-textarea" wire:model.defer="department_description"
                                rows="3"></textarea>
                            <x-input-error for="department_description" class="mt-2" />
                        </div>
                    </x-slot>
                    {{-- <x-slot name="actions">
                        
                    </x-slot> --}}

                </x-form-section>


            </x-slot>

            <x-slot name="footer">
                <x-secondary-button wire:click="$set('newDepartmentModal_isOpen', false)" wire:loading.attr="disabled">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-button class="ms-3" wire:click="createDepartment" wire:loading.attr="disabled">
                    {{ __('Create') }}
                </x-button>
            </x-slot>

        </x-dialog-modal>

</div>