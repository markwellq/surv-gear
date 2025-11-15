<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;

Route::get("/", [GeneralController::class, "home"])->name("home");
Route::get("/contact", [GeneralController::class, "contact"])->name("contact");
Route::get("/aboutUs", [GeneralController::class, "aboutUs"])->name("aboutUs");

Route::get("/category/{slug}", [CategoryController::class, 'show'])->name("show-category");
Route::get("/product/{slug}", [ProductController::class, 'show'])->name("show-product");

Route::get("/login", [AuthController::class, "login"])->name("login");
Route::get("/register", [AuthController::class, "register"])->name("register");
Route::get("/logout", [AuthController::class, "logout"])->name("logout");


Route::post("/register", [AuthController::class, "registerPost"])->name("registerPost");
Route::post("/login", [AuthController::class, "loginPost"])->name("loginPost");