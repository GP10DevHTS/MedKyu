<div wire:poll class="max-w-7xl mx-auto p-4 bg-gray-100">
    <div class="mb-4">
        <label for="department" class="block text-gray-700 font-medium mb-2">Filter by Department</label>
        <select wire:model.live="selectedDepartment" class="form-select block w-full mt-1">
            <option value="">All Departments</option>
            @foreach ($departments as $department)
                <option value="{{ $department->id }}">{{ $department->department_name }}</option>
            @endforeach
        </select>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @forelse ($appointments as $appointment)
            <div wire:key="appointment-{{ $appointment->id }}" class="bg-white p-4 rounded-lg shadow-md">
                <h2 class="text-lg font-bold mb-2">{{ $appointment->patient->user->name }}</h2>
                <p class="text-gray-700"><strong>Department:</strong>
                    {{ $appointment->department ? $appointment->department->department_name : 'N/A' }}</p>
                <p class="text-gray-700"><strong>Doctor:</strong>
                    {{ $appointment->doctor ? $appointment->doctor->user->name : 'N/A' }}</p>
                <p class="text-gray-700"><strong>Appointment Date:</strong>
                    {{ Carbon\Carbon::parse($appointment->start_time)->format('Y-m-d') }}</p>
                <p class="text-gray-700"><strong>Start Time:</strong>
                    {{ Carbon\Carbon::parse($appointment->start_time)->format('h:i A') }}</p>
                <p class="text-gray-700"><strong>Reason:</strong> {{ $appointment->reason }}</p>
                <p>Status:
                    {{ $appointment->status == 0 ? 'Pending' : ($appointment->status == 1 ? 'confirmed' : ($appointment->status == 2 ? 'Cancelled' : 'completed')) }}
                </p>
                @if ($appointment->cancel_reason)
                    <p>Cancel Reason: {{ $appointment->cancel_reason }} </p>
                @endif
                @if (!$appointment->trashed())
                    {{-- @else --}}
                    <div class="grid grid-cols-3 gap-2 mt-4">
                        @can('cancel-appointments')
                            <div class="col-span-1">
                                @livewire('appointment.cancel-appointment', ['appointment' => $appointment], key('cancel-appointment-modal-' . $appointment->id))
                            </div>
                        @endcan

                        @if ($appointment->doctor_id)
                            @can('complete-appointment')
                                <div class="col-span-1">
                                    <x-button wire:click="completeAppointment({{ $appointment->id }})">Complete</x-button>
                                </div>
                            @endcan
                        @endif

                        @can('assign-appointment-doctor')
                            <div class="col-span-1">
                                @if (App\Models\Doctor::where('user_id', auth()->user()->id)->exists())
                                    <x-button wire:click="assignSelf({{ $appointment->id }})">Take on</x-button>
                                @else
                                    @livewire('appointment.assign-doctor', ['appointment' => $appointment], key('assign-doctor-modal-' . $appointment->id))
                                @endif
                            </div>
                        @endcan
                    </div>
                @endif

            </div>
        @empty
            <p>No appointments to show</p>

        @endforelse
    </div>
</div>
