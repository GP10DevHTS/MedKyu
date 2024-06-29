
<div wire:poll class="overflow-x-auto">
    <table class="table-auto w-full border border-gray-200 rounded">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-4 py-2 text-left">Test Name</th>
                <th class="px-4 py-2 text-left">Result</th>
                <th class="px-4 py-2 text-left">Options</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($patientLabTest as $test)
                <tr class="border-b border-gray-200">
                    <td class="px-4 py-2">{{ $test->labTest ? $test->labTest->name : 'N/A' }}</td>
                    <td class="px-4 py-2">{{ $test->result }}</td>
                    <td class="px-4 py-2">
                        @livewire('patients.add-lab-test-results', ['test' => $test], key('test-' . $test->id))
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="2" class="px-4 py-2 text-center text-gray-500">No lab tests available.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>