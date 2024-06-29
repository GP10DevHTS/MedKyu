<div>
    {{-- New Room Modal --}}
    <x-button wire:click="openNewRoomModal">New Room</x-button>

    <x-dialog-modal wire:model="newRoomModalIsOpen">
        <x-slot name="title">
            {{ __('Create New Room') }}
        </x-slot>

        <x-slot name="content">
            <form wire:submit.prevent="createRoom">
                <div class="col-span-6 sm:col-span-4">
                    <x-label for="name" value="{{ __('Name') }}" />
                    <x-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="name" />
                    <x-input-error for="name" class="mt-2" />
                </div>

                <div class="col-span-6 sm:col-span-4 mt-4">
                    <x-label for="ward_id" value="{{ __('Ward') }}" />
                    <select id="ward_id" class="mt-1 block w-full" wire:model.defer="ward_id">
                        <option value="">{{ __('Select Ward') }}</option>
                        @foreach($wards as $ward)
                            <option value="{{ $ward->id }}">{{ $ward->name }}</option>
                        @endforeach
                    </select>
                    <x-input-error for="ward_id" class="mt-2" />
                </div>

                <div class="col-span-6 sm:col-span-4 mt-4">
                    <x-label for="capacity" value="{{ __('Capacity') }}" />
                    <x-input id="capacity" type="number" class="mt-1 block w-full" min="1" wire:model.defer="capacity" />
                    <x-input-error for="capacity" class="mt-2" />
                </div>
            </form>
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="closeNewRoomModal">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-button class="ml-2" wire:click="createRoom">
                {{ __('Create') }}
            </x-button>
        </x-slot>
    </x-dialog-modal>
</div>
