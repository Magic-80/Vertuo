<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('auth.login');
});


Route::get("/login" , [AuthController::class , "login"])->name("auth.login");
Route::post("/login" , [AuthController::class , "dologin"]);


Route::get("/register" , [AuthController::class , "register"])->name("auth.register");
Route::post("/register" , [AuthController::class , "doregister"]);

Route::delete('/logout', [AuthController::class, 'logout'])->name("auth.logout")->middleware("auth");



Route::middleware("auth")->group(function (){
    Route::prefix("/customer")->name('customer.')->controller(CustomerController::class)->group(function () {
        Route::get('/', 'index')->name("index");
    });
});
