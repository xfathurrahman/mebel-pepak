<?php

use App\Http\Controllers\CarouselController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DetailProductController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductDetailController;
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

Route::get('detail/{slugusername}/{id}/{slug}', [DetailProductController::class,'index']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('category', CategoryController::class);
Route::delete('/selected-category', [CategoryController::class, 'deleteSelectedItem'])->name('category.deleteSelectedCategory');
Route::delete('/category/{id}', [CategoryController::class, 'destroy']);

Route::resource('carousel', CarouselController::class);
Route::delete('/selected-carousel', [CarouselController::class, 'deleteSelectedItem'])->name('carousel.deleteSelectedCarousel');
Route::delete('/carousel/{id}', [CarouselController::class, 'destroy']);

Route::group(['middleware' => ['auth']], function() {
    Route::resource('products', ProductController::class);
    Route::delete('/selected-products', [ProductController::class, 'deleteSelectedItem'])->name('products.deleteSelected');
    Route::delete('/products/{id}', [ProductController::class, 'destroy']);
});

/*Route::post('user/profile/upload', [ HeaderProfileController::class, 'upload'])->name('profile.crop');*/
