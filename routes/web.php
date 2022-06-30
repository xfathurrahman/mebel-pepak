<?php

use App\Http\Controllers\CarouselController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DetailProductController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('/', HomepageController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');})->name('dashboard');

Route::group(['middleware' => ['auth']], function() {
//    Edit Produk
    Route::resource('products', ProductController::class);
    Route::delete('/selected-products', [ProductController::class, 'deleteSelectedItem'])->name('products.deleteSelectedProduct');
    Route::delete('/products/{id}', [ProductController::class, 'destroy']);
    Route::post('products/media', [ProductController::class,'storeMedia'])
        ->name('products.storeMedia');
//    Edit Kategori
    Route::resource('category', CategoryController::class);
    Route::delete('/selected-category', [CategoryController::class, 'deleteSelectedItem'])->name('category.deleteSelectedCategory');
    Route::delete('/category/{id}', [CategoryController::class, 'destroy']);
//    Edit Carousel
    Route::resource('carousel', CarouselController::class);
    Route::delete('/selected-carousel', [CarouselController::class, 'deleteSelectedItem'])->name('carousel.deleteSelectedCarousel');
    Route::delete('/carousel/{id}', [CarouselController::class, 'destroy']);
});

Route::get('detail/{slugusername}/{id}/{slug}', [DetailProductController::class,'index']);

Route::post('/dropzone', [ProductController::class,'dropzone'])->name('dropzone');

/*Route::post('user/profile/upload', [ HeaderProfileController::class, 'upload'])->name('profile.crop');*/
