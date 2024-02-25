<div class="h-full px-3 pb-4 overflow-y-auto p-5 -mt-5  bg-gray-50  dark:bg-gray-800">
   <ul class="space-y-2 font-medium">

       {{-- Dashboard --}}
       @role('admin')
       
       <li>
           <a href="{{ route('dashboard') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group transition duration-200">
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
               <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m4 12 8-8 8 8M6 10.5V19c0 .6.4 1 1 1h3v-3c0-.6.4-1 1-1h2c.6 0 1 .4 1 1v3h3c.6 0 1-.4 1-1v-8.5"/>
             </svg>
               <span class="ms-3">Dashboard</span>
           </a>
       </li>
      

       {{-- Personal Records --}}
       <li>
           <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 transition duration-200" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
               <path stroke="currentColor" stroke-width="2" d="M7 17v1c0 .6.4 1 1 1h8c.6 0 1-.4 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
             </svg>
               <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Personal Records</span>
               <svg class="w-6 h-6 text-gray-800 dark:text-white transform group-hover:rotate-90 transition duration-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                </svg>

           </button>
           <ul id="dropdown-example" class="hidden py-2 space-y-2">
               <li>
                   <a href="{{ route('users') }}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                       {{-- <svg class="w-5 h-5 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20">
                           <path d="M15.776 4.224a.75.75 0 0 1 0 1.06L10.06 10l5.716 5.716a.75.75 0 1 1-1.06 1.06L9 11.06 3.284 16.776a.75.75 0 1 1-1.06-1.06L7.94 10 2.224 4.284a.75.75 0 0 1 1.06-1.06L9 8.94l5.716-5.716a.75.75 0 0 1 1.06 0Z"/>
                       </svg> --}}
                       <span class="ml-3">All Users</span>
                   </a>
               </li>
               <li>
                   <a href="{{ route('users.medical_history') }}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                       {{-- <svg class="w-5 h-5 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20">
                           <path d="M15.776 4.224a.75.75 0 0 1 0 1.06L10.06 10l5.716 5.716a.75.75 0 1 1-1.06 1.06L9 11.06 3.284 16.776a.75.75 0 1 1-1.06-1.06L7.94 10 2.224 4.284a.75.75 0 0 1 1.06-1.06L9 8.94l5.716-5.716a.75.75 0 0 1 1.06 0Z"/>
                       </svg> --}}
                       <span class="ml-3">Students Medical History</span>
                   </a>
               </li>
               <li class="ms-2">
                     <a href="{{ route('users.doctor') }}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                         {{-- <svg class="w-5 h-5 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20">
                             <path d="M15.776 4.224a.75.75 0 0 1 0 1.06L10.06 10l5.716 5.716a.75.75 0 1 1-1.06 1.06L9 11.06 3.284 16.776a.75.75 0 1 1-1.06-1.06L7.94 10 2.224 4.284a.75.75 0 0 1 1.06-1.06L9 8.94l5.716-5.716a.75.75 0 0 1 1.06 0Z"/>
                         </svg> --}}
                         <span class="ml-3">Doctors Details</span>
                     </a>
               </li>
           </ul>
       </li>

       <!-- Dropdown menu -->

       {{-- User Management --}}
       <li>
           <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 transition duration-200" aria-controls="userManagementDropDown" data-collapse-toggle="userManagementDropDown">
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
               <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M4.5 17H4a1 1 0 0 1-1-1 3 3 0 0 1 3-3h1m0-3a2.5 2.5 0 1 1 2-4.5M19.5 17h.5c.6 0 1-.4 1-1a3 3 0 0 0-3-3h-1m0-3a2.5 2.5 0 1 0-2-4.5m.5 13.5h-7a1 1 0 0 1-1-1 3 3 0 0 1 3-3h3a3 3 0 0 1 3 3c0 .6-.4 1-1 1Zm-1-9.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z"/>
             </svg>
               <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Access Control</span>
               <svg class="w-6 h-6 text-gray-800 dark:text-white transform group-hover:rotate-90 transition duration-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                </svg>
           </button>
           <ul id="userManagementDropDown" class="hidden py-2 space-y-2">
               {{-- <li class="ms-2">
                   <a href="{{ route('dashboard') }}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"> --}}
                     {{-- <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M16 19h4c.6 0 1-.4 1-1v-1a3 3 0 0 0-3-3h-2m-2.2-4A3 3 0 0 0 19 8a3 3 0 0 0-5.2-2M3 18v-1a3 3 0 0 1 3-3h4a3 3 0 0 1 3 3v1c0 .6-.4 1-1 1H4a1 1 0 0 1-1-1Zm8-10a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                      </svg> --}}
                       {{-- <span class="ml-3">Users List</span>
                   </a>
               </li> --}}
               <li class="ms-2">
                   <a href="{{ route('roles.list') }}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                       {{-- <svg class="w-5 h-5 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20">
                           <path d="M15.776 4.224a.75.75 0 0 1 0 1.06L10.06 10l5.716 5.716a.75.75 0 1 1-1.06 1.06L9 11.06 3.284 16.776a.75.75 0 1 1-1.06-1.06L7.94 10 2.224 4.284a.75.75 0 0 1 1.06-1.06L9 8.94l5.716-5.716a.75.75 0 0 1 1.06 0Z"/>
                       </svg> --}}
                       <span class="ml-3">Roles</span>
                   </a>
               </li>
               <li class="ms-2">
                   <a href="{{ route('permissions.list') }}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                       {{-- <svg class="w-5 h-5 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20">
                           <path d="M15.776 4.224a.75.75 0 0 1 0 1.06L10.06 10l5.716 5.716a.75.75 0 1 1-1.06 1.06L9 11.06 3.284 16.776a.75.75 0 1 1-1.06-1.06L7.94 10 2.224 4.284a.75.75 0 0 1 1.06-1.06L9 8.94l5.716-5.716a.75.75 0 0 1 1.06 0Z"/>
                       </svg> --}}
                       <span class="ml-3">Permissions</span>
                   </a>
               </li>
           </ul>
       </li>

       <li>
           <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group transition duration-200">
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
               <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 13h3.4a1 1 0 0 1 1 .6 4 4 0 0 0 7.3 0 1 1 0 0 1 .9-.6H20M4 13v6a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-6M4 13l2-9h12l2 9"/>
             </svg>
               <span class="ml-3">Inbox</span>
               <span class="inline-flex items-center justify-center w-5 h-5 p-1 ml-auto text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
           </a>
       </li>

       <li>
        <form class="flex items-center p-1 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group transition duration-200" method="POST" action="{{ route('logout') }}" x-data>
            @csrf
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H8m12 0-4 4m4-4-4-4M9 4H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h2"/>
              </svg>
            <x-dropdown-link href="{{ route('logout') }}"
                     @click.prevent="$root.submit();">
                {{ __('Log Out') }}
            </x-dropdown-link>
        </form>
       </li>
   </ul>
   @endrole
    @role('doctor')
    <li>
        <a href="{{ route('dashboard') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group transition duration-200">
         <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m4 12 8-8 8 8M6 10.5V19c0 .6.4 1 1 1h3v-3c0-.6.4-1 1-1h2c.6 0 1 .4 1 1v3h3c.6 0 1-.4 1-1v-8.5"/>
          </svg>
            <span class="ms-3">Dashboard</span>
        </a>
        <li>
            <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 transition duration-200" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
             <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-width="2" d="M7 17v1c0 .6.4 1 1 1h8c.6 0 1-.4 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
              </svg>
                <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Personal Records</span>
                <svg class="w-6 h-6 text-gray-800 dark:text-white transform group-hover:rotate-90 transition duration-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                 </svg>
 
            </button>
            <ul id="dropdown-example" class="hidden py-2 space-y-2">
                <li>
                    <a href="{{ route('users') }}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                        {{-- <svg class="w-5 h-5 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M15.776 4.224a.75.75 0 0 1 0 1.06L10.06 10l5.716 5.716a.75.75 0 1 1-1.06 1.06L9 11.06 3.284 16.776a.75.75 0 1 1-1.06-1.06L7.94 10 2.224 4.284a.75.75 0 0 1 1.06-1.06L9 8.94l5.716-5.716a.75.75 0 0 1 1.06 0Z"/>
                        </svg> --}}
                        <span class="ml-3">All Users</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('users.medical_history') }}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                        {{-- <svg class="w-5 h-5 text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M15.776 4.224a.75.75 0 0 1 0 1.06L10.06 10l5.716 5.716a.75.75 0 1 1-1.06 1.06L9 11.06 3.284 16.776a.75.75 0 1 1-1.06-1.06L7.94 10 2.224 4.284a.75.75 0 0 1 1.06-1.06L9 8.94l5.716-5.716a.75.75 0 0 1 1.06 0Z"/>
                        </svg> --}}
                        <span class="ml-3">Students Medical History</span>
                    </a>
                </li>
            </ul>

                <li>
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group transition duration-200">
                     <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 13h3.4a1 1 0 0 1 1 .6 4 4 0 0 0 7.3 0 1 1 0 0 1 .9-.6H20M4 13v6a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-6M4 13l2-9h12l2 9"/>
                      </svg>
                        <span class="ml-3">Inbox</span>
                        <span class="inline-flex items-center justify-center w-5 h-5 p-1 ml-auto text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                    </a>
                </li>
         
                <li>
                    {{-- <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group transition duration-200">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H8m12 0-4 4m4-4-4-4M9 4H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h2"/>
                          </svg>
                        <span class="ml-3">Log Out</span>
                    </a> --}}
                    <form class="flex items-center p-1 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group transition duration-200" method="POST" action="{{ route('logout') }}" x-data>
                        @csrf
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H8m12 0-4 4m4-4-4-4M9 4H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h2"/>
                          </svg>
                        <x-dropdown-link href="{{ route('logout') }}"
                                 @click.prevent="$root.submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </li>

    @endrole
</div>
