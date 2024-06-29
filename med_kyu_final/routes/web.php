<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataFeedController;
use App\Http\Controllers\DashboardController;
use App\Livewire\Users\ListOfAllAdmin;
use App\Livewire\Users\ListOfAllDoctors;
use App\Livewire\Users\ListOfAllPatients;
use App\Livewire\Users\RolesComponent;
use App\Livewire\Users\UserProfile;
use App\Livewire\Appointment\AppointmentNew;
use App\Livewire\Appointment\AppointmentSlots;
use App\Livewire\Department\DepartmentsList;
use App\Livewire\Department\NewDepartmentModal;
use App\Livewire\Appointment\AppointmentIndex;
use App\Livewire\Attendance\AttandanceManagement;
use App\Livewire\Facilities\LabTestsPage;
use App\Livewire\Facilities\RoomsWards;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::redirect('/', 'login');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    // Route for the getting the data feed
    Route::get('/json-data-feed', [DataFeedController::class, 'getDataFeed'])->name('json_data_feed');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/users/roles', RolesComponent::class)->name('users.roles');
    Route::get('/users/list', ListOfAllAdmin::class)->name('users.index');
    Route::get('/users/doctors', ListOfAllDoctors::class)->name('users.doctors');
    Route::get('/user/{user}', UserProfile::class)->name('users.profile');
    Route::get('/user/{user}/settings', UserProfile::class)->name('users.profile.settings');

    // patient tabs
    Route::get('/patients/patients', ListOfAllPatients::class)->name('users.patients');
    Route::get('/patients/{user}/clinical-records', UserProfile::class)->name('patient.clinical-records');
    Route::get('/patients/{user}/clinical-record', UserProfile::class)->name('patient.clinical-record.view');
    Route::get('/patients/{user}/movements', UserProfile::class)->name('patient.movements');
    Route::get('/patients/{user}/appointments', UserProfile::class)->name('users.appointments');

    // Appointment Routes
    Route::get('/appointments/new', AppointmentNew::class)->name('appointments.new');
    Route::get('/appointments/list', AppointmentIndex::class)->name('appointments.list');
    // Route::get('/appointments/{appointment}', AppointmentView::class)->name('appointments.view');

    Route::get('/appointments/available_slots', AppointmentSlots::class)->name('appointments.available_slots');
    // Route::get('/appointments/departments', AppointmentIndex::class)->name('appointments.departments');

    // Department Routes
    Route::get('/facilities/departments/list', DepartmentsList::class)->name('users.departments.list');
    Route::get('/facilities/rooms-and-wards', RoomsWards::class)->name('facilities.rooms-n-wards');
    Route::get('/facilities/lab-tests', LabTestsPage::class)->name('facilities.lab-tests');
    // Route::get('/facilities/departments/new', NewDepartmentModal::class)->name('users.departments.new');

    Route::get('/attendances', AttandanceManagement::class)->name('attandances.index');
    
    Route::fallback(function () {
        return view('pages/utility/404');
    });
});
