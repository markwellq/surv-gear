<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;

Route::get("/", [GeneralController::class, "home"])->name("home");
Route::get("/gear", [GeneralController::class, "gear"])->name("gear");

Route::get("/contact", [GeneralController::class, "contact"])->name("contact");
Route::get("/aboutUs", [GeneralController::class, "aboutUs"])->name("aboutUs");


Route::get("/category/{slug}", [CategoryController::class, "show"])->name("show-category");
Route::get("/product/{slug}", [ProductController::class, "show"])->name("show-product");

Route::get("/profile", [AuthController::class, 'user'])->middleware("auth")->name("profile");

Route::get("/admin", [AdminController::class, 'index'])->middleware(AdminMiddleware::class)->name('admin');
Route::post("/admin/store", [AdminController::class, 'store'])->middleware(AdminMiddleware::class)->name('admin.store');
Route::post("/admin/remove", [AdminController::class, 'remove'])->middleware(AdminMiddleware::class)->name('admin.remove');

Route::get("/login", [AuthController::class, "login"])->name("login");
Route::get("/register", [AuthController::class, "register"])->name("register");
Route::get("/logout", [AuthController::class, "logout"])->name("logout");


Route::post("/register", [AuthController::class, "registerPost"])->name("registerPost");
Route::post("/login", [AuthController::class, "loginPost"])->name("loginPost");

// to commit