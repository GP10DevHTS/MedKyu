<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <x-button wire:click="openViewMore()" class="py-2 px-4 text-sm text-white hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white ml-2">More</x-button>

    <x-dialog-modal wire:model="viewMoreModal">
        <x-slot name="title">
            Medical History
        </x-slot>

        <x-slot name="content">
            <div>
                other med
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-button wire:click="closeMoreModal()" title="Cancel">
                Close
            </x-button>
        </x-slot>
    </x-dialog-modal>
</div>
