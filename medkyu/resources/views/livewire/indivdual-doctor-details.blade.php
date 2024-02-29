<div class="py-8">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
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
