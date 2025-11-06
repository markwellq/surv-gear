<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;

Route::get("/", [GeneralController::class, "home"])->name("home");
Route::get("/contact", [GeneralController::class, "contact"])->name("contact");
Route::get("/aboutUs", [GeneralController::class, "aboutUs"])->name("aboutUs");


Route::get("/login", [AuthController::class, "login"])->name("login");
Route::get("/register", [AuthController::class, "register"])->name("register");


Route::post("/register", [AuthController::class, "registerPost"])->name("registerPost");
Route::post("/login", [AuthController::class, "loginPost"])->name("loginPost");