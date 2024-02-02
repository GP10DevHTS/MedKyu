<div>
    <div class="flex flex-wrap pt-4">
        <!-- Student Card -->
        <div class="w-full md:w-1/3 p-2">
            <div class="bg-white rounded-lg shadow-md p-5">
                <img class="h-15 w-20 rounded-full mx-auto" src="student_photo.jpg" alt="Student photo">
                <h2 class="text-2xl text-center mt-4">Student Name</h2>
                <div class="px-6 pt-4 pb-2">
                    <p class="text-sm text-gray-600 dark:text-gray-400 border border-gray-600 p-1 mb-2">
                        Student Email
                    </p>
                    <p class="text-sm text-gray-600 dark:text-gray-400 border border-gray-600 p-1 mb-2">
                        Student Phone
                    </p>
                    <p class="text-sm text-gray-600 dark:text-gray-400 border border-gray-600 p-1 ">
                        Student Address
                    </p>
                  </div>
            </div>
        </div>
    
        <div class="w-full md:w-2/3 p-2">
        <!-- Students Table -->
            @livewire('allstudent-med-cards')
        
        </div>
</div>
