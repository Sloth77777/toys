<?php

declare(strict_types=1);

use App\Http\Controllers\CommentController;
use App\Http\Controllers\IndexProductController;
use App\Http\Controllers\ShowProductController;
use App\Modules\AdminPanel\Controllers\CategoryController;
use App\Modules\AdminPanel\Controllers\OrderController;
use App\Modules\AdminPanel\Controllers\ProductController;
use App\Modules\AdminPanel\Controllers\RoleController;
use App\Modules\AdminPanel\Controllers\UserController;
use App\Modules\Web\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// Маршруты для профиля пользователя
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Маршруты для администраторской панели
Route::prefix('admin')->middleware('auth')->group(function () {

    Route::get('/users', [UserController::class, 'index'])->name('admin.users.index');

    Route::get('/roles', [RoleController::class , 'index'])->name('admin.roles.index');
    Route::get('/roles/create', [RoleController::class, 'create'])->name('admin.roles.create');
    Route::post('/roles', [RoleController::class , 'store'])->name('admin.roles.store');
    Route::get('/roles/{role}/edit', [RoleController::class, 'edit'])->name('admin.roles.edit');
    Route::delete('/roles/{role}', [RoleController::class, 'destroy'])->name('admin.roles.destroy');
    Route::put('/roles/{role}', [RoleController::class, 'update'])->name('admin.roles.update');

    Route::get('/products', [ProductController::class, 'index'])->name('admin.products.index');
    Route::get('/products/create', [ProductController::class, 'create'])->name('admin.products.create');
    Route::post('/products', [ProductController::class, 'store'])->name('admin.products.store');
    Route::get('admin/products/{product}/edit', [ProductController::class, 'edit'])->name('admin.products.edit');
    Route::put('admin/products/{product}', [ProductController::class, 'update'])->name('admin.products.update');
    Route::delete('admin/products/{id}', [ProductController::class, 'destroy'])->name('admin.products.destroy');

    Route::get('/orders', [OrderController::class, 'index'])->name('admin.orders.index');
    Route::get('/orders/create', [OrderController::class, 'create'])->name('admin.orders.create');
    Route::post('/orders', [OrderController::class, 'store'])->name('admin.orders.store');

    Route::get('/categories', [CategoryController::class, 'index'])->name('admin.categories.index');
    Route::get('/categories/create', [CategoryController::class, 'create'])->name('admin.categories.create');
    Route::post('/categories', [CategoryController::class, 'store'])->name('admin.categories.store');
    Route::get('/categories/{categories}/edit', [CategoryController::class, 'edit'])->name('admin.categories.edit');
    Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('admin.categories.update');
    Route::delete('/categories/{categories}', [CategoryController::class, 'destroy'])->name('admin.categories.destroy');

    Route::prefix('orders')->name('admin.orders.')->group(function () {
        Route::get('/', [OrderController::class, 'index'])->name('index');
        Route::get('create', [OrderController::class, 'create'])->name('create');
        Route::post('/', [OrderController::class, 'store'])->name('store');
        Route::get('{order}/edit', [OrderController::class, 'edit'])->name('edit');
        Route::put('{id}', [OrderController::class, 'update'])->name('update');
        Route::delete('{order}', [OrderController::class, 'destroy'])->name('destroy');
    });
});
Route::prefix('home')->group(function () {
    Route::get('/', [IndexProductController::class, 'index'])->name('main.home.index');
    Route::get('/{product}', [ShowProductController::class, 'show'])->name('main.home.show')
        ->where('product', '[0-9]+');
//    Route::post('/{product}/comment', [CommentController::class, 'store'])->name('comment.store');
//    Route::get('/{product}/comment', [CommentController::class, 'show'])->name('comment.show');
});

// Включение маршрутов для аутентификации
require __DIR__ . '/auth.php';
