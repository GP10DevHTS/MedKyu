<div>
    
    {{-- Because she competes with no one, no one can compete with her. --}}
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('All Users') }}
        </h2>
    </x-slot> --}}
    <div class="py-8 w-full ">
        {{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> --}}
            {{-- <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100"> --}}
                    @livewire('all-users-table')
                {{-- </div>
            </div> --}}
        {{-- </div> --}}
    </div>
</div>
