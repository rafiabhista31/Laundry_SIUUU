<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\PaketController;
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
Route::get('/home', function () {
    return view('home');
});

Route::get('/master', function () {
    return view('master');
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

//transaksi
Route::resource('transaksi',TransaksiController::class)->middleware('auth','role:admin');

//transaksi
Route::resource('detailtransaksi', DetailTransaksiController::class)->middleware('auth','role:admin');
