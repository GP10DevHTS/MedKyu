<?php

use App\Http\Controllers\loginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentRegistration;
use App\Livewire\AllstudentMedCards;
use App\Livewire\AllUsersComponent;
use App\Livewire\PermisionsList;
use App\Livewire\RolesList;
use App\Livewire\ViewRoleDetails;
use App\Livewire\MedicalCard;
use App\Livewire\ShowUsersDetails;

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

Route::get('/', function () {
    return view('welcome');
})->name('home');

// route::get('/login',[loginController::class,'index'])->name('login');

Route::get('/student/reg',[studentRegistration::class, 'index'])->name('student.reg');
Route::post('/student/reg',[studentRegistration::class, 'create'])->name('student.reg.post');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

Route::get('roles', RolesList::class )->name('roles.list');
Route::get('permissions', PermisionsList::class )->name('permissions.list');
Route::get('roles/view/{roleId}', ViewRoleDetails::class)->name('roles.view');

//route for medical card
Route::get('/medical-card', MedicalCard::class)->name('medical-card');
Route::get('/all-students', AllstudentMedCards::class)->name('all-students');

//admin
Route::get('/users', AllUsersComponent::class)->name('users');
}); 



