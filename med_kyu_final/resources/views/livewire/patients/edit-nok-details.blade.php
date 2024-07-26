<div wire:poll>
    <h2 class="text-xl font-semibold mb-4">Next of Kin</h2>
    <p>Name: {{ $patient->nok_name ?? '-' }}</p>
    <p>Email: {{ $patient->nok_email ?? '-' }}</p>
    <p>Phone: {{ $patient->nok_phone ?? '-' }}</p>
    <hr class="my-2">
    <x-button wire:click="openModal">
        Edit Next of Kin Details
    </x-button>

    <x-dialog-modal wire:model="isOpen">
        <x-slot name="title">
            Edit Next of Kin Details
        </x-slot>

        <x-slot name="content">

            <form wire:submit.prevent="updateNokDetails">
                <div class="mb-4">
                    <x-label for="nok_name">Name <span class="text-red">*</span></x-label>
                    <x-input id="nok_name" type="text" class="mt-1 block w-full" wire:model.defer="nok_name" />
                    @error('nok_name')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <x-label for="nok_email" value="Email" />
                    <x-input id="nok_email" type="email" class="mt-1 block w-full" wire:model.defer="nok_email" />
                    @error('nok_email')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <x-label for="nok_phone" value="Phone" />
                    <x-input id="nok_phone" type="text" class="mt-1 block w-full" wire:model.defer="nok_phone" />
                    @error('nok_phone')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
            </form>
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="closeModal">
                Cancel
            </x-secondary-button>

            <x-button wire:click="updateNokDetails">
                Save
            </x-button>
        </x-slot>
    </x-dialog-modal>
</div>
