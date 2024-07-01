<div wire:poll class="max-w-7xl mx-auto p-6 bg-gray-100">
    <div class="mb-6">
        <label for="department" class="block text-gray-700 font-semibold mb-2">Filter by Department</label>
        <select wire:model.live="selectedDepartment" class="form-select block w-full mt-1 rounded-lg border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            <option value="">All Departments</option>
            @foreach ($departments as $department)
                <option value="{{ $department->id }}">{{ $department->department_name }}</option>
            @endforeach
        </select>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse ($appointments as $appointment)
            <div wire:key="appointment-{{ $appointment->id }}" class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                <h2 class="text-lg font-bold mb-2 text-indigo-600">{{ $appointment->patient->user->name }}</h2>
                <p class="text-gray-700"><strong>Department:</strong> {{ $appointment->department ? $appointment->department->department_name : 'N/A' }}</p>
                <p class="text-gray-700"><strong>Doctor:</strong> {{ $appointment->doctor ? $appointment->doctor->user->name : 'N/A' }}</p>
                <p class="text-gray-700"><strong>Appointment Date:</strong> {{ Carbon\Carbon::parse($appointment->start_time)->format('Y-m-d') }}</p>
                <p class="text-gray-700"><strong>Start Time:</strong> {{ Carbon\Carbon::parse($appointment->start_time)->format('h:i A') }}</p>
                <p class="text-gray-700"><strong>Reason:</strong> {{ $appointment->reason }}</p>
                <p class="text-gray-700"><strong>Status:</strong> 
                    <span class="inline-block px-2 py-1 rounded {{ $appointment->status == 0 ? 'bg-yellow-200 text-yellow-800' : ($appointment->status == 1 ? 'bg-green-200 text-green-800' : ($appointment->status == 2 ? 'bg-red-200 text-red-800' : 'bg-blue-200 text-blue-800')) }}">
                        {{ $appointment->status == 0 ? 'Pending' : ($appointment->status == 1 ? 'Confirmed' : ($appointment->status == 2 ? 'Cancelled' : 'Completed')) }}
                    </span>
                </p>

                @if ($appointment->cancel_reason)
                    <p class="text-red-600"><strong>Cancel Reason:</strong> {{ $appointment->cancel_reason }} </p>
                @endif
                @if (!$appointment->trashed())
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2 mt-4">
                        @can('cancel-appointments')
                            <div class="col-span-1">
                                @livewire('appointment.cancel-appointment', ['appointment' => $appointment], key('cancel-appointment-modal-' . $appointment->id))
                            </div>
                        @endcan

                        @if ($appointment->doctor_id)
                            @can('complete-appointment')
                                <div class="col-span-1">
                                    <button wire:click="completeAppointment({{ $appointment->id }})" class="w-full bg-green-500 text-white font-bold p-1 rounded-lg hover:bg-green-600 transition-colors duration-300">Complete</button>
                                </div>
                            @endcan
                        </div>
                        @endif

                        @can('assign-appointment-doctor')
                            <div class="col-span-1 py-2">
                                @if (App\Models\Doctor::where('user_id', auth()->user()->id)->exists())
                                    <button wire:click="assignSelf({{ $appointment->id }})" class="w-full bg-indigo-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-indigo-600 transition-colors duration-300">Take on</button>
                                @else
                                    @livewire('appointment.assign-doctor', ['appointment' => $appointment], key('assign-doctor-modal-' . $appointment->id))
                                @endif
                            </div>
                        @endcan
                    {{-- </div> --}}
                @endif
            </div>
        @empty
            <p class="text-gray-500 text-center">No appointments to show</p>
        @endforelse
    </div>
</div>
