<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use app\Http\Controllers\User\AuthController;
use app\Http\Controllers\User\ProfileController;
use app\Http\Controllers\Capsule\CreateCapsuleController;
use app\Http\Controllers\Capsule\RetrieveCapsuleController;




//Private Apis (need to be logged in)
Route::post("/logout", [AuthController::class, "logout"]);

Route::post("/create", [CreateCapsuleController::class, "create"]);

Route::get("/UserCapsules", [RetrieveCapsuleController::class, "getUserCapsules"]);
Route::get("/PrivateCapsules", [RetrieveCapsuleController::class, "getPrivateCapsules"]);
Route::get("/PublicCapsules", [RetrieveCapsuleController::class, "getPublicCapsules"]);
Route::get("/FilterByCountry", [RetrieveCapsuleController::class, "getPublicByCountry"]);
Route::get("/FilterByMood", [RetrieveCapsuleController::class, "getPublicByMood"]);

Route::post("/UpdatePhoto", [ProfileController::class, "updatePhoto"]);





//Public Apis (Every one can access)
Route::post("/login", [AuthController::class, "login"]);
Route::post("/register", [AuthController::class, "register"]);

Route::get("/CasuleByLink", [RetrieveCapsuleController::class, "getUnlisted"]);


