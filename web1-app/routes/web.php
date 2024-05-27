<?php

use Illuminate\Support\Facades\Route;

//frontendUser
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProductController;

//admin
use App\Http\Controllers\backend\DashboardController as Admin_DashboardController;
use App\Http\Controllers\backend\CategoryController as Admin_CategoryController;
use App\Http\Controllers\backend\ProductController as Admin_ProductController;
use App\Http\Controllers\backend\BrandController as Admin_brandController;



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

Route::prefix('dashboard')->group(function () {
    Route::get('index', [Admin_DashboardController::class, 'index'])->name('admin.dashboard.index');
});
Route::prefix('category')->group(function () {
    Route::get('index', [Admin_CategoryController::class, 'index'])->name('admin.category.index');
    Route::post('create', [Admin_CategoryController::class, 'create']);
    Route::post('store', [Admin_CategoryController::class, 'store']);
    Route::get('show/{id?}', [Admin_CategoryController::class, 'show']);
    Route::put('edit/{id?}', [Admin_CategoryController::class, 'edit']);
    Route::put('update/{id?}', [Admin_CategoryController::class, 'update']);
    Route::delete('destroy/{id?}', [Admin_CategoryController::class, 'destroy']);
});
Route::prefix('brand')->group(function () {
    Route::get('index', [Admin_BrandController::class, 'index'])->name('admin.brand.index');
    Route::post('create', [Admin_BrandController::class, 'create']);
    Route::post('store', [Admin_BrandController::class, 'store']);
    Route::get('show/{id?}', [Admin_BrandController::class, 'show']);
    Route::put('edit/{id?}', [Admin_BrandController::class, 'edit']);
    Route::put('update/{id?}', [Admin_BrandController::class, 'update']);
    Route::delete('destroy/{id?}', [Admin_BrandController::class, 'destroy']);
});
Route::prefix('product')->group(function () {
    Route::get('index', [Admin_ProductController::class, 'index'])->name('admin.product.index');
    Route::post('create', [Admin_ProductController::class, 'create']);
    Route::post('store', [Admin_ProductController::class, 'store']);
    Route::get('show/{id?}', [Admin_ProductController::class, 'show']);
    Route::put('edit/{id?}', [Admin_ProductController::class, 'edit']);
    Route::put('update/{id?}', [Admin_ProductController::class, 'update']);
    Route::delete('destroy/{id?}', [Admin_ProductController::class, 'destroy']);
});
