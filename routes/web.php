<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TextController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

//Frontend

Route::get('/', function () {
    return view('frontend.home.index');
})->name('landing');

Route::get('/contact', function () {
    return view('frontend.contact.index');
})->name('contact');

Route::get('/client', function () {
    return view('frontend.client.index');
})->name('client');

Route::get('/product', function () {
    return view('frontend.product.index');
})->name('product');

Route::get('/project', function () {
    return view('frontend.project.index');
})->name('project');

Route::get('/about', function () {
    return view('frontend.about.index');
})->name('about');


//Backend Auth
Auth::routes();

Route::group(['prefix' => 'support', 'middleware' => ['auth']], function () {
    // Dashboard Section
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

    // Profile Section
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update/{id}', [ProfileController::class, 'update'])->name('profile.update');
    Route::put('/profile/password/{id}', [ProfileController::class, 'password'])->name('profile.password');
    Route::delete('/profile/delete/{id}', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Text
    Route::resource('text', TextController::class);
    // Product
    Route::resource('product', ProductController::class);
    // Gallery
    Route::resource('gallery', GalleryController::class);
    // Project
    Route::resource('project', ProjectController::class);
    // Client
    Route::resource('client', ClientController::class);
});
