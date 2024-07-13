<div class="p-6 bg-gray-100 rounded-lg shadow-lg">
    {{-- {={-- Knowing others is intelligence; knowing yourself is true wisdom. --}=} --}}
    <div class="flex justify-between items-center mb-6">
        <div>
            <h2 class="text-xl font-bold text-gray-800">Rooms and Wards</h2>
        </div>
        <div class="flex space-x-2">
            @can('create-rooms')
                @livewire('facilities.new-room-modal')
            @endcan
            @can('create-wards')
                @livewire('facilities.new-ward-modal')
            @endcan
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        @can('view-wards')
            <div class="col-span-1 bg-white p-4 rounded-lg shadow">
                <h3 class="text-lg font-bold text-gray-700 mb-4">Wards</h3>
                @livewire('facilities.wards-list')
            </div>
        @endcan

        @can('view-rooms')
            <div class="col-span-1 bg-white p-4 rounded-lg shadow">
                <h3 class="text-lg font-bold text-gray-700 mb-4">Rooms</h3>
                @livewire('facilities.room-list')
            </div>
        @endcan
    </div>
</div>
