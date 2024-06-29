<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-slate-800 overflow-hidden shadow-xl">
                <div class="grid grid-cols-12 gap-4">
                    

                    <div class="col-span-12">
                        <div class="py-4 px-4 flex justify-between  border-b border-slate-200 dark:border-slate-700">
                            <h1 class="text-2xl font-semibold text-slate-800 dark:text-slate-200">Roles</h1>
                            <div class="flex justify-end">
                                @if (auth()->user()->hasPermissionTo('create-roles'))
                                    @livewire('users.new-role-modal', key('users-new-role-modal-' . uniqid()))
                                @endif
                            </div>
                        </div>

                        {{-- <x-section-border-2 /> --}}

                        @livewire('users.roles-list', key('users-roles-list'))
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
