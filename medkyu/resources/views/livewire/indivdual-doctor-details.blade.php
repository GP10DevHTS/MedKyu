<div>
    <div class="py-8 w-full ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">



                    <section class="bg-white dark:bg-gray-900">
                            <div class="mx-auto mb-8 max-w-screen-sm lg:mb-1 flex justify-items-start">
                                <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png" alt="Bonnie Avatar">
                                {{-- <p class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Name : <span> {{$doctor->doctor->name}}</span></p> --}}
                                <div class="py-8 -px-4">
                                <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">Name : <span >{{$doctor->doctor->name}}</span></p>
                                <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">Email : <span >{{$doctor->doctor->email}}</span></p>
                                <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">Role : <span >{{$doctor->doctor->roles->first()->name}}</span></p>
                                </div>
                                {{-- <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">Phone : <span >{{$doctor->doctor->phone}}</span></p>
                                <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">Address : <span >{{$doctor->doctor->address}}</span></p> --}}
                            </div>
                        </section>
                            <h2 class="text-xl font-semibold mb-3">Doctor Available Time</h2>
                            <div class="flex items-center space-x-3 w-full md:w-auto">
                                <div class="relative flex ">
                                    {{-- create a search bar with an icon --}}
                                    <input type="text" class="w-full pl-10 pr-4 py-2 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-primary-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400" placeholder="Search..." />
                                    <div class="absolute top-0 left-0 inline-flex items-center p-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-400" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <div class="w-full">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr class="border-b dark:border-gray-700 w-full" >
                                   <th scope="col" class="px-4 py-3">Available days</th>
                                    <th scope="col" class="px-4 py-3">Available Time</th>
                                    <th scope="col" class="px-4 py-3">Joined Date</th>
                                    <th scope="col" class="px-4 py-3">updated At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($availabilities as $availability)
                                    <tr class="border-b dark:border-gray-700">
                                        <td class="px-4 py-3">{{$availability->day_of_week}}</td>
                                        <td class="px-4 py-3">{{$availability->start_time}} - {{$availability->end_time}}</td>
                                        <td class="px-4 py-3">{{$availability->created_at}}</td>
                                        <td class="px-4 py-3">{{$availability->updated_at}}</td>
                                    </tr>


                                @endforeach


                            </tbody>
                        </table>
                    </div>

                    <div class="w-full ">
                        <h2 class="text-xl font-semibold mb-3">Test List</h2>
                        @livewire('indivdual-doctor-lab-tests-table', ['id' => $doctor->id])

                </div>
            </div>
        </div>

</div>
