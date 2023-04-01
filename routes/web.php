<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\DetailTransaksiController;

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
Route::get('/invoice', function () {
    return view('transaksi.invoice');
});

//login
Route::get('login',[LoginController::class,'view'])->name('login')->middleware('guest');
Route::post('login', [LoginController::class,'proses'])->name('login.proses')->middleware('guest');
Route::get('logout',[LoginController::class,'logout'])->name('logout');

//register
Route::get('register',[RegisterController::class,'view'])->name('register')->middleware('guest');
Route::post('register', [RegisterController::class,'store'])->name('register.store')->middleware('guest');

//Login sesuai role
Route::get('/dashboard/admin',[DashboardController::class,'admin'])->name('dashboard.admin')
->middleware('auth', 'role:admin');
Route::get('/dashboard/kasir',[DashboardController::class,'kasir'])->name('dashboard.kasir')
->middleware('auth', 'role:kasir,admin');
Route::get('/dashboard/owner',[DashboardController::class,'owner'])->name('dashboard.owner')
->middleware('auth','role:owner,admin');

//error
Route::view('403','error.403')->name('error.403');

//outlet
route::resource('outlet', OutletController::class)->middleware('auth', 'role:admin');

//paket
route::resource('paket', PaketController::class)->middleware('auth','role:admin');

//member
Route::resource('member', MemberController::class)->middleware('auth','role:admin,kasir');

//user
Route::resource('user',UserController::class)->middleware('auth','role:admin');

Route::middleware(['auth', 'role:kasir,admin,owner'])->group(function(){
    Route::get('transaksi/', [DetailTransaksiController::class, 'index'])->name('transaksi.index');
    Route::post('transaksi/baru', [TransaksiController::class, 'create'])->name('transaksi.baru');
    Route::get('transaksi/{transaksi}', [TransaksiController::class, 'edit'])->name('transaksi.proses');
    Route::post('transaksi/simpan', [TransaksiController::class, 'store'])->name('transaksi.store');
    Route::post('transaksi/{transaksi}/detail', [DetailTransaksiController::class, 'store'])
    ->name('transaksi.detail.store');
    Route::patch('transaksi/{transaksi}/update-status',[DetailTransaksiController::class,'updateStatus'])
    ->name('transaksi.updateStatus');
    Route::get('transaksi/{transaksi}/invoice', [DetailTransaksiController::class, 'invoice'])
    ->name('transaksi.invoice');
    Route::put('/update-status/{transaksi}', [DetailTransaksiController::class,'updateStatus'])->name('updateStatus');
    Route::put('transaksi/updateStatus/{transaksi}', [TransaksiController::class,'updateStatus'])->name('updateStatus');
});