<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::get('/post',[PostController::class,'userDetail'])->name('post');
Route::get('/delete',[PostController::class,'deleteUser'])->name('delete');
Route::get('/admin/dashboard', [AdminController::class, 'index'])->middleware('role:admin');
Route::get('/customer/dashboard', [CustomerController::class, 'index'])->middleware('role:customer');

Route::get('/', function () {
    return view('dashboards.guest'); // Public dashboard
})->name('guest.dashboard');

// Authenticated routes
Route::middleware(['auth'])->group(function () {
    Route::get('/admin', function () {
        return view('dashboards.admin');
    })->middleware('role:admin')->name('admin.dashboard');

    Route::get('/customer', function () {
        return view('dashboards.customer');
    })->middleware('role:customer')->name('customer.dashboard');
}
);
