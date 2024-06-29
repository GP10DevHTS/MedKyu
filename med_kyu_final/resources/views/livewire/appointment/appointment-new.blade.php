<div class="max-w-lg mx-auto p-4 bg-white shadow-md rounded-lg">
    <x-validation-errors />

    <form wire:submit.prevent="">
        <div class="mb-4">
            <label for="new_patient" class="block text-gray-700 font-medium mb-2">New Patient?</label>
            <input type="checkbox" wire:model.live="new_patient" id="new_patient"
                class="form-checkbox h-5 w-5 text-blue-600">
        </div>
        @if ($canMakeForOthers)

            @if (!$new_patient)
                <div class="mb-4">
                    <label for="patient_id" class="block text-gray-700 font-medium mb-2">Patient</label>
                    <select wire:model="patient_id" class="form-select block w-full mt-1" id="patient_id">
                        <option value="">Select Patient</option>
                        @foreach ($patients as $patient)
                            <option value="{{ $patient->id }}">{{ $patient->user->name }}</option>
                        @endforeach
                    </select>
                    @error('patient_id')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
            @else
                <div class="mb-4">
                    <label for="patient_name" class="block text-gray-700 font-medium mb-2">Name</label>
                    <input type="text" wire:model="patient_name" class="form-input block w-full mt-1"
                        id="patient_name">
                    @error('patient_name')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="patient_email" class="block text-gray-700 font-medium mb-2">Email</label>
                    <input type="email" wire:model="patient_email" class="form-input block w-full mt-1"
                        id="patient_email">
                    @error('patient_email')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="phone" class="block text-gray-700 font-medium mb-2">Phone</label>
                    <input type="text" wire:model="phone" class="form-input block w-full mt-1" id="phone">
                    @error('phone')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="date_of_birth" class="block text-gray-700 font-medium mb-2">Date of Birth</label>
                    <input type="date" wire:model="date_of_birth" class="form-input block w-full mt-1"
                        id="date_of_birth">
                    @error('date_of_birth')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
            @endif
        @endif
        <div class="mb-4">
            <label for="department_id" class="block text-gray-700 font-medium mb-2">Department</label>
            <select wire:model="department_id" class="form-select block w-full mt-1" id="department_id">
                <option value="">Select Department</option>
                @foreach ($departments as $department)
                    <option value="{{ $department->id }}">{{ $department->department_name }}</option>
                @endforeach
            </select>
            @error('department_id')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="appointment_date" class="block text-gray-700 font-medium mb-2">Appointment Date</label>
            <input type="date" wire:model="appointment_date" class="form-input block w-full mt-1"
                id="appointment_date">
            @error('appointment_date')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="start_time" class="block text-gray-700 font-medium mb-2">Start Time</label>
            <input type="time" wire:model="start_time" class="form-input block w-full mt-1" id="start_time">
            @error('start_time')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="reason" class="block text-gray-700 font-medium mb-2">Reason</label>
            <textarea wire:model="reason" class="form-textarea block w-full mt-1" id="reason"></textarea>
            @error('reason')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>

        <button wire:click="createAppointment"
            class="bg-blue-600 text-white font-bold py-2 px-4 rounded hover:bg-blue-700">Create Appointment</button>
    </form>
</div>
