<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\AboutController;
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
//Route for sService
Route::get('/index',[ServiceController::class,'index'])->name('services.index');
Route::get('/create',[ServiceController::class,'create'])->name('services.create');
Route::post('/store',[ServiceController::class,'store'])->name('services.store');
Route::get('show/{service}',[ServiceController::class,'show'])->name('services.show');
Route::get('edit/{service}',[ServiceController::class,'edit'])->name('services.edit');
Route::put('edit/{service}',[ServiceController::class,'update'])->name('services.update');
Route::delete('/{service}',[ServiceController::class,'destroy'])->name('services.destroy');



//Route for Frontend
Route::get('/',[FrontendController::class,'index']);
Route::get('/road_freight',[FrontendController::class,'road_freight'])->name('road_freight');
//Route for login
Route::get('dashboard', [CustomAuthController::class, 'delivery'])->name('delivery');
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('postlogin', [CustomAuthController::class, 'login'])->name('postlogin');
Route::get('signup', [CustomAuthController::class, 'signup'])->name('register-user');
Route::post('postsignup', [CustomAuthController::class, 'signupsave'])->name('postsignup');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');


//Route for Company
Route::get('/company',[CompanyController::class,'index'])->name('companys.index');
Route::get('/create-company',[CompanyController::class,'create'])->name('companys.create');
Route::post('/store-company',[CompanyController::class,'store'])->name('companys.store');
Route::get('shows/{company}',[CompanyController::class,'show'])->name('companys.show');
Route::get('edits/{company}',[CompanyController::class,'edit'])->name('companys.edit');
Route::put('edits/{company}',[CompanyController::class,'update'])->name('companys.update');
Route::delete('/company/{company}',[CompanyController::class,'destroy'])->name('companys.delete');


//Route for Slide
Route::get('/slide', [SlideController::class,'index'])->name('slides.index');
Route::get('/create-slide', [SlideController::class,'create'])->name('slides.create');
Route::post('store-slide/', [SLideController::class,'store'])->name('slides.store');
Route::get('show-slide/{slide}', [SlideController::class,'show'])->name('slides.show');
Route::get('edit-slide/{slide}', [SlideController::class,'edit'])->name('slides.edit');
Route::put('edit-slide/{slide}', [SlideController::class,'update'])->name('slides.update');
Route::delete('/slide-delete/{slide}',[SlideController::class,'destroy'])->name('slides.destroy');


//Route for Product
Route::get('/product', [ProductController::class,'index'])->name('products.index');
Route::get('/create-product', [ProductController::class,'create'])->name('products.create');
Route::post('store-product/', [ProductController::class,'store'])->name('products.store');
Route::get('show-product/{product}', [ProductController::class,'show'])->name('products.show');
Route::get('edit-product/{product}', [ProductController::class,'edit'])->name('products.edit');
Route::put('edit-delete/{product}',[ProductController::class,'update'])->name('products.update');
Route::delete('delete/{product}',[ProductController::class,'destroy'])->name('products.destroy');



//Route for blog
Route::get('/blog', [BlogController::class,'index'])->name('blogs.index');
Route::get('/create-blog', [BlogController::class,'create'])->name('blogs.create');
Route::post('store-blog/', [BlogController::class,'store'])->name('blogs.store');
Route::get('show-blog/{blog}',[BlogController::class,'show'])->name('blogs.show');
Route::get('edit-blog/{blog}', [BlogController::class,'edit'])->name('blogs.edit');
Route::put('edit-blog/{blog}',[BlogController::class,'update'])->name('blogs.update');
Route::delete('deleted/{blog}',[BlogController::class,'destroy'])->name('blogs.destroy');



//Route for Gallery
Route::get('/gallery', [GalleryController::class,'index'])->name('gallerys.index');
Route::get('/gallery-create',[GalleryController::class,'create'])->name('gallerys.create');
Route::post('store-delivery/', [GalleryController::class,'store'])->name('gallerys.store');
Route::get('show-gallery/{gallery}', [GalleryController::class,'show'])->name('gallerys.show');
Route::get('edit-gallery/{gallery}', [GalleryController::class,'edit'])->name('gallerys.edit');
Route::put('edit-gallery/{gallery}',[GalleryController::class,'update'])->name('gallerys.update');
Route::delete('gallery-delete/{gallery}',[GalleryController::class,'destroy'])->name('gallerys.destroy');


//Route for about
Route::get('/about', [AboutController::class,'index'])->name('abouts.index');
Route::get('/create-about', [AboutController::class,'create'])->name('abouts.create');
Route::post('store-about/', [AboutController::class,'store'])->name('abouts.store');
Route::get('show-about/{about}', [AboutController::class,'show'])->name('abouts.show');
Route::get('edit-about/{about}', [AboutController::class,'edit'])->name('abouts.edit');
Route::put('edit-about/{about}',[AboutController::class,'update'])->name('abouts.update');
Route::delete('delete-about/{about}',[AboutController::class,'destroy'])->name('abouts.destroy');
