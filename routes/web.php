<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\InBoundController;
use App\Http\Controllers\ManifestController;
use App\Http\Controllers\OutBoundController;
use App\Http\Controllers\ScheduleController;

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
    return view('pages.auth.main');
});

Route::get('auth',[AuthController::class, 'index'])->name('auth.index');
    Route::prefix('auth')->name('auth.')->group(function(){
        Route::post('login',[AuthController::class, 'do_login'])->name('login');
        Route::post('register',[AuthController::class, 'do_register'])->name('register');
    });
Route::get('logout',[AuthController::class, 'do_logout'])->name('auth.logout');
Route::resource('admin',AdminController::class);
Route::resource('user',UserController::class);
Route::resource('inbound',InBoundController::class);
Route::resource('outbound',OutBoundController::class);
Route::resource('schedule',ScheduleController::class);
Route::resource('cargo',CargoController::class);
Route::resource('manifest',ManifestController::class);