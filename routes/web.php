<?php

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

Route::get('/', function () {
    return view('home');
})->name('home');

use App\Http\Controllers\MenuController;
Route::get('/menu', [MenuController::class, 'showAllItems'])->name('menu');
Route::get('/menu/{id}', [MenuController::class, 'showItem'])->name('menu-item');

use App\Http\Controllers\BasketController;
use \App\Http\Controllers\OrderController;
Route::middleware('auth')->namespace('\App\Http\Controllers')->group(function() {
    Route::get('/logout', 'LoginController@logout')->name('logout');

    Route::get('/basket', [BasketController::class, 'show'])->name('basket');
    Route::get('/basket-add/{id}', [BasketController::class, 'addItem'])->name('basket-add');
    Route::get('/basket-delete/{id}', [BasketController::class, 'deleteItem'])->name('basket-delete');

    Route::post('/basket/order-add', [OrderController::class, 'add'])->name('order-add');
    Route::get('/orders', [OrderController::class, 'show'])->name('orders');
    Route::get('/orders/{id}', [OrderController::class, 'showItem'])->name('order-item');
});


Route::middleware('guest')->namespace('\App\Http\Controllers')->group(function() {
    Route::get('/register', function () {
        return view('register');
    })->name('register');

    Route::post('/register', 'RegisterController@submit')->name('register-form');

    Route::get('/login', function () {
        return view('login');
    })->name('login');

    Route::post('/login', 'LoginController@submit')->name('login-form');
});
