<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ImageController;
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
Route::get('/', [FrontendController::class, 'landing'])->name('landing');


//Project
Route::get('/project/gallery', [FrontendController::class, 'project_gallery'])->name('gallery');
Route::get('/project/references', [FrontendController::class, 'project_references'])->name('project');

//Company
Route::get('/company/about', [FrontendController::class, 'about'])->name('about');
Route::get('/company/product', [FrontendController::class, 'product'])->name('product');
// Route::get('/company/product/detail/{id}', [FrontendController::class, 'product_detail'])->name('product.detail');
Route::get('/company/product/partnership-workshop', [FrontendController::class, 'workshop'])->name('product.workshop');
Route::get('/company/product/partnership-contractor', [FrontendController::class, 'contractor'])->name('product.contractor');
Route::get('/company/product/partnership-law-consultant', [FrontendController::class, 'law'])->name('product.law');
Route::get('/company/product/partnership-technology', [FrontendController::class, 'technology'])->name('product.technology');
Route::get('/company/product/partnership-information-system-&-website', [FrontendController::class, 'informasi'])->name('product.informasi');
Route::get('/company/product/partnership-event-organizer-&-mice', [FrontendController::class, 'eo'])->name('product.eo');
Route::get('/company/product/partnership-building-maintanance-&-cleaning', [FrontendController::class, 'building'])->name('product.building');

//Contact
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');

//Client
Route::get('/client', [FrontendController::class, 'client'])->name('client');

//K9 Vision
Route::get('/K9-Vision', [FrontendController::class, 'k9_vision'])->name('k9_vision');
//RFID
Route::get('/rfid', [FrontendController::class, 'rfid'])->name('rfid');



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
    Route::resource('image', ImageController::class);
    // Project
    Route::resource('project', ProjectController::class);
    Route::post('/project/import', [ProjectController::class, 'import'])->name('project.import');
    // Client
    Route::resource('client', ClientController::class);
});
