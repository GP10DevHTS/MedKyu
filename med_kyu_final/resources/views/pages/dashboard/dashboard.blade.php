<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <!-- Welcome banner -->
        <x-dashboard.welcome-banner />

        <!-- Cards -->
        {{-- <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-2 xl:grid-cols-4"> --}}
            <div class="grid grid-cols-2 mb-4 ">
                <div class="bg-white p-4 hover:shadow-xl transition duration-300">
                    @livewire('dashboard.new-patients-card')
                </div>
                {{-- <div class="col-span-1 sm:col-span-2 lg:col-span-1 xl:col-span-1"> --}}
                    <div class="bg-white  p-4 hover:shadow-xl transition duration-300">
                        @livewire('dashboard.all-patients-card')
                    {{-- </div> --}}
                </div>
                
            </div>
            
            <div class="grid grid-cols-2 mb-4">
                <div class="bg-white  p-4 hover:shadow-xl transition duration-300">
                    @livewire('dashboard.total-staff-members')
                </div>
                {{-- <div class="col-span-1 sm:col-span-2 lg:col-span-1 xl:col-span-1"> --}}
                    <div class="bg-white  p-4 hover:shadow-xl transition duration-300">
                        @livewire('dashboard.personal-attendance-record')
                    </div>
                {{-- </div> --}}
            </div>
            {{-- <div class="col-span-1 sm:col-span-2 lg:col-span-1 xl:col-span-1">
                <div class="bg-white shadow-lg rounded-lg p-4 hover:shadow-xl transition duration-300">
                    @livewire('dashboard.appointments-today')
                </div>
            </div> --}}
            {{-- <div class="col-span-1 sm:col-span-2 lg:col-span-1 xl:col-span-1">
                <div class="bg-white shadow-lg rounded-lg p-4 hover:shadow-xl transition duration-300">
                    @livewire('dashboard.personal-attendance-record')
                </div>
            </div> --}}
            <div class="py-4">
                <div class="bg-white shadow-lg rounded-lg p-4 hover:shadow-xl transition duration-300">
                    @livewire('dashboard.appointments-today')
                </div>
            </div>

            
        </div>
        
        {{-- </div> --}}
        

    </div>
</x-app-layout>
