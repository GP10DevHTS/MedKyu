<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <!-- Welcome banner -->
        <x-dashboard.welcome-banner />

        <!-- Cards -->
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-4">
                @livewire('dashboard.new-patients-card')
            </div>
            <div class="col-span-4">
                @livewire('dashboard.all-patients-card')
            </div>
            <div class="col-span-4">
                @livewire('dashboard.total-staff-members')
            </div>
            <div class="col-span-12">
                @livewire('dashboard.appointments-today')
            </div>
            <div class="col-span-6">
                @livewire('dashboard.personal-attendance-record')
            </div>
        </div>

    </div>
</x-app-layout>
