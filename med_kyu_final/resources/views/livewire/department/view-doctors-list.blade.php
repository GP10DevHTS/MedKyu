<div>
    <x-button wire:click="openViewDoctorModal">
        {{ __('View Doctors') }}
    </x-button>

    <x-dialog-modal wire:model="viewDoctorModal_isOpen">
        <x-slot name="title">View Doctors</x-slot>

        <x-slot name="content">
            @forelse ($doctors as $doctor)
                <p>{{ $doctor->user->name }}</p>
            @empty
                <p>No doctors found</p>
            @endforelse
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="closeViewDoctorModal">
                {{ __('Close') }}
            </x-secondary-button>
        </x-slot>
    </x-dialog-modal>

</div>
