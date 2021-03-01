<?php

use Illuminate\Support\Facades\Route;

/*---------------- PAGES -------------------*/
Route::get('/', function () {
  return view('pages/home');
})->name('home');

Route::get('/aboutUs', function () {
  return view('pages/aboutUs');
})->name('aboutUs');

Route::get('/contactUs', function () {
  return view('pages/contactUs');
})->name('contactUs');

Route::get('/faqs', function () {
  return view('pages/faqs');
})->name('faqs');

Route::get('/terms', function () {
  return view('pages/terms');
})->name('terms');

Route::get('/laptops', function () {
  return view('pages/laptops');
})->name('laptops');

Route::get('/computers', function () {
  return view('pages/computers');
})->name('computers');

Route::get('/monitors', function () {
  return view('pages/monitors');
})->name('monitors');

Route::get('/storage', function () {
  return view('pages/storage');
})->name('storage');

Route::get('/printers', function () {
  return view('pages/printers');
})->name('printers');

Route::get('dashboard', function() {
  return view('pages/dashboard');
})->name('dashboard')->middleware(['auth']);

Route::get('profile', function() {
  return view('pages/profile');
})->name('profile')->middleware(['auth']);

Route::get('orders', function() {
  return view('pages/orders');
})->name('orders')->middleware(['auth']);


/*---------------- AUTH -------------------*/
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('register', [RegisterController::class, 'store']);
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'store']);
Route::post('logout', [LogoutController::class, 'store'])->name('logout');

/*-------------- BACK-END -----------------*/
use App\Http\Controllers\ProductController;
Route::prefix('dashboard.')->group(function() {
  Route::resource('products', ProductController::class)
  ->name('*', 'products')->middleware('auth');
});

use App\Http\Controllers\SaleController;
Route::prefix('dashboard.')->group(function() {
  Route::resource('sales', SaleController::class)
  ->name('*', 'sales')->middleware('auth');
});

use App\Http\Controllers\ContactController;
Route::prefix('dashboard.')->group(function() {
  Route::resource('contacts', ContactController::class)
  ->name('*', 'contacts')->middleware('auth');
});

use App\Http\Controllers\TaskController;
Route::prefix('dashboard.')->group(function() {
  Route::resource('tasks', TaskController::class)
  ->name('*', 'tasks')->middleware('auth');
});

use App\Http\Controllers\UserController;
Route::prefix('dashboard.')->group(function() {
  Route::resource('users', UserController::class)
  ->name('*', 'users')->middleware('auth');
});

/*------------- FRONT-END -----------------*/

Route::resource('products', ProductController::class)->only([ 'index', 'show' ])->name('*', 'products');
Route::resource('contacts', ContactController::class)->only([ 'create' ])->name('*', 'contacts')->middleware('auth');