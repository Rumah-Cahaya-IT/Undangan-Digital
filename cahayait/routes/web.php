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
use App\Http\Controllers\ManagementAkunController;
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
Route::get('/pelayanan', [HomeController::class, 'pelayanan']);
Route::get('/portofolio', [HomeController::class, 'portofolio']);
Route::get('/produk', [HomeController::class, 'produk']);
Route::get('/proses', [HomeController::class, 'proses']);
Route::get('/team', [HomeController::class, 'team']);
Route::get('/tentang', [HomeController::class, 'tentang']);

Route::controller(PenawaranController::class)->group(function () {
    Route::get('/penawaran-clien', 'penawaran')->name('penawaran');
    Route::post('/penawaran/store', 'store')->name('penawaran.store');
});

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

        Route::controller(PenawaranController::class)->group(function () {
            Route::get('/penawarans', 'index')->name('index');
            Route::get('/detail/{penawaran:id}',  'show')->name('penawaran.show');
            Route::get('/penawaran-edit/{penawaran:id}', 'edit')->name('penawaran_edit.edit');
            Route::put('/penawarans-put/{id}', 'update')->name('penawarans_put.update');
            Route::delete('/penawaran-delete/{penawaran:id}',  'destroy')->name('penawaran_delete.destroy');
        });

        Route::get('/management-akun', [ManagementAkunController::class, 'index'])->name('management-akun.index');
        Route::put('/management-akun/{id}', [ManagementAkunController::class, 'update'])->name('management-akun.update');
        Route::delete('/management-akun/{user}', [ManagementAkunController::class, 'destroy'])->name('management-akun.destroy');

        Route::get('pengaturan-akun', [PengaturanController::class, 'index']);

        Route::get('transaksi', [TransaksiController::class, 'index']);

        Route::get('edit-password', [PasswordController::class, 'edit']);
    });

    Route::group(['middleware' => ['cekUserLogin:2']], function () {
    });
});
