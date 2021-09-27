<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\CategoriesController;
use \App\Http\Controllers\BrandsController;
use \App\Http\Controllers\SizesController;



Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function (){
    //Category
    Route::resource('categories',CategoriesController::class);
    //Brand
    Route::resource('brands',BrandsController::class);
    //Brand
    Route::resource('sizes',SizesController::class);

});




