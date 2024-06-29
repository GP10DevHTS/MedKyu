<div class="w-full">
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <x-danger-button class="w-full" wire:click="openCancelAppointmentModal">
        {{ __('Cancel Appointment') }}
    </x-danger-button>

    <x-dialog-modal wire:model="cancelAppointmentModal_isOpen">
        <x-slot name="title">
            {{ __('Cancel Appointment') }}
        </x-slot>

        <x-slot name="content">
            <div class="mt-4">
                <x-validation-errors class="mb-4" />

                <x-label for="cancellationReason" value="{{ __('Cancellation Reason') }}" />
                <x-input id="cancellationReason" type="text" class="mt-1 block w-full" wire:model.defer="cancellationReason" />
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="$toggle('cancelAppointmentModal_isOpen')" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-danger-button wire:click="cancelAppointment" wire:loading.attr="disabled">
                {{ __('Confirm Cancellation') }}
            </x-danger-button>
        </x-slot>
    </x-dialog-modal>

</div>
