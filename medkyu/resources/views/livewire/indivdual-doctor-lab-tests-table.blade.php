<div>
    {{-- Search Bar --}}
    <div class="mb-6">
        <h3 class="text-xl font-semibold mb-2">Doctor Labaratory Tests</h3>
        <div class="relative">
            <input type="text" class="w-full pl-10 pr-4 py-2 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-primary-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400" placeholder="Search..." />
            <div class="absolute top-0 left-0 flex items-center p-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>
    </div>

    {{-- Table --}}
    <div class="overflow-x-auto">
        <table class="w-full text-sm text-gray-500 dark:text-gray-400">
            <thead class="text-xs uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th class="px-4 py-3">Patient Details</th>
                    <th class="px-4 py-3">Test Names</th>
                    <th class="px-4 py-3">Sample Types</th>
                    <th  class="px-4 py-3">Result Values</th>
                    <th class="px-4 py-3">Test Dates</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($labTests as $labTest)
                <tr class="border-b dark:border-gray-700">
                    <td class="px-4 py-3">{{ $labTest->patient->name }}</td>
                    <td class="px-4 py-3">{{ $labTest->test_name }}</td>
                    <td class="px-4 py-3">{{ $labTest->sample_type }}</td>
                    <td class="px-4 py-3">{{ $labTest->interpretation }}</td>
                    <td class="px-4 py-3">{{ $labTest->test_date }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
