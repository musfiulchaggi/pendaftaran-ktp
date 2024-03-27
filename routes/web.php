<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PengajuanController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
  
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
  
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});
  
Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
 
    Route::controller(PengajuanController::class)->prefix('pengajuans')->group(function () {
        Route::get('', 'index')->name('pengajuans');
        Route::get('create', 'create')->name('pengajuans.create');
        Route::post('store', 'store')->name('pengajuans.store');
        Route::get('show/{id}', 'show')->name('pengajuans.show');
        Route::get('edit/{id}', 'edit')->name('pengajuans.edit');
        Route::put('edit/{id}', 'update')->name('pengajuans.update');
        Route::delete('destroy/{id}', 'destroy')->name('pengajuans.destroy');
    });
 
    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
    Route::post('/profile', [App\Http\Controllers\AuthController::class, 'profileUpdate'])->name('profile.update');
});