<div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">

    <div class=" grid grid-cols-12 gap-4 bg-zinc-50 p-1 w-full">
        {{-- <div class="header col-span-12 rounded-lg border border-gray-300 bg-gray-600 py-8">
          <!-- Header content -->

        </div> --}}
        <div class="col-span-12 rounded-lg border border-gray-500 bg-gray-200 p-3 sm:col-span-8 ">
          <!-- Main Content -->




<div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    {{-- <div class="sm:hidden">
        <label for="tabs" class="sr-only">Select tab</label>
        <select id="tabs" class="bg-gray-50 border-0 border-b border-gray-200 text-gray-900 text-sm rounded-t-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option>Statistics</option>
            <option>Services</option>
            <option>FAQ</option>
        </select>
    </div> --}}
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
            <button id="faq-tab" data-tabs-target="#faq2" type="button" role="tab" aria-controls="faq" aria-selected="false" class="inline-block w-full p-4 rounded-se-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Emergency Contacts</button>
        </li>
    </ul>
    <div id="fullWidthTabContent" class="border-t border-gray-200 dark:border-gray-600">
        <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="stats" role="tabpanel" aria-labelledby="stats-tab">
            {{-- <dl class="grid max-w-screen-xl grid-cols-2 gap-8 p-4 mx-auto text-gray-900 sm:grid-cols-3 xl:grid-cols-6 dark:text-white sm:p-8"> --}}
                <h2 class="text-xl font-semibold mb-4">Insurance Information</h2>
                    @foreach ($user->insurance_information as $insurance_information)
                        <p class="mb-1 space-x-2"><span class="font-bold">Insurance Information:</span> {{ $insurance_information }}</p>
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
                <h2 id="accordion-flush-heading-1">
                    Test Results
                </h2>
                {{-- {{$lab_tests}} --}}
                <h2 class="text-xl font-semibold mb-4">Lab Tests</h2>
                @foreach ($user->lab_tests as $lab_tests)
                    <p class="mb-1 space-x-2"><span class="font-bold">Lab Tests:</span> {{ $lab_tests }}</p>
                @endforeach
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
        <div class="col-span-12 rounded-lg border border-gray-400 bg-gray-200 p-16 sm:col-span-4">
          <!-- Sidebar -->
        {{-- add a profile picture --}}
        <div class="flex justify-center">
            <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ $user->profile_photo_url }}" alt="Bonnie image"/>
        </div>
        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white border-black bg-slate-200 rounded-sm p-2">Profile Information</h5>
        <p class="mb-1 text-sm font-medium text-gray-900 dark:text-white">Name: {{ $user->name }}</p>
        <p class="mb-1 text-sm font-medium text-gray-900 dark:text-white">Email: {{ $user->email }}</p>

        </div>


        </div>
            </div>



    </div>
            </div>
        </div>

</div>
