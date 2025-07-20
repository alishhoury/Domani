<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use app\Http\Controllers\User\AuthController;




//Private Apis (need to be logged in)
Route::post("/logout", [AuthController::class, "logout"]);

Route::post("/create", [])










//Public Apis (Every one can access)
Route::post("/login", [AuthController::class, "login"]);
Route::post("/register", [AuthController::class, "register"]);



