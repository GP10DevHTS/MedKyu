<div wire:poll>
    <!-- user-table.blade.php -->

    <div class="overflow-x-auto p-4">


        <div class="py-4 px-4 flex justify-between  border-b border-slate-200 dark:border-slate-700">
            <h1 class="text-2xl font-semibold text-slate-800 dark:text-slate-200">Administrators</h1>
            <div class="flex justify-end">


                <div class="relative">
                    <input type="text" wire:model.live="search"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search name or email..." />
                </div>

                <div class="mr-4">
                    @if (count($selectedUsers) > 0)
                        {{-- bulk actions --}}
                        <select wire:model="action" wire:confirm="Are you sure?" wire:change="performAction"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option value="">Choose action</option>
                            <option value="deleteSelectedUsers">Delete</option>
                        </select>
                    @endif
                </div>

                <div class="mr-4">
                    {{-- per page selection --}}
                    <select wire:model.live="perPage"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                </div>

                <div class="mr-4">
                    {{-- new user --}}
                    @livewire('users.new-administrator', [], key('new-administrator-modal'))
                </div>

            </div>
        </div>




        <div>
            @if (count($selectedUsers))
                {{ count($selectedUsers) }} users selected |
                <span wire:click="deselectAll" type="button" class="cursor-pointer text-blue-500">Deselect all</span>
            @endif
        </div>
        <table class="min-w-full divide-y divide-gray-200">
            <thead>
                <tr>
                    <th
                        class="px-4 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        {{-- <input type="checkbox" class="form-checkbox" wire:model.live="selectAll"> --}}
                        #
                    </th>
                    <th
                        class="px-4 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Name
                    </th>
                    <th
                        class="px-4 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Login?
                    </th>
                    <th
                        class="px-4 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Email
                    </th>
                    {{-- <th
                        class="px-4 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Roles
                    </th> --}}
                    <th
                        class="px-4 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse ($users as $user)
                    <tr>
                        <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            <input type="checkbox" class="form-checkbox" wire:model.live="selectedUsers"
                                value="{{ $user->id }}">
                        </td>
                        <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10">
                                    <img class="h-10 w-10 rounded-full" src="{{ $user->profile_photo_url }}"
                                        alt="{{ $user->name }}">
                                </div>
                                <div class="ml-2">
                                    <div class="text-sm font-medium text-gray-900">{{ $user->name }}</div>
                                    <div class="text-sm text-gray-500">{{ $user->email }}</div>
                                </div>
                            </div>
                        </td>

                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">
                            @if ($user->deleted_at == null)
                                <span
                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    Yes
                                </span>
                            @else
                                <span
                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                    No
                                </span>
                            @endif

                        </td>
                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">
                            @if ($user->email_verified_at)
                                <span
                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                    Verified
                                </span>
                            @endif
                        </td>



                        <td class="px-4 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <div class="grid grid-cols-2 gap-2">

                                @can('view-users')
                                    <x-button wire:loading.attr="disabled"
                                        wire:target="openUserProfile({{ $user->id }})"
                                        wire:click="openUserProfile({{ $user->id }})"
                                        class="bg-indigo-500 hover:bg-indigo-600 text-white flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-person-vcard" viewBox="0 0 16 16">
                                            <path
                                                d="M5 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4m4-2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5M9 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 9 8m1 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5" />
                                            <path
                                                d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H8.96q.04-.245.04-.5C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 1 1 12z" />
                                        </svg> <span class="ml-2">Profile</span>
                                    </x-button>
                                @endcan
                            </div>

                        </td>

                    </tr>
                @empty
                    <tr>
                        <td class="p-2 whitespace-nowrap" colspan="5">
                            <div class="text-center">No users found.</div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div>
            {{ $users->links() }}
        </div>
    </div>
</div>
