<nav class="bg-gray-200 h-full">
    <ul class="p-0 flex">
        <li class="mb-0">
            <a wire:navigate href="{{ route('users.profile', ['user' => $user->id]) }}"
                class="block @if (Route::is('users.profile')) bg-gray-300 @endif py-2 px-4 rounded hover:bg-gray-300">Doctor Profile</a>
        </li>
        <li class="mb-0">
            <a wire:navigate href="{{ route('users.profile.settings', ['user' => $user->id]) }}"
                class="block @if (Route::is('users.profile.settings')) bg-gray-300 @endif py-2 px-4 rounded hover:bg-gray-300">Settings</a>
        </li>

    </ul>
</nav>