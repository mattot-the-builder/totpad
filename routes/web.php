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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('checkin-log', CheckinLogController::class);
    Route::resource('student', StudentController::class);
    Route::resource('ipad', IpadController::class);

    Route::get('/checkin', [CheckinController::class, 'checkin'])->name('checkin');
    Route::get('/checkout', [CheckinController::class, 'checkout'])->name('checkout');
});

require __DIR__.'/auth.php';
