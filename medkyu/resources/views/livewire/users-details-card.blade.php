<div>

    <div class=" grid grid-cols-12 gap-4 bg-zinc-50 p-1 w-full">
        {{-- <div class="header col-span-12 rounded-lg border border-gray-300 bg-gray-600 py-8">
          <!-- Header content -->
         
        </div> --}}
        <div class="col-span-12 rounded-lg border border-gray-500 bg-gray-200 p-3 sm:col-span-8 ">
          <!-- Main Content -->
               
                    <h2 class="text-xl font-semibold mb-4">Insurance Information</h2>
                    @foreach ($user->insurance_information as $insurance_information)
                        <p class="mb-1 space-x-2"><span class="font-bold">Insurance Information:</span> {{ $insurance_information }}</p>
                    @endforeach

                    {{-- {{$emergency_contacts}} --}}
                    <h2 class="text-xl font-semibold mb-4">Medical History</h2>
                    @foreach ($user->medical_history as $medical_history)
                        <p class="mb-1 space-x-2"><span class="font-bold">Medical History:</span> {{ $medical_history }}</p>
                    @endforeach
                    {{-- {{$lab_tests}} --}}
                    <h2 class="text-xl font-semibold mb-4">Lab Tests</h2>
                    @foreach ($user->lab_tests as $lab_tests)
                        <p class="mb-1 space-x-2"><span class="font-bold">Lab Tests:</span> {{ $lab_tests }}</p>
                    @endforeach
                {{-- </div> --}}
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
        
        <h2 class="text-xl font-semibold mb-4">Emergency Contact Information</h2>
        
                   
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
