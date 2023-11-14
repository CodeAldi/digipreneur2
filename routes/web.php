<?php

use App\Http\Controllers\dashboard\admin\AdminEnrollInstrukturiController;
use App\Http\Controllers\dashboard\admin\AdminInstrukturController;
use App\Http\Controllers\dashboard\admin\AdminMateriController;
use App\Http\Controllers\dashboard\instruktur\InstrukturMateriController;
use App\Http\Controllers\frontend\authController;
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

Route::get('dashboard', function () {
    return view('backend.dashboard');
})->middleware('auth')->name('dashboard');

Route::controller(authController::class)->group(function () {
    Route::get('/', 'login')->middleware('guest')->name('login');
    Route::get('register', 'register')->middleware('guest')->name('register');
    Route::post('/register', 'pesertastore')->middleware('guest')->name('register.store');
    Route::post('/login', 'authenticate')->middleware('guest')->name('authenticate');
    Route::get('/logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware(['auth','role:admin'])->group(function() {
    Route::controller(AdminInstrukturController::class)->group(function(){
        Route::get('dashboard/admin/instruktur/list','index')->name('admin.instruktur.index');
        Route::post('dashboard/admin/instruktur/store','store')->name('admin.instruktur.store');
        Route::delete('dashboard/admin/instruktur/{id}/destroy','destroy')->name('admin.instruktur.destroy');

    });
    Route::controller(AdminMateriController::class)->group(function(){
        Route::get('dashboard/admin/materi/list','index')->name('admin.materi.index');
        Route::post('dashboard/admin/materi/store', 'store')->name('admin.materi.store');
        Route::delete('dashboard/admin/materi/{id}/destroy', 'destroy')->name('admin.materi.destroy');

    });
    Route::controller(AdminEnrollInstrukturiController::class)->group(function(){
        Route::get('dashboard/admin/enroll/instruktur/list','index')->name('admin.enroll.instruktur.index');
        Route::post('dashboard/admin/enroll/instruktur/store','store')->name('admin.enroll.instruktur.store');
        Route::delete('dashboard/admin/enroll/instruktur/{id}/destroy','destroy')->name('admin.enroll.instruktur.destroy');
    });
});

Route::middleware(['auth','role:instruktur'])->group(function(){
    Route::controller(InstrukturMateriController::class)->group(function(){
        Route::get('dashboard/instruktur/materi','index')->name('instruktur.materi.index');
    });
});