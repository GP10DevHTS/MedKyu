<div>
    <nav class="flex  bg-blue-100 p-3" aria-label="Breadcrumb">
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
              <a href="{{route('users.doctor')}}" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Doctors</a>
            </div>
          </li>
          <li aria-current="page">
            <div class="flex items-center">
              <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
              </svg>
              <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">{{ $doctor->doctor->name }}</span>
            </div>
          </li>
        </ol>
        
      </nav>



<div class="py-8 bg-gray-100 dark:bg-gray-900 ">

    <div class="w-full mx-auto px-4 sm:px-6 lg:px-8 ">
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm overflow-hidden">
            <section class="p-6">
                <div class="flex items-center mb-6">
                    <img class="w-24 h-24 rounded-full mr-4" src="{{ $doctor->doctor->profile_photo_url }}" alt="{{ $doctor->doctor->name }}">
                    <div>
                        <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">{{ $doctor->doctor->name }}</h2>
                        <p class="text-sm text-gray-600 dark:text-gray-400">{{ $doctor->doctor->email }}</p>
                        <p class="text-sm text-gray-600 dark:text-gray-400">{{ $doctor->doctor->roles->first()->name }}</p>
                    </div>
                </div>

                <div class="mb-6">
                    <h3 class="text-xl font-semibold mb-2">Doctor Available Time</h3>
                    <div class="relative">
                        <input type="text" class="w-full pl-10 pr-4 py-2 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-primary-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400" placeholder="Search..." />
                        <div class="absolute top-0 left-0 flex items-center p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div>
                    {{-- <h3 class="text-xl font-semibold mb-2">Doctor's Availability</h3> --}}
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm text-gray-500 dark:text-gray-400">
                            <thead class="text-xs uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th class="px-4 py-3">Available Days</th>
                                    <th class="px-4 py-3">Available Time</th>
                                    <th class="px-4 py-3">Joined Date</th>
                                    <th class="px-4 py-3">Updated At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($availabilities as $availability)
                                <tr class="border-b dark:border-gray-700">
                                    <td class="px-4 py-3">{{ $availability->day_of_week }}</td>
                                    <td class="px-4 py-3">{{ $availability->start_time }} - {{ $availability->end_time }}</td>
                                    <td class="px-4 py-3">{{ $availability->created_at }}</td>
                                    <td class="px-4 py-3">{{ $availability->updated_at }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <section class="bg-gray-50 dark:bg-gray-700 p-6">
                {{-- <h3 class="text-xl font-semibold mb-2">Test List</h3> --}}
                @livewire('indivdual-doctor-lab-tests-table', ['id' => $doctor->id])
            </section>
        </div>
    </div>
</div>
</div>
