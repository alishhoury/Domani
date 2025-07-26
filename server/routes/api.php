<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\Capsule\CreateCapsuleController;

use App\Http\Controllers\Capsule\RetrieveCapsuleController;




Route::group(["middleware" => "auth:api"], function(){

Route::post("/logout", [AuthController::class, "logout"]);

Route::post("/create", [CreateCapsuleController::class, "create"]);

Route::get("/UserCapsules", [RetrieveCapsuleController::class, "getUserCapsules"]);
Route::get("/PrivateCapsules", [RetrieveCapsuleController::class, "getPrivateCapsules"]);
Route::get("/FilterByCountry", [RetrieveCapsuleController::class, "getPublicByCountry"]);
Route::get("/FilterByMood", [RetrieveCapsuleController::class, "getPublicByMood"]);

Route::post("/UpdatePhoto", [ProfileController::class, "updatePhoto"]);

});
Route::get("/PublicCapsules", [RetrieveCapsuleController::class, "getPublicCapsules"]);


Route::group(["prefix" => "guest"], function(){

Route::post("/login", [AuthController::class, "login"]);
Route::post("/register", [AuthController::class, "register"]);

Route::get("/CasuleByLink", [RetrieveCapsuleController::class, "getUnlisted"]);
});


