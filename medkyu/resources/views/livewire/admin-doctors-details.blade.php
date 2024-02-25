<div>
    {{-- Success is as dangerous as failure. --}}
    <section class="">
        <div class="mx-auto max-w-screen-xl px-1 py-5">
            <!-- Start coding here -->
            <div class="bg-white dark:bg-gray-800 relative shadow-lg sm:rounded-lg overflow-hidden">
                <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                    <div class="w-full md:w-1/2">
                        <form class="flex items-center">
                            <label for="simple-search" class="sr-only">Search</label>
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search" required="">
                            </div>
                        </form>
                    </div>
                    <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">

                        {{-- @livewire('admin-add-user-modal') --}}
                        <div class="flex items-center space-x-3 w-full md:w-auto">

                            <button id="filterDropdownButton" data-dropdown-toggle="filterDropdown" class="w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-4 w-4 mr-2 text-gray-400" viewbox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd" />
                                </svg>
                                Filter
                                <svg class="-mr-1 ml-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path clip-rule="evenodd" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                                </svg>
                            </button>
                            <div id="filterDropdown" class="z-10 hidden w-48 p-3 bg-white rounded-lg shadow dark:bg-gray-700">
                                <h6 class="mb-3 text-sm font-medium text-gray-900 dark:text-white">Choose brand</h6>
                                <ul class="space-y-2 text-sm" aria-labelledby="filterDropdownButton">
                                    <li class="flex items-center">
                                        <input id="apple" type="checkbox" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="apple" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Apple (56)</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full px-2 py-3">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr class="border-b dark:border-gray-700 w-full" >
                               <th scope="col" class="px-4 py-3">Doctor Details</th>
                                {{-- <th scope="col" class="px-4 py-3">Blood Type</th> --}}
                                {{-- <th scope="col" class="px-4 py-3">Height</th>
                                <th scope="col" class="px-4 py-3">Weight</th> --}}
                                {{-- <th scope="col" class="px-4 py-3">Med History</th> --}}
                                {{-- <th scope="col" class="px-4 py-3">Days Available</th> --}}
                                {{-- <th scope="col" class="px-4 py-3">current_medications</th> --}}
                                {{-- <th scope="col" class="px-4 py-3">Time Available</th> --}}
                                <th scope="col" class="px-4 py-3">Created At</th>
                                <th scope="col " class="text-right px-24   py-3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($doctors as $doctor)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="px-4 py-3 font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $doctor->doctor->name }}
                                </td>
{{--
                                <td class="px-4 py-3 font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $doctor->day_of_week }}
                                </td> --}}
                                {{-- <td class="px-4 py-3 font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $doctor->start_time }} - {{ $doctor->end_time }} --}}
                                <td class="px-4 py-3 font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $doctor->created_at }}
                                    </td>

                                <td class="text-center px-4 py-3 space-x-2 flex items-center">
                                    <a href="{{route('users.doctor.details', $doctor->id)}}" class="font-medium border-2 border-black-200 px-4 py-2 rounded text-black dark:text-blue-500 hover:bg-gray-100 hover:text-white">VIEW ACTIVITY</a>
                                    @livewire('edit-doctor-modal')
                                </td>
                                </tr>
                            @endforeach



                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        </section>

</div>
