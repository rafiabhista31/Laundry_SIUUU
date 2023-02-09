<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\OutletController;


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


// //home
// Route::group(['middleware' => ['auth']], function() {
//     Route::get('/home', [HomeController::class, 'index'])->name('home');
// });

//dashboard
Route::get('/dashboard/admin',[DashboardController::class,'admin'])->name('dashboard.admin')
->middleware('auth', 'level:admin');
Route::get('/dashboard/kasir',[DashboardController::class,'kasir'])
->name('dashboard.kasir')->middleware('auth', 'level:kasir');
Route::get('/dashboard/owner',[DashboardController::class,'owner'])->name('dashboard.owner')
->middleware('auth');

Route::view('403','error.403')->name('error.403');

route::resource('outlet', OutletController::class);
