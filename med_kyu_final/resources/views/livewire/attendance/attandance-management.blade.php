<div wire:poll class="p-4">
    <div class=" mx-auto">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">Attendance Management</h2>

        <div class="mb-6">
            <label for="staff_member_id" class="block text-sm font-medium text-gray-700">Select Staff Member:</label>
            <select id="staff_member_id" wire:model="userId"
                class="form-select mt-1 block w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 @error('userId') border-red-500 @enderror">
                <option value="">Select Staff Member</option>
                @foreach($staffMembers as $staffMember)
                    <option value="{{ $staffMember->id }}">{{ $staffMember->name }}</option>
                @endforeach
            </select>
            @error('userId') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="flex justify-end mb-6">
            <button wire:click="login"
                class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-300">Arival</button>
        </div>

        <h3 class="text-lg font-bold mb-4 text-gray-700">Current Attendances</h3>
        <div class="overflow-x-auto bg-white shadow rounded-lg">
            <table class="table-auto w-full border-collapse">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 text-left text-gray-700">User</th>
                        <th class="px-4 py-2 text-left text-gray-700">Check in</th>
                        <th class="px-4 py-2 text-left text-gray-700">Check out</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($attendances as $attendance)
                        <tr class="hover:bg-gray-50">
                            <td class="border px-4 py-2 text-gray-600">{{ $attendance->user->name }}</td>
                            <td class="border px-4 py-2 text-gray-600">{{ $attendance->login_time }}</td>
                            <td class="border px-4 py-2 text-gray-600">
                                @if ($attendance->logout_time)
                                    {{ $attendance->logout_time }}
                                @else
                                    <button wire:click="logout({{ $attendance->id }})"
                                        class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 focus:outline-none focus:ring focus:ring-red-300">Departure</button>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
