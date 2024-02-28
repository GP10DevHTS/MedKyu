<div>

    <div class=" grid grid-cols-12 gap-4 bg-zinc-50 p-1 w-full">
        {{-- <div class="header col-span-12 rounded-lg border border-gray-300 bg-gray-600 py-8">
          <!-- Header content -->
         
        </div> --}}
        <div class="col-span-12 rounded-lg border border-gray-500 bg-gray-200 p-3 sm:col-span-8 ">
          <!-- Main Content -->


            

<div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <div class="sm:hidden">
        <label for="tabs" class="sr-only">Select tab</label>
        <select id="tabs" class="bg-gray-50 border-0 border-b border-gray-200 text-gray-900 text-sm rounded-t-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option>Statistics</option>
            <option>Services</option>
            <option>FAQ</option>
        </select>
    </div>
    <ul class="hidden text-sm font-medium text-center text-gray-500 divide-x divide-gray-200 rounded-lg sm:flex dark:divide-gray-600 dark:text-gray-400 rtl:divide-x-reverse" id="fullWidthTab" data-tabs-toggle="#fullWidthTabContent" role="tablist">
        <li class="w-full">
            <button id="stats-tab" data-tabs-target="#stats" type="button" role="tab" aria-controls="stats" aria-selected="true" class="inline-block w-full p-4 rounded-ss-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Statistics</button>
        </li>
        <li class="w-full">
            <button id="about-tab" data-tabs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="false" class="inline-block w-full p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Services</button>
        </li>
        <li class="w-full">
            <button id="faq-tab" data-tabs-target="#faq" type="button" role="tab" aria-controls="faq" aria-selected="false" class="inline-block w-full p-4 rounded-se-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">FAQ</button>
        </li>
        <li class="w-full">
            <button id="faq-tab" data-tabs-target="#faq" type="button" role="tab" aria-controls="faq" aria-selected="false" class="inline-block w-full p-4 rounded-se-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">FAQ</button>
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
            <h2 class="text-xl font-semibold mb-4">Medical History</h2>
                    @foreach ($user->medical_history as $medical_history)
                        <p class="mb-1 space-x-2"><span class="font-bold">Medical History:</span> {{ $medical_history }}</p>
                    @endforeach
        </div>
        <div class="hidden p-4 bg-white rounded-lg dark:bg-gray-800" id="faq" role="tabpanel" aria-labelledby="faq-tab">
            <div id="accordion-flush" data-accordion="collapse" data-active-classes="bg-white dark:bg-gray-800 text-gray-900 dark:text-white" data-inactive-classes="text-gray-500 dark:text-gray-400">
                <h2 id="accordion-flush-heading-1">
                    Test Results
                </h2>
                {{-- {{$lab_tests}} --}}
                <h2 class="text-xl font-semibold mb-4">Lab Tests</h2>
                @foreach ($user->lab_tests as $lab_tests)
                    <p class="mb-1 space-x-2"><span class="font-bold">Lab Tests:</span> {{ $lab_tests }}</p>
                @endforeach
            {{-- </div> --}}    
            </div>
            <div id="accordion-flush" data-accordion="collapse" data-active-classes="bg-white dark:bg-gray-800 text-gray-900 dark:text-white" data-inactive-classes="text-gray-500 dark:text-gray-400">
                {{-- <h2 id="accordion-flush-heading-1">
                    Test Results
                </h2> --}}
                {{-- {{$lab_tests}} --}}
                
                <h2 class="text-xl font-semibold mb-4">Emergency Information</h2>

                @foreach ($user->emergency_contacts as $emergency_contact)
                    <p class="mb-1 space-x-2"><span class="font-bold">Name:</span> {{ $emergency_contact->contact_name }}</p>
                    <p class="mb-1 space-x-2"><span class="font-bold">Relationship:</span> {{ $emergency_contact->relationship }}</p>
                    <p class="mb-1 space-x-2"><span class="font-bold">Phone:</span> {{ $emergency_contact->contact_number }}</p>
                    
                @endforeach
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
        {{-- add the user name and email --}} 
        <div class="flex flex-col items-center pb-10">
            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ $user->name }}</h5>
            <span class="text-sm text-gray-500 dark:text-gray-400">{{ $user->email }}</span>
            <span class="text-sm text-gray-500 dark:text-gray-400">{{ $user->email_verified_at }}</span>
        </div>
        
        <h2 class="text-xl font-semibold mb-4">Emergency Information</h2>

        @foreach ($user->emergency_contacts as $emergency_contact)
            <p class="mb-1 space-x-2"><span class="font-bold">Name:</span> {{ $emergency_contact->contact_name }}</p>
            <p class="mb-1 space-x-2"><span class="font-bold">Relationship:</span> {{ $emergency_contact->relationship }}</p>
            <p class="mb-1 space-x-2"><span class="font-bold">Phone:</span> {{ $emergency_contact->contact_number }}</p>
            
        @endforeach

        
                   
      {{-- </div>
            <div class="w-full bg-white ">
                <div class="flex flex-col items-center pb-10">
                  
                    <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Emergency Contacts</h5>
                    
                   
                     
                        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Insurance Information</h5>
                        

                                    @livewire('admin-edit-insurance-modal')
                                </div> --}}
                        {{-- @endif   --}}
                    {{-- </div> --}}
               
            </div>
            

  
    
</div>
