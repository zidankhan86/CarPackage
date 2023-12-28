<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\frontend\HomeController as FrontendHomeController;


// SSLCOMMERZ Start

Route::post('/pay/{id}', [SslCommerzPaymentController::class, 'index'])->name('pay');
Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END
//Frontend

Route::get('/add-driver',[DriverController::class,'addDriver'])->name('add.driver');
Route::post('/add-driver',[DriverController::class,'DriverStore'])->name('driver.store');
Route::get('/driver-registration',[AuthController::class,'DriverRegistration'])->name('registration.driver');
 Route::post('/registration/stores',[AuthController::class,'regStores'])->name('reg.stores');
//Pages
Route::get('/',[FrontendHomeController::class,'index'])->name('home');
Route::get('/product/page',[FrontendHomeController::class,'product'])->name('product.page');
Route::get('/product/details/{id}',[FrontendHomeController::class,'productDetails'])->name('product.details');
Route::get('/about',[AboutController::class,'index'])->name('about');
Route::get('/contact',[ContactController::class,'index'])->name('contact');
Route::get('/category',[CategoryController::class,'index'])->name('category');

Route::get('/categoryWise/{id}',[CategoryController::class,'CatWise'])->name('category.wise');


//Auth
Route::get('/login',[AuthController::class,'index'])->name('login');
Route::post('/store',[AuthController::class,'store'])->name('store');

//Register
Route::get('/registration',[RegistrationController::class,'index'])->name('registration');
Route::post('/registration/store',[RegistrationController::class,'store'])->name('registration.store');

//Backend

//Middleware
Route::group(['middleware'=>'auth'],function(){
    Route::get('/user-profile',[ProfileController::class,'userProfile'])->name('user.profile');
    Route::get('/booking/{id}',[BookController::class,'index'])->name('booking');
    Route::post('/booking-store',[BookController::class,'bookingStore'])->name('booking.store');
    Route::get('/logout',[TestController::class,'logout'])->name('logout');
    Route::group(['middleware'=>'admin'],function(){
//Pages
Route::get('/app',[HomeController::class,'index'])->name('app');

//ProductController
Route::get('/product-list', [ProductController::class,'list'])->name('product.list');
Route::get('/product-form', [ProductController::class,'form'])->name('product.form');
Route::post('/product-store', [ProductController::class,'store'])->name('product.store');
Route::get('/product-edit/{productId}', [ProductController::class,'edit'])->name('product.edit');
Route::post('/product-update/{productId}', [ProductController::class,'update'])->name('product.update');
Route::get('/product-delete/{productId}', [ProductController::class,'delete'])->name('product.delete');

Route::get('/form',[TestController::class,'form'])->name('form');
Route::get('/setting',[SettingController::class,'index'])->name('setting');
Route::get('/change-password',[ChangePasswordController::class,'index'])->name('change.password');
Route::post('/update-password/{id}',[ChangePasswordController::class,'update'])->name('update.password');
Route::get('/user-list',[AuthController::class,'list'])->name('user.list');

//CategoryController
Route::get('/category-list',[CategoryController::class,'list'])->name('category.list');
Route::get('/category-form',[CategoryController::class,'form'])->name('category.form');
Route::post('/category-store',[CategoryController::class,'store'])->name('category.store');
Route::get('/category-edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
Route::post('/category-update/{id}',[CategoryController::class,'update'])->name('category.update');
Route::get('/category-delete/{id}',[CategoryController::class,'delete'])->name('category.delete');

Route::get('/report',[ReportController::class,'report'])->name('order.report');
Route::get('/report/search',[ReportController::class,'reportSearch'])->name('order.report.search');



//profile
Route::get('/profile',[ProfileController::class,'index'])->name('profile');
//post
Route::post('/registration/update{id}',[RegistrationController::class,'update'])->name('registration.update');
Route::get('/booking-list-car',[BookController::class,'bookList'])->name('booking.list');

});
});
