<div class="py-6">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100 border-b border-gray-200">
                @livewire('admin-edit-emergency-contact',['id' => $student->id])
            </div>
            <div class="p-6 text-gray-900 dark:text-gray-100 border-b border-gray-200">
                @livewire('admin-edit-medical-history',['id' => $student->id])
            </div>
            <div class="p-6 text-gray-900 dark:text-gray-100 border-b border-gray-200">
                @livewire('admin-edit-lab-tests',['id' => $student->id])
            </div>
            <div class="p-6 text-gray-900 dark:text-gray-100">
                @livewire('admin-edit-insurance-modal',['id' => $student->id])
            </div>
        </div>
    </div>
</div>
