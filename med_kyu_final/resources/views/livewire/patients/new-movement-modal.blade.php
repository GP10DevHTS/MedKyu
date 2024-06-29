<div class="p-4">
    {{-- The Master doesn't talk, he acts. --}}
    <x-form-section submit="">
        <x-slot name="title">
            {{ __('New Patient Movement') }}
        </x-slot>
        <x-slot name="description">
            {{ __('Initiate a new Patient Movement across rooms and wards') }}
        </x-slot>
        <x-slot name="form">
            <div class="col-span-12 grid grid-cols-12 gap-4">
                <div class="col-span-6">
                    <x-label for="room_id" value="{{ __('Room') }}" />
                    <select id="room_id" class="block mt-1 w-full" wire:model.defer="room_id">
                        <option value="">{{ __('Select Room') }}</option>
                        @foreach ($rooms as $room)
                            <option value="{{ $room->id }}">{{ $room->name }} - {{ $room->ward ? $room->ward->name : '' }}</option>
                        @endforeach
                    </select>
                    <x-input-error for="room_id" class="mt-2" />
                </div>
                <div class="col-span-6">
                    <x-label for="moved_in_at" value="{{ __('Moved In At') }}" />
                    <x-input id="moved_in_at" type="datetime-local" class="mt-1 block w-full" wire:model.defer="moved_in_at" />
                    <x-input-error for="moved_in_at" class="mt-2" />
                </div>
                
            </div>
        </x-slot>
        <x-slot name="actions">
            <div class="col-span-4 grid grid-cols-2 gap-2">
                <x-button class="mr-2" wire:click="initiatePatientMovement">
                    {{ __('Move') }}
                </x-button>
                <x-secondary-button wire:click="cancelMovement">
                    {{ __('Cancel') }}
                </x-secondary-button>
            </div>
        </x-slot>
    </x-form-section>
</div>
