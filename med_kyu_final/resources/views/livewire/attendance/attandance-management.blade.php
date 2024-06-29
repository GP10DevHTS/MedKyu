<div wire:poll class="p-4">
    <div>
        <h2 class="text-xl font-bold mb-4">Attendance Management</h2>

        <div class="mb-4">
            <label for="staff_member_id" class="block text-sm font-medium text-gray-700">Staff Member:</label>
            <select id="staff_member_id" wire:model="userId"
                class="form-select mt-1 block w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 @error('userId') border-red-500 @enderror">
                <option value="">Select Staff Member</option>
                @foreach($staffMembers as $staffMember)
                    <option value="{{ $staffMember->id }}">{{ $staffMember->name }}</option>
                @endforeach
            </select>
            @error('userId') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
        </div>

        <button wire:click="login"
            class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none mb-4">Log In</button>

        <h3 class="text-lg font-bold mb-4">Current Attendances</h3>
        <div class="overflow-x-auto">
            <table class="table-auto w-full border border-gray-200 rounded">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 text-left">User</th>
                        <th class="px-4 py-2 text-left">Log in</th>
                        <th class="px-4 py-2 text-left">Log out</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($attendances as $attendance)
                        <tr>
                            <td class="border px-4 py-2">{{ $attendance->user->name }}</td>
                            <td class="border px-4 py-2">{{ $attendance->login_time }}</td>
                            <td class="border px-4 py-2">
                                @if ($attendance->logout_time)
                                    {{ $attendance->logout_time }}
                                @else
                                    {{-- log out button --}}
                                    <button wire:click="logout({{ $attendance->id }})"
                                        class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 focus:outline-none">Log
                                        Out</button>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
