
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
{{-- </div>  --}}
<tr id="table-row-{{$permission->id}}" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
    <td class="w-4 p-4">
        <div class="flex items-center">
            <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
        </div>
    </td>
    <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
       {{$permission->name}} 
    </th>
    <td class="px-6 py-4">
        {{-- roles with this permission on tailwind badges --}}
        @forelse ($permission->roles as $role)
            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800 dark:bg-blue-800 dark:text-blue-100">
                {{$role->name}}
            </span>
        @empty
            <span class="text-gray-500">No roles</span>
        @endforelse
    </td>
    <td class="px-6 py-4">
        {{$permission->created_at->diffForHumans()}}
    </td>
    <td class="px-6 py-4">
        <!-- Modal -->
        @livewire('view-permission', ['permissionId' => $permission->id] , key('ed-'.$permission->id))
    </td>
</tr>
