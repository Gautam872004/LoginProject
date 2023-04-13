<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginProject;
use App\Http\Controllers\productcontroller;
use App\Http\Middleware\authmiddleware;
use App\Http\Controllers\APIcontroller;

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

Route::get("/auth",[LoginProject::class,"Loginauth"])->name("authlogin");
Route::post("Login_Check",[LoginProject::class,"logincheck"]);
Route::get("/userregistration",[LoginProject::class,"Registration"])->name("Registration");
// product 

Route::middleware([authmiddleware::class])->group(function () {   
    route::get("/logout",[LoginProject::class,"LogOut"])->name("logout");
    Route::get("/dashbord",[LoginProject::class,"dashbord"])->name("dashbord");  
    Route::resource('product',productcontroller::class);
});

