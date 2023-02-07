<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\TableController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Fronted\WelcomeController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Fronted\MenuController as FrontedMenuController;
use App\Http\Controllers\Fronted\CategoryController as FrontedCategoryController;
use App\Http\Controllers\Fronted\ReservationController as FrontedReservationController;

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/categories', [FrontedCategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{category}', [FrontedCategoryController::class, 'show'])->name('categories.show');
Route::get('/menus', [FrontedMenuController::class, 'index'])->name('menus.index');
Route::get('/reservation/step-one', [FrontedReservationController::class, 'stepOne'])->name('reservations.step.one');
Route::get('/reservation/step-two', [FrontedReservationController::class, 'stepTwo'])->name('reservations.step.two');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'admin'])->name('admin.')
->prefix('admin')->group(function() {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::resource('/categories', CategoryController::class);
    Route::resource('/menus', MenuController::class);
    Route::resource('/tables', TableController::class);
    Route::resource('/reservations', ReservationController::class);
});

require __DIR__.'/auth.php';
