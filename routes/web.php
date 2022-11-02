<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:admin')->group(function () {
    Route::get("/admin", [AdminController::class, "index"])->name("admin.dashboard");
    Route::resource("categories",CategoryController::class);
    Route::resource("products",ProductController::class);
});

// Route::middleware('auth')->group(function () {
//     Route::get("/", [HomeController::class, "index"])->name("homepage");
// });

Route::get("/", [HomeController::class, "index"])->name("homepage");
Route::get('/category/{cat_id}',[HomeController::class,"category"])->name("category");
Route::match(["get", "post"], "/admin/login", [HomeController::class, "adminLogin"])->name("admin.login");
Route::post("/admin/logout", [HomeController::class, "adminLogout"])->name("admin.logout");
Route::match(["get", "post"], "/login", [HomeController::class, "login"])->name("login");
Route::match(["get", "post"], "/signup", [HomeController::class, "register"])->name("register");
Route::post("/logout", [HomeController::class, "logout"])->name("logout");
