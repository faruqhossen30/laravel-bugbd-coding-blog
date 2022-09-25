<?php

use App\Http\Controllers\Userend\UserdashboardController;
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
    return view('welcome');
});

Route::group(['prefix' => 'user', 'middleware' => ['auth', 'user']], function () {
    Route::get('/dashboard',[UserdashboardController::class, 'dashboard'])->name('userdashboard');
    Route::get('/settings',[SettingsController::class, 'index'])->name('user.settings');
    Route::resource('job', Userjobcontroller::class);
    Route::resource('company', UsercompanyController::class);
});
