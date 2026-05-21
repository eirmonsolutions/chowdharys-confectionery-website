<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Admin\MenuController;

Route::get('/', function () {
    return view('home');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard')
    ->middleware('auth');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



Route::middleware('auth')->prefix('dashboard')->name('dashboard.')->group(function () {
    Route::get('/', [MenuController::class, 'dashboard'])->name('index');

    Route::post('/category/store', [MenuController::class, 'storeCategory'])->name('category.store');
    Route::post('/subcategory/store', [MenuController::class, 'storeSubCategory'])->name('subcategory.store');
    Route::post('/menu-item/store', [MenuController::class, 'storeMenuItem'])->name('menu-item.store');

    Route::get('/get-subcategories/{categoryId}', [MenuController::class, 'getSubCategories'])->name('get.subcategories');
});

Route::get('/menu', [FrontendController::class, 'menu'])->name('menu');
Route::get('/menu/{id}', [FrontendController::class, 'menuDetails'])
    ->name('menu.details');
