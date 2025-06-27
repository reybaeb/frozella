<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrozenFoodController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Str;

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
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

// Route untuk user (lihat produk saja)
Route::get('/products', [ProductController::class, 'userIndex'])->name('products.user.index');
Route::get('/products/{slug}', [ProductController::class, 'userShow'])->name('products.user.show');

// Route untuk admin (CRUD)
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::resource('products', ProductController::class);
    Route::resource('orders', \App\Http\Controllers\Admin\OrderController::class, ['as' => 'admin']);
    // Admin Frozen Food Routes
    Route::get('/frozen-foods', [FrozenFoodController::class, 'index'])->name('admin.frozen-foods.index');
    Route::get('/frozen-foods/{frozenFood}', [FrozenFoodController::class, 'show'])->name('admin.frozen-foods.show');
    Route::post('/frozen-foods/{frozenFood}/status', [FrozenFoodController::class, 'updateStatus'])->name('admin.frozen-foods.update-status');
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
});

// Route Auth Manual
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route Test
Route::get('/test-login', function () {
    return view('auth.login');
});

// Route Profil User
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/profile/delete', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/frozen-food/{id}/order', [OrderController::class, 'store'])->name('orders.store');
    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
    Route::get('/orders/{order}', [OrderController::class, 'show'])->name('orders.show');
});
