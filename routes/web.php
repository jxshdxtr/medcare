<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'redirect'])->middleware('auth', 'verified');

Route::middleware(['auth:sanctum','verified'])->get('
        /dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

Route::get('/add_doctor_view', [AdminController::class, 'addview'])->name('add_doctor');

Route::post('/upload_doctor', [AdminController::class, 'upload'])->name('upload');

Route::post('/appointment', [HomeController::class, 'appointment'])->name('appointment');

Route::get('/myappointment', [HomeController::class, 'myAppointment'])->name('myappointment');

Route::get('/cancel-appointment/{id}', [HomeController::class, 'cancelAppointment'])->name('cancel');

Route::get('/show_appointments', [AdminController::class, 'showAppointments'])->name('show_appointments');

Route::get('/approved/{id}', [AdminController::class, 'approve'])->name('approved');

Route::get('/canceled/{id}', [AdminController::class, 'cancel'])->name('canceled');

Route::get('/show_doctors', [AdminController::class, 'showDoctors'])->name('show_doctors');

Route::get('/update/{id}', [AdminController::class, 'updateDoctor'])->name('doctor.update');

Route::post('/edit/{id}', [AdminController::class, 'editDoctor'])->name('doctor.edit');

Route::get('/delete/{id}', [AdminController::class, 'deleteDoctor'])->name('doctor.delete');

Route::get('/emailview/{id}', [AdminController::class, 'emailView'])->name('emailview');

Route::post('/sendemail/{id}', [AdminController::class, 'sendEmail'])->name('sendemail');
