<div class=" pb-5" wire:poll>
    <nav class="flex mb-4 bg-blue-100 p-3" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
          <li class="inline-flex items-center">
            <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
              <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
              </svg>
              Home
            </a>
          </li>
          {{-- <li>
            <div class="flex items-center">
              <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
              </svg>
              <a href="{{route('roles.list')}}" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Roles</a>
            </div>
          </li> --}}
          <li aria-current="page">
            <div class="flex items-center">
              <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
              </svg>
              <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Roles List</span>
            </div>
          </li>
        </ol>
        <div class="flex-grow">
          @livewire('new-role-modal')
        </div>
      </nav>
    
    {{-- Be like water. main-content --}} 
 
        <div class="container mx-auto px-4 sm:px-6 lg:px-8  p-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols- gap-4 px-4">
            @forelse ($roles as $role)
            <div class="p-4 bg-white rounded-lg shadow dark:bg-gray-800 ">
                <h5 class=" text-xl bg-gray-100 rounded-lg p-4 font-medium text-black-500 dark:text-gray-400">{{$role->name}}</h5>
                <hr>
                <ul role="list" class="grid grid-cols-2 gap-4 my-7">
                    @forelse($allPermissions as $permission)
                    <div class="flex align-items-center {{ $role->permissions->contains($permission) ? '' : 'line-through decoration-gray-500' }} hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors duration-200">
                        <li class="flex items-center">
                            <svg class="flex-shrink-0 w-4 h-4 {{ $role->permissions->contains($permission) ? 'text-blue-600 dark:text-blue-500' : 'text-gray-400 dark:text-gray-500' }}" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                            </svg>
                            <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">{{ $permission->name }}</span>
                        </li>
                    </div> 
                        @empty
                            <p class="text-gray-500">This role has no Permissions</p>
                        @endforelse
                    </ul>
    
                    <div class="flex space-x-2">
                        <!-- Action buttons here -->
                        @livewire('edit-role-modal', ['role' => $role] , key('e'.$role->id) )
                                
                        @livewire('delete-role-modal', ['role' => $role], key('d'.$role->id))

                        {{-- @livewire('view-role-details-modal', ['role' => $role], key('v'.$role->id)) --}}
                        <a href="{{ route('roles.view', ['roleId' => $role->id]) }}" 
                            title="Open role details" 
                            class="bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center  text-center">
                             <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                 <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 14v4.8a1.2 1.2 0 0 1-1.2 1.2H5.2A1.2 1.2 0 0 1 4 18.8V7.2A1.2 1.2 0 0 1 5.2 6h4.6m4.4-2H20v5.8m-7.9 2L20 4.2"/>
                             </svg>
                         </a>
                    </div>
                </div>
            @empty
                <div class="p-4 bg-white rounded-lg shadow dark:bg-gray-800">
                    <p class="text-gray-500">No Roles</p>
                </div>
            @endforelse
        </div>
     </div> 



    
</div>
