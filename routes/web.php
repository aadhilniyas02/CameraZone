<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

route::get('/products', [App\Http\Controllers\HomeController::class, 'indexnew'])->name('products');

Route::middleware(App\Http\Middleware\AdminRoleMiddleware::class)->group(function(){
    
    Route::get('product/create', [App\Http\Controllers\ProductController::class, 'create']);

    Route::post('product/save', [App\Http\Controllers\ProductController::class, 'save']);

    Route::get('product/edit/{item}', [App\Http\Controllers\ProductController::class, 'edit']);
    Route::post('product/update/{item}', [App\Http\Controllers\ProductController::class, 'update']);

    Route::post('product/delete', [App\Http\Controllers\ProductController::class, 'delete']);

    Route::get('product/index', [App\Http\Controllers\ProductController::class, 'index']);

});