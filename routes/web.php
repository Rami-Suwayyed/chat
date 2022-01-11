<?php

use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\ManagerLoginController;
use App\Http\Controllers\HomeController;
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
    return view('welcome');
});
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('admin/login', [AdminLoginController::class, 'indeshowLoginForm']);
Route::post('admin/login',[AdminLoginController::class, 'login'])->name('admin.login');

Route::get('manager/login', [ManagerLoginController::class, 'indeshowLoginForm']);
Route::post('manager/login',  [ManagerLoginController::class, 'login'])->name('manager.login');

Route::group(["prefix" => "admin", "middleware" => "assign.guard:admin,admin/login"], function() {
    Route::get("dashboard", function() {
        return view("admin.home");
    });
});

Route::group(["prefix" => "manager", "middleware" => "assign.guard:manager,manager/login"], function() {
    Route::get("dashboard", function() {
        return view("manager.home");
    });
});
