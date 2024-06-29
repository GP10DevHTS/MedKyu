<div class="p-6 bg-white rounded-lg shadow-md ">
    <h2 class="text-xl font-semibold mb-4">Treatments</h2>

    @if ($clinicalRecord->trashed())
        <form wire:submit.prevent="saveTreatment" class="mb-4">
            <div class="grid grid-cols-12 gap-4">
                <!-- Treatment Name -->
                <div class="col-span-6">
                    <label for="name" class="block text-sm font-medium text-gray-700">Treatment Name:</label>
                    <input type="text" id="name" wire:model="name"
                        class="form-input mt-1 block w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 @error('name') border-red-500 @enderror">
                    @error('name')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Description -->
                <div class="col-span-6">
                    <label for="description" class="block text-sm font-medium text-gray-700">Description /
                        Notes:</label>
                    <textarea id="description" wire:model="description"
                        class="form-textarea mt-1 block w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 @error('description') border-red-500 @enderror"></textarea>
                    @error('description')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Treatment Type -->
                <div class="col-span-6">
                    <label for="type" class="block text-sm font-medium text-gray-700">Type:</label>
                    {{-- <input type="text" id="type" wire:model="type"
                    class="form-input mt-1 block w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 @error('type') border-red-500 @enderror"> --}}
                    <select id="type" wire:model="type" class="form-select block w-full mt-1">
                        <option value="">Select Treatment Type</option>
                        <option value="Medication">Medication</option>
                        <option value="Procedure">Procedure</option>
                        <option value="Therapy">Therapy</option>
                    </select>
                    @error('type')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Dosage -->
                <div class="col-span-6">
                    <label for="dosage" class="block text-sm font-medium text-gray-700">Dosage:</label>
                    <input type="text" id="dosage" wire:model="dosage"
                        class="form-input mt-1 block w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 @error('dosage') border-red-500 @enderror">
                    @error('dosage')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Frequency -->
                <div class="col-span-6">
                    <label for="frequency" class="block text-sm font-medium text-gray-700">Frequency:</label>
                    {{-- <input type="text" id="frequency" wire:model="frequency"
                    class="form-input mt-1 block w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 @error('frequency') border-red-500 @enderror"> --}}
                    <select id="frequency" wire:model="frequency" class="form-select block w-full mt-1">
                        <option value="">Select frequency</option>
                        <option value="once">Once</option>
                        <option value="once daily">Once daily</option>
                        <option value="twice daily">Twice daily</option>
                        <option value="three times daily">Three times daily</option>
                        <option value="four times daily">Four times daily</option>
                        <option value="every 4 hours">Every 4 hours</option>
                        <option value="every 6 hours">Every 6 hours</option>
                        <option value="every 8 hours">Every 8 hours</option>
                        <option value="every 12 hours">Every 12 hours</option>
                        <option value="every 24 hours">Every 24 hours</option>
                        <option value="every other day">Every other day</option>
                        <option value="every week">Every week</option>
                        <option value="every month">Every month</option>
                        <option value="every two weeks">Every two weeks</option>
                        <option value="every three weeks">Every three weeks</option>
                        <option value="every four weeks">Every four weeks</option>
                        <option value="as needed">As needed</option>
                        <option value="before meals">Before meals</option>
                        <option value="after meals">After meals</option>
                        <option value="at bedtime">At bedtime</option>
                    </select>
                    @error('frequency')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Start Date -->
                <div class="col-span-6">
                    <label for="start_date" class="block text-sm font-medium text-gray-700">Start Date:</label>
                    <input type="datetime-local" id="start_date" wire:model="start_date"
                        class="form-input mt-1 block w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 @error('start_date') border-red-500 @enderror">
                    @error('start_date')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Duration -->
                <div class="col-span-6">
                    <label for="duration" class="block text-sm font-medium text-gray-700">Duration:</label>
                    <input type="text" id="duration" wire:model="duration"
                        class="form-input mt-1 block w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 @error('duration') border-red-500 @enderror">
                    @error('duration')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Prescribed By -->
                <div class="col-span-6">
                    <label for="prescribed_by" class="block text-sm font-medium text-gray-700">Prescribed By:</label>
                    <select id="prescribed_by" wire:model="prescribed_by"
                        class="form-select mt-1 block w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 @error('prescribed_by') border-red-500 @enderror">
                        <option value="">Select Doctor</option>
                        @foreach ($doctors as $doctor)
                            <option value="{{ $doctor->id }}">{{ $doctor->user->name }}</option>
                        @endforeach
                    </select>
                    @error('prescribed_by')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="text-center mt-6">
                <button type="submit"
                    class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none">Save
                    Treatment</button>
            </div>
        </form>
    @endif

    @if (session()->has('message'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded relative" role="alert">
            <span class="block sm:inline">{{ session('message') }}</span>
            <button type="button" class="absolute top-0 bottom-0 right-0 px-4 py-2" data-dismiss="alert"
                aria-label="Close">
                <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20">
                    <title>Close</title>
                    <path fill-rule="evenodd"
                        d="M14.354 5.646a.5.5 0 0 1 .708.708L10.707 10l4.355 4.354a.5.5 0 1 1-.708.708L10 10.707l-4.354 4.355a.5.5 0 0 1-.708-.708L9.293 10 4.646 5.646a.5.5 0 0 1 .708-.708L10 9.293l4.354-4.354z"
                        clip-rule="evenodd" />
                </svg>
            </button>
        </div>
    @endif
    <div class="p-6 bg-white rounded-lg shadow-md">
        <div class="overflow-x-auto">
            <div class="px-4 py-2 grid grid-cols-2 text-center">
                @forelse ($treatments as $treatment)
                    <div class="px-4 py-2 border-b border-gray-200">
                        {{ $treatment->name }}
                        <br>
                        {{ $treatment->type }}
                        <br>
                        {{ $treatment->dosage }}
                        <br>{{ $treatment->duration }}
                        <br>{{ $treatment->start_date }}
                        <br>{{ $treatment->frequency }}
                        <br>{{ $treatment->prescribedBy ? $treatment->prescribedBy->user->name : '' }}
                        <p>
                            {{ $treatment->description }}
                        </p>
                        <div class="flex justify-center">
                            @if ($treatment->trashed())
                                <span>Terminated: </span>{{ $treatment->deleted_at }}
                            @else
                                <x-danger-button
                                    wire:click="terminateTreatment({{ $treatment->id }})">Terminate</x-danger-button>
                            @endif
                        </div>
                    </div>
                @empty
                    <div>No Treatments</div>
                @endforelse
            </div>
        </div>
    </div>
</div>
