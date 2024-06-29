<div wire:poll>
    {{-- Stop trying to control. --}}

    @forelse ($roles->chunk(2) as $role2)

        <div class="grid grid-cols-2">
            @foreach ($role2 as $role)
                <div
                    class="col-span-1 m-4 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
                    <div class="grid grid-cols-3 p-2 border-b border-slate-100 dark:border-slate-700 gap-4">
                        <div class="col-span-1">
                            <h2 class="font-semibold text-slate-800 capitalize dark:text-slate-100">{{ $role->name }}
                            </h2>
                        </div>
                        <div class="col-span-1 flex">

                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                    d="M4.5 17H4a1 1 0 0 1-1-1 3 3 0 0 1 3-3h1m0-3.05A2.5 2.5 0 1 1 9 5.5M19.5 17h.5a1 1 0 0 0 1-1 3 3 0 0 0-3-3h-1m0-3.05a2.5 2.5 0 1 0-2-4.45m.5 13.5h-7a1 1 0 0 1-1-1 3 3 0 0 1 3-3h3a3 3 0 0 1 3 3 1 1 0 0 1-1 1Zm-1-9.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z" />
                            </svg> <span class="ml-1 text-gray-800 dark:text-white">{{ $role->users()->count() }}</span>
                        </div>
                        <div class="col-span-1 flex justify-end gap-2">
                            @livewire('users.edit-role-modal', ['role' => $role], key('users-edit-role-modal-' . $role->id))
                            <x-button wire:confirm="Are you sure you want to delete this role?"
                                wire:click="deleteRole({{ $role->id }})" class="bg-red-600">
                                <svg class="w-6 h-6 text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                                </svg><span class="ml-1 text-white">Delete</span>
                            </x-button>
                        </div>
                    </div>
                    <div class="flex flex-wrap p-2 gap-2 justify-center">
                        @foreach ($permissions as $permission)
                            <div>
                                <input wire:click="togglePermission({{ $role->id }}, {{ $permission->id }})"
                                    id="{{ $role->name . '-' . $permission->name }}" type="checkbox"
                                    value="{{ $permission->id }}"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    @if ($role->permissions->contains($permission)) checked @endif>
                                <label for="{{ $role->name . '-' . $permission->name }}"
                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $permission->name }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    @empty

        <p>No roles found</p>
    @endforelse
</div>
