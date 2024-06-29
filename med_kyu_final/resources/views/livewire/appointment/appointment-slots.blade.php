<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
   
    <div class="py-6 px-4">
        <div class="grid grid-cols-4 gap-4">
            @foreach($appointment_slots as $appointment_slot)
            {{-- <div class="border-b border-gray-200 pb-4 "> --}}
            <div
                class="justify-between items-center border-b border-gray-200 pb-4 bg-gray-50 space-x-4 dark:bg-slate-700 rounded px-4 py-2">
                <div>
                    <h2 class="text-md ">Dr. {{$appointment_slot->doctor->user->name}}</h2>
                </div>

                <div class="text-xs text-gray-500 grid grid-cols-2">
                    <p>Available Date</p>
                    <p>{{$appointment_slot->available_date}}</p>
                </div>

                <div class="text-xs text-gray-500 grid grid-cols-2">
                    <p>Available Time</p>
                    <p>{{$appointment_slot->available_time}}</p>
                </div>

                <div class="text-xs text-gray-500 grid grid-cols-2">
                    <p>Duration</p>
                    <p>30 Minutes</p>
                </div>

                <div class="text-xs text-gray-500 grid grid-cols-2">
                    <p>Speciality</p>
                    <p>Cardiology</p>
                </div>
                <div class="border border-gray-200 px-2 py-2  rounded mt-2 bg-blue-100 hover:bg-blue-200 ">
                <a href="#" class="text-sm text-blue-500 " wire:click="bookAppointment()">Book Appointment</a>
                </div>
                
            </div>
            @endforeach
            </div>
            
        </div>
       
    </div>
    
</div>
