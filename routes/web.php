<?php

use App\Http\Controllers\CheckinController;
use App\Http\Controllers\CheckinLogController;
use App\Http\Controllers\IpadController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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
});


Route::prefix('/student')->middleware('student')->group(function () {
    Route::get('/dashboard', [CheckinController::class, 'dashboard'])->name('student.dashboard');
    Route::get('/checkin-log', [CheckinController::class, 'checkinLog'])->name('student.checkin-log');
    // Route::get('/ipad', [CheckinController::class, 'ipad'])->name('student.ipad');
    Route::view('/ipad', 'student.ipad')->name('student.ipad');
    Route::post('/ipad', [IpadController::class, 'store'])->name('student.ipad.store');
    Route::put('/ipad/{ipad}', [CheckinController::class, 'updateIpad'])->name('student.ipad.update');
    Route::delete('/ipad/{ipad}', [CheckinController::class, 'destroyIpad'])->name('student.ipad.destroy');

    Route::get('/checkin', [CheckinController::class, 'checkin'])->name('student.checkin');
    Route::get('/checkout', [CheckinController::class, 'checkout'])->name('student.checkout');
});

Route::prefix('/admin')->middleware('admin')->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('checkin-log', CheckinLogController::class);

    Route::resource('student', StudentController::class);
    Route::post('/student/search', [StudentController::class, 'search'])->name('student.search');

    Route::resource('ipad', IpadController::class);

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
