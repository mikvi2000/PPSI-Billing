<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\transaction_detail;
use App\Http\Controllers\DiscountComplementController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\PoinEarnedController;
use App\Http\Controllers\ReservationController;

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
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'HalamanLogin']);

Route::get('/home', [TransactionController::class, 'Halamandashboard']);

Route::get('/history', [TransactionController::class, 'HalamanHistory']);

Route::get('/deposite', [ReservationController::class, 'HalamanDeposite']);

Route::get('/deposite/edit', [ReservationController::class, 'HalamanEditDeposite']);

Route::get('/tagihan', [TransactionController::class, 'HalamanTagihan']);

Route::get('/tagihan/edit/{transation_id}', [TransactionController::class, 'HalamanEditTagihan']);

Route::get('/tagihan/detail', [transaction_detail::class, 'HalamanDetail']);

Route::get('/discountcomplement', [DiscountComplementController::class, 'HalamanDiscountComp']);

Route::get('/poinearned', [PoinEarnedController::class, 'HalamanPoinEarned']);

Route::get('/readdiscountcomplement', [DiscountComplementController::class, 'readDiscountComplement']);

Route::get('/readtransaction', [TransactionController::class, 'readTransaction']);

Route::get('/readPoinearned', [PoinEarnedController::class, 'readPoinearned']);

//HalamanHistory
