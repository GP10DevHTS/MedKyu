<div class="p-6 bg-white rounded-lg shadow-md">
    <h2 class="text-xl font-semibold mb-4">Symptoms</h2>

    <form wire:submit.prevent="saveSymptom" class="mb-4">
        <div class="flex">
            <input type="text" wire:model="description" placeholder="Enter symptom" class="flex-1 rounded-l-lg border border-gray-300 p-2 focus:outline-none focus:border-blue-500">
            <button type="submit" class="px-4 bg-blue-500 text-white rounded-r-lg hover:bg-blue-600 focus:outline-none">Add Symptom</button>
        </div>
        @error('description') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
    </form>

    @if (session()->has('message'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded relative" role="alert">
            <span class="block sm:inline">{{ session('message') }}</span>
            <button type="button" class="absolute top-0 bottom-0 right-0 px-4 py-2" data-dismiss="alert" aria-label="Close">
                <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <title>Close</title>
                    <path fill-rule="evenodd" d="M14.354 5.646a.5.5 0 0 1 .708.708L10.707 10l4.355 4.354a.5.5 0 1 1-.708.708L10 10.707l-4.354 4.355a.5.5 0 0 1-.708-.708L9.293 10 4.646 5.646a.5.5 0 0 1 .708-.708L10 9.293l4.354-4.354z" clip-rule="evenodd"/>
                </svg>
            </button>
        </div>
    @endif

    <div class="p-6 bg-white rounded-lg shadow-md">
        {{-- <h2 class="text-xl font-semibold mb-4">Symptoms</h2> --}}
    
        <div>
            @if ($symptoms->count() > 0)
                <div class="overflow-x-auto">
                    <table class="table-auto w-full border border-gray-200 rounded">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-4 py-2 text-left">Description</th>
                                <th class="px-4 py-2 text-left">Added On</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($symptoms as $symptom)
                                <tr class="border-b border-gray-200">
                                    <td class="px-4 py-2">{{ $symptom->description }}</td>
                                    <td class="px-4 py-2 text-gray-500 text-sm">{{ $symptom->created_at->format('M d, Y') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <p>No symptoms available.</p>
            @endif
        </div>
    </div>
    
</div>
