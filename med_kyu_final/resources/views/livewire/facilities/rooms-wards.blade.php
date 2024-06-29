<div class="p-4">
    {{-- {={-- Knowing others is intelligence; knowing yourself is true wisdom. --}=} --}}
    <div class="grid grid-cols-2 gap-4">
        <div class="col-span-1">
            Rooms and Wards
        </div>
        <div class="col-span-1 flex justify-end space-x-2">
            @can('create-rooms')
                @livewire('facilities.new-room-modal')
            @endcan
            @can('create-wards')
                @livewire('facilities.new-ward-modal')
            @endcan
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

        @can('view-wards')
            <div class="col-span-1">
                <h3 class="text-lg font-bold">Wards</h3>
                @livewire('facilities.wards-list')
            </div>
        @endcan

        @can('view-rooms')
            <div class="col-span-1">
                <h3 class="text-lg font-bold">Rooms</h3>
                @livewire('facilities.room-list')
            </div>
        @endcan
    </div>

</div>


