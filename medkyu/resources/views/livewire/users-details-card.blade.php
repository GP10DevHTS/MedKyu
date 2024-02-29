<div class="bg-gray-100 w-full">
    <nav class="flex mb-4 bg-blue-100 p-3" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
          <li class="inline-flex items-center">
            <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
              <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
              </svg>
              Home
            </a>
          </li>
          <li>
            <div class="flex items-center">
              <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
              </svg>
              <a href="{{route('users')}}" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Students</a>
            </div>
          </li>
          <li aria-current="page">
            <div class="flex items-center">
              <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
              </svg>
              <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">{{$user->name}}</span>
            </div>
          </li>
        </ol>
        
      </nav>



    {{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> --}}
    <div class="max-w-7xl mx-auto overflow-hidden shadow-sm sm:rounded-lg w-full ">
            {{-- <div class="p-6 text-gray-900 dark:text-gray-100"> --}}

    <div class=" grid grid-cols-12 gap-4  p-4 w-full">
        {{-- <div class="header col-span-12 rounded-lg border border-gray-300 bg-gray-600 py-8">
          <!-- Header content -->

        </div> --}}
        <div class="col-span-12 rounded-lg border border-gray-200  p-3 sm:col-span-8  w-full">
          <!-- Main Content -->




    <div class="w-full bg-white rounded-lg shadow dark:bg-gray-800 ">
     <div class="sm:hidden">
        <label for="tabs" class="sr-only">Select tab</label>
        <select id="tabs" class="text-gray-900 text-sm rounded-t-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option>Statistics</option>
            <option>Services</option>
            <option>FAQ</option>
        </select>
    </div> 
    <ul class="hidden text-sm font-medium text-center text-gray-500 divide-x divide-gray-200 rounded-lg sm:flex dark:divide-gray-600 dark:text-gray-400 rtl:divide-x-reverse" id="fullWidthTab" data-tabs-toggle="#fullWidthTabContent" role="tablist">
        <li class="w-full">
            <button id="stats-tab" data-tabs-target="#stats" type="button" role="tab" aria-controls="stats" aria-selected="true" class="inline-block w-full p-4 rounded-ss-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Insurance Information</button>
        </li>
        <li class="w-full">
            <button id="about-tab" data-tabs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="false" class="inline-block w-full p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Medical History</button>
        </li>
        <li class="w-full">
            <button id="faq-tab" data-tabs-target="#faq" type="button" role="tab" aria-controls="faq" aria-selected="false" class="inline-block w-full p-4 rounded-se-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Lab Tests</button>
        </li>
        <li class="w-full">
            <button id="faq-tab" data-tabs-target="#faq2" type="button" role="tab" aria-controls="faq2" aria-selected="false" class="inline-block w-full p-4 rounded-se-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Emergency Contacts</button>
        </li>
    </ul>
    <div id="fullWidthTabContent" class="border-t border-gray-200 dark:border-gray-600">
        <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="stats" role="tabpanel" aria-labelledby="stats-tab">
                    @foreach ($user->insurance_information as $insurance_information)
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <div class="p-8">
                            <h2 class="text-2xl font-bold mb-4">Insurance Information</h2>
                            
                            <div class="grid grid-cols-2 gap-4">
                               
                                <div class="flex flex-col">
                                    <label class="text-gray-600 font-semibold mb-1">Insurance Name:</label>
                                    <p class="text-gray-800">{{ $insurance_information->insurance_name }}</p>
                                </div>
                                <div class="flex flex-col">
                                    <label class="text-gray-600 font-semibold mb-1">Insurance Number:</label>
                                    <p class="text-gray-800">{{ $insurance_information->insurance_number }}</p>
                                </div>
                                <div class="flex flex-col">
                                    <label class="text-gray-600 font-semibold mb-1">Insurance Provider:</label>
                                    <p class="text-gray-800">{{ $insurance_information->insurance_provider }}</p>
                                </div>
                                <div class="flex flex-col">
                                    <label class="text-gray-600 font-semibold mb-1">Policy Number:</label>
                                    <p class="text-gray-800">{{ $insurance_information->policy_number }}</p>
                                </div>
                                <div class="flex flex-col col-span-2">
                                    <label class="text-gray-600 font-semibold mb-1">Coverage Details:</label>
                                    <p class="text-gray-800">{{ $insurance_information->coverage_details }}</p>
                                </div>
                                <div class="flex flex-col">
                                    <label class="text-gray-600 font-semibold mb-1">Created At:</label>
                                    <p class="text-gray-800">{{ $insurance_information->created_at }}</p>
                                </div>
                                <div class="flex flex-col">
                                    <label class="text-gray-600 font-semibold mb-1">Updated At:</label>
                                    <p class="text-gray-800">{{ $insurance_information->updated_at }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    @endforeach
            {{-- </dl> --}}
        </div>

        <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="about" role="tabpanel" aria-labelledby="about-tab">
            {{-- <h2 class="mb-5 text-2xl font-extrabold tracking-tight text-gray-900 dark:text-white">We invest in the world’s potential</h2> --}}
            <!-- List -->
            <div>

                        @foreach ($user->medical_history as $medical_history)
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 border border-gray-300 dark:border-gray-700 p-2 mb-2 " >
                            <p class="mb-1 space-x-2"><span class="font-bold">Blood Type:</span> {{ $medical_history->blood_type }}</p>
                            <p class="mb-1 space-x-2"><span class="font-bold">Height:</span> {{ $medical_history->height }}  </p>
                            <p class="mb-1 space-x-2"><span class="font-bold">Weight:</span> {{ $medical_history->weight }}</p>
                        </div>
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-slate-300 dark:bg-gray-700 dark:text-gray-400">
                                <tr class="border-b dark:border-gray-700 w-full" >
                                   <th scope="col" class="px-4 py-3">Medical History</th>
                                    <th scope="col" class="px-4 py-3">Allegies</th>
                                    <th scope="col" class="px-4 py-3">Current Medication</th>
                                    <th scope="col" class="px-4 py-3">Special Needs</th>
                                    <th scope="col" class="px-4 py-3">Chronical Illnesses</th>
                                    {{-- <th scope="col" class="px-4 py-3">Time</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 dark:text-white">{{ $medical_history->medical_history }}</th>
                                    <td class="px-4 py-3">{{ $medical_history->allergies }}</td>
                                    <td class="px-4 py-3">{{ $medical_history->current_medications }}</td>
                                    <td class="px-4 py-3">{{ $medical_history->special_needs }}</td>
                                    <td class="px-4 py-3">{{ $medical_history->chronical_illnesses }}</td>
                                    {{-- <td class="px-4 py-3">{{ $medical_history->time }}</td> --}}
                                </tr>

                            </tbody>
                        </table>

                        @endforeach
        </div>
        </div>
        <div class="hidden p-4 bg-white rounded-lg dark:bg-gray-800" id="faq" role="tabpanel" aria-labelledby="faq-tab">
            {{-- <div id="accordion-flush" data-accordion="collapse" data-active-classes="bg-white dark:bg-gray-800 text-gray-900 dark:text-white" data-inactive-classes="text-gray-500 dark:text-gray-400"> --}}
                {{-- <h2 id="accordion-flush-heading-1">
                    Test Results
                </h2> --}}
                {{-- {{$lab_tests}} --}}
                {{-- <h2 class="text-xl font-semibold mb-4">Lab Tests</h2> --}}
               
                {{-- <div class="overflow-x-auto"> --}}


                    <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                        <h2 class="text-xl font-bold mb-4">Test Information</h2>
                        @foreach ($user->lab_tests as $lab_tests)
                        <div class="flex items-center justify-between mb-2">
                            <p class="text-gray-700 font-semibold">Doctor:</p>
                            <p class="text-gray-800">{{ $lab_tests->doctor->name }}</p>
                        </div>
                        
                        <div class="flex items-center justify-between">
                            <p class="text-gray-700 font-semibold">Test Date:</p>
                            <p class="text-gray-800">{{ $lab_tests->test_date }}</p>
                        </div>

                        @endforeach
                    </div>

                    <table class="table-auto border-collapse w-full overflow-x-auto mt-4">
                        <thead class="bg-gray-200">
                            <tr>
                                <th class="px-4 py-2">Test Name</th>
                                <th class="px-4 py-2">Sample Type</th>
                                <th class="px-4 py-2">Result Value</th>
                                <th class="px-4 py-2">Reference Range</th>
                                <th class="px-4 py-2">Interpretation</th>
                                <th class="px-4 py-2">Test Date</th>
                                {{-- <th class="px-4 py-2">Doctor ID</th>
                                <th class="px-4 py-2">Patient ID</th> --}}
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            @foreach ($user->lab_tests as $lab_tests)
                            <tr>
                                <td class="border px-4 py-2">{{ $lab_tests->test_name }}</td>
                                <td class="border px-4 py-2">{{ $lab_tests->sample_type }}</td>
                                <td class="border px-4 py-2">{{ $lab_tests->result_value }}</td>
                                <td class="border px-4 py-2">{{ $lab_tests->reference_range }}</td>
                                <td class="border px-4 py-2">{{ $lab_tests->interpretation }}</td>
                                <td class="border px-4 py-2">{{ $lab_tests->test_date }}</td>
                                {{-- <td class="border px-4 py-2">{{ $lab_tests->doctor->name }}</td> --}}
                                {{-- <td class="border px-4 py-2">{{ $lab_tests->patient_id }}</td> --}}
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                {{-- </div> --}}
                
               
            </div>

            <div class="hidden p-4 bg-white rounded-lg dark:bg-gray-800" id="faq2" role="tabpanel" aria-labelledby="faq-tab">
                {{-- <div id="accordion-flush" data-accordion="collapse" data-active-classes="bg-white dark:bg-gray-800 text-gray-900 dark:text-white" data-inactive-classes="text-gray-500 dark:text-gray-400"> --}}
                    {{-- <h2 id="accordion-flush-heading-1">
                        Emergency Contacts
                    </h2> --}}
                    {{-- {{$lab_tests}} --}}

                    <div class="flex flex-col items-center pb-5">
                        {{-- create a table to display the emergency contacts information --}}
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr class="border-b dark:border-gray-700 w-full" >
                                   <th scope="col" class="px-4 py-3">Emergency Contact</th>
                                    <th scope="col" class="px-4 py-3">Relationship</th>
                                    <th scope="col" class="px-4 py-3">Contact Number</th>
                                    <th scope="col" class="px-4 py-3">Address</th>
                                    {{-- <th scope="col" class="px-4 py-3">Test Dates</th> --}}
                                    {{-- <th scope="col" class="px-4 py-3">Time</th> --}}
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($user->emergency_contacts as $emergency_contact)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td class="px-6 py-4 border-x text-gray-900 whitespace-nowrap ">
                                            {{ $emergency_contact->contact_name }}</br>
                                            {{ $emergency_contact->contact_email }}
                                        </td>
                                        <td class="px-6 py-4 border-x">
                                            {{ $emergency_contact->relationship }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ $emergency_contact->contact_number }}
                                        </td>
                                        <td class="px-6 py-4 border-x">
                                            {{ $emergency_contact->address }}
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>

                    </div>





        </div>
    </div>
</div>




        </div>
        <div class="col-span-12 rounded-lg border border-gray-400 bg-gray-200 p-8 sm:col-span-4">
            <!-- Sidebar -->
            <div class="flex flex-col items-center">
                <!-- Profile Picture -->
                <div class="mb-6">
                    <img class="w-24 h-24 rounded-full shadow-lg" src="{{ $user->profile_photo_url }}" alt="Profile Picture">
                </div>
                <!-- Profile Information -->
                <div class="text-center">
                    <h5 class="mb-2 text-xl font-medium text-gray-900 dark:text-white bg-slate-200 rounded-sm px-4 py-2">Profile Information</h5>
                    <p class="mb-2 text-sm font-medium text-gray-900 dark:text-white">Name: {{ $user->name }}</p>
                    <p class="mb-2 text-sm font-medium text-gray-900 dark:text-white">Email: {{ $user->email }}</p>
                </div>
            </div>
        </div>
        

        </div>
            {{-- </div> --}}



    </div>
            </div>
        {{-- </div> --}}

</div>
