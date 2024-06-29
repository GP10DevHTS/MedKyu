<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}

    <div class="p-5">
        {{-- Nothing in the world is as soft and yielding as water. --}}
        <div class="grid grid-cols-4 gap-4">

            @livewire('users.static-profile-card', ['user' => $user->id], key('users-static-profile-card-' . uniqid()))

            <div
                class="col-span-3 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700 px-0">
                <div class="flex justify-between items-center border-b border-gray-200 dark:border-gray-700 ">
                    @if ($isDoctor)
                        @include('layouts.partials.doctor_profile_nav')
                    @elseif ($isPatient)
                        @include('layouts.partials.patient_profile_nav')
                    @else
                        @include('layouts.partials.admin_profile_nav')
                    @endif
                </div>
                <div>
                    @if (request()->routeIs('users.profile'))
                        {{-- Profile --}}
                        @if ($isPatient)
                        <div class="container mx-auto px-4 py-6">
                            {{-- <h1 class="text-2xl font-bold mb-4">Patient Profile</h1> --}}
                            
                            <div class="grid grid-cols-1 lg:grid-cols-1 gap-6">
                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 border-b border-gray-200 pb-4">
                                <!-- Blood Group Details Section -->
                                <div class="bg-white p-6 rounded-lg shadow">
                                    <h2 class="text-xl font-semibold mb-4">Blood Group Details</h2>
                                    @livewire('patients.blood-group-details', ['patient' => $user->patient->id], key('patient-blood-group'))
                                </div>
                        
                                <!-- Currently in Room/Ward Section -->
                                <div class="bg-white p-6 rounded-lg shadow">
                                    <h2 class="text-xl font-semibold mb-4">Currently in Room/Ward</h2>
                                    @livewire('patients.currently-in-room', ['patient' => $user->patient->id], key('patient-currently-in-room'))
                                </div>
                            </div>
                            </div>
                        
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-6">
                                <!-- Allergy Section -->
                                <div class="bg-white p-6 rounded-lg shadow">
                                    <div class="flex justify-between items-center mb-4">
                                        <h2 class="text-xl font-semibold">Allergies</h2>
                                        @can('create-new-patient-allergy')
                                        @livewire('patients.new-allergy-modal', ['patient' => $user->patient->id], key('patient-allergies'))
                                        @endcan
                                    </div>
                                    
                                    @livewire('patients.allergy-list', ['patient' => $user->patient->id], key('patient-allergy-list'))
                                </div>
                        
                                <!-- Disease Records Section -->
                                <div class="bg-white p-6 rounded-lg shadow">
                                    <div class="flex justify-between items-center mb-4">
                                        <h2 class="text-xl font-semibold">Disease Records</h2>
                                        @can('create-new-patient-disease-record')
                                        @livewire('patients.new-disease-record-modal', ['patient' => $user->patient->id])
                                        @endcan
                                    </div>
                                   
                                    @livewire('patients.list-disease-records', ['patient' => $user->patient->id])
                                </div>
                            </div>
                        
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-6">
                                <!-- Surgery History Section -->
                                <div class="bg-white p-6 rounded-lg shadow">
                                    <div class="flex justify-between items-center mb-4">
                                        <h2 class="text-xl font-semibold">Surgery History</h2>
                                        @can('create-new-patient-surgery-history')
                                        @livewire('patients.new-surgery-history-modal', ['patient' => $user->patient->id])
                                        @endcan
                                    </div>
                                    
                                    @livewire('patients.list-surgery-history', ['patient' => $user->patient->id])
                                </div>
                        
                                <!-- Transfusion History Section -->
                                <div class="bg-white p-6 rounded-lg shadow">
                                    <div class="flex justify-between items-center mb-4">
                                        <h2 class="text-xl font-semibold">Transfusion History</h2>
                                        @can('create-new-patient-transfusion-history')
                                        @livewire('patients.new-transfusion-history-modal', ['patient' => $user->patient->id])
                                        @endcan
                                    </div>
                                    
                                    @livewire('patients.list-transfusion-history', ['patient' => $user->patient->id])
                                </div>
                            </div>
                        </div>
                        @elseif($isDoctor)
                            @can('view-doctor-availability')
                                @livewire('doctors.view-doctor-availability', ['doctor' => $user->doctor->id], key('doctor-avaiability-slots'))
                            @endcan
                        @endif
                    @elseif (request()->routeIs('users.profile.settings'))
                        @livewire('users.profile-settings-page', ['user' => $user->id], key('users-profile-settings-page'))
                    @elseif (request()->routeIs('users.appointments'))
                        @if ($isPatient)
                            @livewire('patients.patient-appointment-tab', ['patient' => $user->patient->id])
                            {{-- @elseif ($isDoctor) --}}
                        @endif
                    @elseif (request()->routeIs('patient.clinical-records', ['user' => $user->id]) || request()->routeIs('patient.clinical-record.view', ['user' => $user->id]))
                        @livewire('patients.clinical-record-tab', ['user' => $user->id], key('users-profile-settings-page'))
                    @elseif (request()->routeIs('patient.movements'))
                        @livewire('patients.movements-tab',  ['patient' => $user->patient->id], key('users-profile-settings-page'))

                    @endif
                </div>
            </div>

        </div>
    </div>

</div>
