<nav class="bg-gray-200 h-full">
    <ul class="p-0 flex">
        <li class="mb-0">
            <a wire:navigate href="{{ route('users.profile', ['user' => $user->id]) }}"
                class="block @if (Route::is('users.profile')) bg-gray-300 @endif py-2 px-4 rounded hover:bg-gray-300">Patient
                Profile</a>
        </li>
        <li class="mb-0">
            <a wire:navigate href="{{ route('users.appointments', ['user' => $user->id]) }}"
                class="block @if (Route::is('users.appointments')) bg-gray-300 @endif py-2 px-4 rounded hover:bg-gray-300">Appointments</a>
        </li>
        <li class="mb-0">
            <a wire:navigate href="{{ route('patient.clinical-records', ['user' => $user->id]) }}"
                class="block @if (Route::is('patient.clinical-records')) bg-gray-300 @endif @if (Route::is('patient.clinical-record.view')) bg-gray-300 @endif py-2 px-4 rounded hover:bg-gray-300">Clinical Records</a>
        </li>
        <li class="mb-0">
            <a wire:navigate href="{{ route('patient.movements', ['user' => $user->id]) }}"
                class="block @if (Route::is('patient.movements')) bg-gray-300 @endif py-2 px-4 rounded hover:bg-gray-300">Movements</a>
        </li>
        <li class="mb-0">
            <a wire:navigate href="{{ route('users.profile.settings', ['user' => $user->id]) }}"
                class="block @if (Route::is('users.profile.settings')) bg-gray-300 @endif py-2 px-4 rounded hover:bg-gray-300">Settings</a>
        </li>

    </ul>
</nav>
