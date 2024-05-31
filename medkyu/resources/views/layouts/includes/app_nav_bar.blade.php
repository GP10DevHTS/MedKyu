<div  class="fixed  top-10 bottom-0 w-64 left-0 px-3  py-8 overflow-y-auto   bg-blue-900 dark:bg-gray-800">
    <ul class="space-y-2 font-medium">
        {{-- Dashboard --}}
        @role('admin')
        <li>
            <a href="{{ route('dashboard') }}" class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-blue-200 dark:hover:bg-blue-700 group transition duration-200">
                <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m4 12 8-8 8 8M6 10.5V19c0 .6.4 1 1 1h3v-3c0-.6.4-1 1-1h2c.6 0 1 .4 1 1v3h3c.6 0 1-.4 1-1v-8.5"/>
                </svg>
                <span class="ms-3">Dashboard</span>
            </a>
        </li>
        {{-- User Management --}}
        <li>
            <button type="button" class="flex items-center w-full p-2 text-white rounded-lg group hover:bg-blue-200 dark:text-white dark:hover:bg-blue-700 transition duration-200" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-width="2" d="M7 17v1c0 .6.4 1 1 1h8c.6 0 1-.4 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                </svg>
                <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">User Management</span>
                <svg class="w-6 h-6 text-blue-600 dark:text-blue-400 transform group-hover:rotate-90 transition duration-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                </svg>
            </button>
            <ul id="dropdown-example" class="hidden py-2 space-y-2">
                <li class="ms-2">
                    <a href="{{ route('users') }}" class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-blue-100 dark:text-white dark:hover:bg-blue-600">
                        <span class="ml-3">Patients</span>
                    </a>
                </li>
                <li class="ms-2">
                    <a href="{{ route('users.doctor') }}" class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-blue-100 dark:text-white dark:hover:bg-blue-600">
                        <span class="ml-3">Doctors</span>
                    </a>
                </li>
            </ul>
        </li>
        {{-- Access Control --}}
        <li>
            <button type="button" class="flex items-center w-full p-2 text-white rounded-lg group hover:bg-blue-200 dark:text-white dark:hover:bg-blue-700 transition duration-200" aria-controls="userManagementDropDown" data-collapse-toggle="userManagementDropDown">
                <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M4.5 17H4a1 1 0 0 1-1-1 3 3 0 0 1 3-3h1m0-3a2.5 2.5 0 1 1 2-4.5M19.5 17h.5c.6 0 1-.4 1-1a3 3 0 0 0-3-3h-1m0-3a2.5 2.5 0 1 0-2-4.5m.5 13.5h-7a1 1 0 0 1-1-1 3 3 0 0 1 3-3h3a3 3 0 0 1 3 3c0 .6-.4 1-1 1Zm-1-9.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z"/>
                </svg>
                <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Access Control</span>
                <svg class="w-6 h-6 text-blue-600 dark:text-blue-400 transform group-hover:rotate-90 transition duration-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                </svg>
            </button>
            <ul id="userManagementDropDown" class="hidden py-2 space-y-2">
                <li class="ms-2">
                    <a href="{{ route('roles.list') }}" class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-blue-100 dark:text-white dark:hover:bg-blue-600">
                        <span class="ml-3">Roles</span>
                    </a>
                </li>
                <li class="ms-2">
                    <a href="{{ route('permissions.list') }}" class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg pl-11 group hover:bg-blue-100 dark:text-white dark:hover:bg-blue-600">
                        <span class="ml-3">Permissions</span>
                    </a>
                </li>
            </ul>
        </li>
        {{-- Inbox --}}
        <li>
            <a href="#" class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-blue-200 dark:hover:bg-blue-700 group transition duration-200">
                <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 13h3.4a1 1 0 0 1 1 .6 4 4 0 0 0 7.3 0 1 1 0 0 1 .9-.6H20M4 13v6a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-6M4 13l2-9h12l2 9"/>
                </svg>
                <span class="ml-3">Inbox</span>
                <span class="inline-flex items-center justify-center w-5 h-5 p-1 ml-auto text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
            </a>
        </li>
        {{-- Logout --}}
        <li>
            <form class="flex items-center p-1 text-white rounded-lg dark:text-white hover:bg-blue-200 dark:hover:bg-blue-700 group transition duration-200" method="POST" action="{{ route('logout') }}" x-data>
                @csrf
                <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.75 9V5.5A2.5 2.5 0 0 0 13.25 3h-7.5A2.5 2.5 0 0 0 3.25 5.5v13A2.5 2.5 0 0 0 5.75 21h7.5a2.5 2.5 0 0 0 2.5-2.5V15m4-3h-8m8 0-2-2m2 2-2 2"/>
                </svg>
                <button type="submit" class="ml-3">Logout</button>
            </form>
        </li>
        @endrole
    </ul>
 </div>
 