<?php

declare(strict_types=1);

use App\Http\Controllers\Category\ShowProductCategoryController;
use App\Http\Controllers\IndexProductController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ShowProductController;
use App\Modules\AdminPanel\Controllers\CategoryController;
use App\Modules\AdminPanel\Controllers\OrderController;
use App\Modules\AdminPanel\Controllers\ProductController;
use App\Modules\AdminPanel\Controllers\RoleController;
use App\Modules\AdminPanel\Controllers\UserController;
use App\Modules\Web\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::prefix('/')->group(function () {
    Route::get('', [IndexProductController::class, 'index'])->name('main.home.index');
    Route::get('{product}', [ShowProductController::class, 'show'])
        ->name('main.home.show')
        ->where('product', '[0-9]+');
    Route::get('/category/{category}/{subCategory?}', [ShowProductCategoryController::class, 'show'])
        ->name('main.home.categories.show')
        ->where(['category' => '[0-9]+']);
    Route::get('search', [SearchController::class, 'search'])->name('main.home.search');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// Маршруты для профиля пользователя
Route::middleware('auth')->as('profile.')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('destroy');
});

Route::prefix('admin')->middleware('auth')->group(function () {

    Route::get('/users', [UserController::class, 'index'])->name('admin.users.index');

    Route::prefix('roles')->group(function () {
        Route::get('/', [RoleController::class, 'index'])->name('admin.roles.index');
        Route::get('/create', [RoleController::class, 'create'])->name('admin.roles.create');
        Route::post('/', [RoleController::class, 'store'])->name('admin.roles.store');
        Route::get('/{role}/edit', [RoleController::class, 'edit'])->name('admin.roles.edit');
        Route::put('/{role}', [RoleController::class, 'update'])->name('admin.roles.update');
        Route::delete('/{role}', [RoleController::class, 'destroy'])->name('admin.roles.destroy');
    });

    Route::prefix('products')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('admin.products.index');
        Route::get('/create', [ProductController::class, 'create'])->name('admin.products.create');
        Route::post('/', [ProductController::class, 'store'])->name('admin.products.store');
        Route::get('/{product}/edit', [ProductController::class, 'edit'])->name('admin.products.edit');
        Route::put('/{product}', [ProductController::class, 'update'])->name('admin.products.update');
        Route::delete('/{id}', [ProductController::class, 'destroy'])->name('admin.products.destroy');
    });

    Route::prefix('categories')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('admin.categories.index');
        Route::get('/create', [CategoryController::class, 'create'])->name('admin.categories.create');
        Route::get('/sub-create', [CategoryController::class, 'create'])->name('admin.categories.subCreate');
        Route::post('/', [CategoryController::class, 'store'])->name('admin.categories.store');
        Route::get('/{category}/edit', [CategoryController::class, 'edit'])->name('admin.categories.edit');
        Route::put('/{category}', [CategoryController::class, 'update'])->name('admin.categories.update');
        Route::delete('/{category}', [CategoryController::class, 'destroy'])->name('admin.categories.destroy');
    });

    Route::prefix('orders')->group(function () {
        Route::get('/', [OrderController::class, 'index'])->name('admin.orders.index');
        Route::get('/create', [OrderController::class, 'create'])->name('admin.orders.create');
        Route::post('/', [OrderController::class, 'store'])->name('admin.orders.store');
        Route::get('/{order}/edit', [OrderController::class, 'edit'])->name('admin.orders.edit');
        Route::put('/{order}', [OrderController::class, 'update'])->name('admin.orders.update');
        Route::delete('/{order}', [OrderController::class, 'destroy'])->name('admin.orders.destroy');
    });

});
// api yes?
//Route::prefix('')->group(function () {
//    Route::get('/{product}', [ShowProductController::class, 'show'])
//        ->name('main.home.show')
//        ->where('product', '[0-9]+');
//    Route::get('/category/{category}/{subCategory?}', [ShowProductCategoryController::class, 'show'])
//        ->name('main.home.categories.show')
//        ->where(['category' => '[0-9]+']);
//});

// Включение маршрутов для аутентификации
require __DIR__ . '/auth.php';
