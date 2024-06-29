<div
    class="m-4 flex flex-col w-1/2 space-y-4 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700 p-4">
    {{-- Success is as dangerous as failure. --}}
    Blood Group:
    {{ $patient->bloodGroup ? $patient->bloodGroup->name : 'N/A' }}
    @can('change-patient-bloodgroup')
        <x-button wire:click="openEditBloodGroupModal">Change</x-button>

        <x-dialog-modal wire:model="editBloodGroupModal_isOpen">
            <x-slot name="title">
                {{-- {{ __('Edit Blood Group') }} --}}
            </x-slot>

            <x-slot name="content">
                <x-form-section submit="">
                    <x-slot name="title">
                        {{ __('Edit Blood Group') }}
                    </x-slot>

                    <x-slot name="description">
                        {{ __('Edit the patient\'s blood group.') }}
                    </x-slot>

                    <x-slot name="form">
                        <div class="col-span-6">
                            <x-label for="blood_group_id" value="{{ __('Blood Group') }}" />
                            <select id="blood_group_id" class="mt-1 block w-full" wire:model.defer="blood_group_id">
                                <option value="">Select Blood Group</option>
                                @foreach ($bloodGroups as $bloodGroup)
                                    <option value="{{ $bloodGroup->id }}">{{ $bloodGroup->name }}</option>
                                @endforeach
                            </select>
                            <x-input-error for="blood_group_id" class="mt-2" />
                        </div>
                    </x-slot>

                </x-form-section>

            </x-slot>

            <x-slot name="footer">

                <x-button class="ms-3" wire:click="updateBloodGroup" wire:loading.attr="disabled">
                    {{ __('Update') }}
                </x-button>

                <x-secondary-button wire:click="closeEditBloodGroupModal" wire:loading.attr="disabled">
                    {{ __('Cancel') }}
                </x-secondary-button>
            </x-slot>
        </x-dialog-modal>
    @endcan

</div>
