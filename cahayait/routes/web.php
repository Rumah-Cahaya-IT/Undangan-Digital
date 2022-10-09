<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenawaranController;
use App\Http\Controllers\PengaturanController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/faq', [HomeController::class, 'faq']);
Route::get('/penawaran', [HomeController::class, 'penawaran']);
Route::get('/pelayanan', [HomeController::class, 'pelayanan']);
Route::get('/portofolio', [HomeController::class, 'portofolio']);
Route::get('/produk', [HomeController::class, 'produk']);
Route::get('/proses', [HomeController::class, 'proses']);
Route::get('/team', [HomeController::class, 'team']);
Route::get('/tentang', [HomeController::class, 'tentang']);


Route::controller(RegisterController::class)->group(function () {
    Route::get('register', 'index')->name('register');
});

Route::controller(LoginController::class)->group(function () {
    Route::get('login', 'index')->name('login');
    Route::post('login/proses', 'proses');
    Route::get('logout', 'logout');
});

Route::controller(PasswordController::class)->group(function () {
    Route::get('change-password', 'index')->name('change_password');
});

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cekUserLogin:1']], function () {

        Route::resource('dashboard', DashboardController::class);

        Route::get('penawaran-clien', [PenawaranController::class, 'index']);

        Route::get('pengaturan-akun', [PengaturanController::class, 'index']);

        Route::get('transaksi', [TransaksiController::class, 'index']);

        Route::get('edit-password', [PasswordController::class, 'edit']);
    });

    Route::group(['middleware' => ['cekUserLogin:2']], function () {
    });
});
