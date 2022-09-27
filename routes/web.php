<?php

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\Userend\PostController;
use App\Http\Controllers\Userend\UserdashboardController;
use App\Models\Post;
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

Route::get('/', [HomepageController::class, 'index'])->name('homepage');
Route::get('/post/{$id}', [HomepageController::class, 'index'])->name('singlepost');

Route::group(['prefix' => 'user', 'middleware' => ['auth', 'user']], function () {
    Route::get('/dashboard',[UserdashboardController::class, 'dashboard'])->name('userdashboard');
    Route::resource('post', PostController::class);

    Route::get('/settings',[SettingsController::class, 'index'])->name('user.settings');
    Route::resource('company', UsercompanyController::class);
});
