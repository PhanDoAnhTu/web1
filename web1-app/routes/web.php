<?php

// use App\Http\Controllers\UserController;

use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProductController;
use Illuminate\Support\Facades\Route;

// Route::get("/", function () {
//     echo "Hello World!";
// });
// Route::get("home", function () {
//     return "Home";
// });
// Route::get("welcome", function () {
//     return view("welcome");
// });
Route::get("/", [HomeController::class, "index"]);
Route::get("/san-pham", [ProductController::class, "index"]);
Route::get("/chi-tiet-san-pham/{slug?}", [ProductController::class, "detail"]);
Route::get("/lien-he", [ContactController::class, "index"]);
