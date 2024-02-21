<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <x-button wire:click="viewUserDetails" class="py-2 px-4 text-sm text-white hover:bg-gray-100 dark:hover: dark:text-gray-200 dark:hover:text-white">Show</x-button>
    <x-dialog-modal wire:model="showUserDetailsModal">
        <x-slot name="title">
            {{ __('User Details') }}
        </x-slot>

        <x-slot name="content">
            <div class="w-full bg-white ">
                <div class="flex flex-col items-center pb-10">
                    <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ $user->profile_photo_url }}" alt="Bonnie image"/>
                    <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Emergency Contacts</h5>
                    @if ($user->emergency_contacts)
                    {{-- @dd($user->emergency_contacts) --}}
                            <div class="text-sm text-gray-500 dark:text-gray-400 w-full border border-gray-600 p-3 space-y-2 rounded">
                                @foreach ($user->emergency_contacts as $emergency_contact)
                                    <p class="mb-1 space-x-2"><span class="font-bold">Name:</span> {{ $emergency_contact->contact_name }}</p>
                                    <p class="mb-1 space-x-2"><span class="font-bold">Relationship:</span> {{ $emergency_contact->relationship }}</p>
                                    <p class="mb-1 space-x-2"><span class="font-bold">Address:</span> {{ $emergency_contact->address }}</p>
                                    <p class="mb-1 space-x-2"><span class="font-bold">Contact Number:</span> {{ $emergency_contact->contact_number }}</p>
                                    @if ($emergency_contact->contact_email)
                                        <p><span class="font-bold">Contact Email:</span> {{ $emergency_contact->contact_email }}</p>
                                    @endif
                                @endforeach
                            </div>
                    @endif  
                
                    {{-- <div class=" flex flex-col items-center pb-10 w-full  "> --}}
                        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Insurance Information</h5>
                        @if ($user->emergency_contacts)
                        {{-- @dd($user->emergency_contacts) --}}
                                <div class="text-sm text-gray-500 dark:text-gray-400 w-full border border-gray-600 p-3 space-y-2">
                                    @foreach ($user->insurance_information as $insurance_information)
                                        <p class="mb-1 space-x-2"><span class="font-bold">Insurance Name:</span> {{ $insurance_information->insurance_name }}</p>
                                        <p class="mb-1 space-x-2"><span class="font-bold">Insurance Number:</span> {{ $insurance_information->insurance_number }}</p>
                                        <p class="mb-1 space-x-2"><span class="font-bold">Insurance Provider:</span> {{ $insurance_information->insurance_provider }}</p>
                                        <p class="mb-1 space-x-2"><span class="font-bold">Policy Number:</span> {{ $insurance_information->policy_number }}</p>
                                        <p class="mb-1 space-x-2"><span class="font-bold">Coverage Details:</span> {{ $insurance_information->coverage_details }}</p>
                                    @endforeach
                                </div>
                        @endif  
                    </div>
                {{-- <div class="px-6 pt-4 pb-2">
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $user->insurance_information }}</span>
                </div> --}}
            </div>
            {{-- </div> --}}
            
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="$toggle('showUserDetailsModal')" wire:loading.attr="disabled">
                {{ __('Close') }}
            </x-secondary-button>
        </x-slot>
    </x-dialog-modal>

  
    
</div>
