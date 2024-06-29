<div wire:poll
    class="col-span-1 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
    <div>
        {{-- <img class="h-64 mb-4 w-64 rounded shadow-lg" src="{{ $user->profile_photo_url }}" alt="{{ $user->name }}"> --}}

        <div>

            <div class="max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-lg hover:shadow-blue-400">
                <div class="relative">
                    <img class="w-full h-48 object-cover" src="{{ $user->profile_photo_url }}" alt="Profile Image">
                </div>
                <div class="px-6 py-4">
                    <div class="text-xl font-semibold text-gray-800">{{ $user->name }}</div>
                    <p class="text-gray-600">{{ $user->email }}</p>
                    <p class="text-gray-600 text-center rounded-lg bg-slate-200 dark:bg-slate-700 dark:text-slate-300">
                        @if ($isDoctor)
                            Doctor
                        @elseif ($isPatient)
                            Patient
                        @else
                            Admin
                        @endif
                    </p>
                </div>
                <div class="px-6 ">
                    <p class=" px-2 py-1 font-medium text-teal-900 ">Gender:{{ $user->gender }}</p>
                    <p class=" px-2  font-medium text-indigo-900  ">DoB:{{ $user->dob ?? 'Na' }}</p>
                    <p class=" px-2  font-medium text-purple-900  ">Phone:{{ $user->phone ?? 'Na' }}</p>
                    {{-- <p class=" px-2  font-medium text-purple-900  ">{{ $user->phone_number_two ?? '' }}</p> --}}
                </div>
                <div class="px-6 py-4">
                    @if ($user->doctor && auth()->user()->can('edit-doctors'))
                        @livewire('users.edit-profile-model', ['user' => $user->id], key('edit-profile-modal'))
                    @elseif ($user->patient && auth()->user()->can('edit-patients'))
                        @livewire('users.edit-profile-model', ['user' => $user->id], key('edit-profile-modal'))
                    @elseif (auth()->user()->can('edit-users'))
                        @livewire('users.edit-profile-model', ['user' => $user->id], key('edit-profile-modal'))
                    @endif
                </div>
            </div>

        </div>
    </div>
</div>
