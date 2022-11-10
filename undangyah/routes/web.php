<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MempelaiController;
use App\Http\Controllers\MempelaipriaController;
use App\Http\Controllers\MempelaiwanitaController;
use App\Http\Controllers\InfoacaraController;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\CeritaController;
use App\Http\Controllers\MusikController;
use App\Http\Controllers\MusiksController;
use App\Http\Controllers\MapsController;
use App\Http\Controllers\KadoController;
use App\Http\Controllers\UcapanController;
use App\Http\Controllers\TemaController;
use App\Http\Controllers\TemasController;
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
Route::get('/fitur', [HomeController::class, 'fitur']);
Route::get('/tema', [HomeController::class, 'tema']);
Route::get('/harga', [HomeController::class, 'harga']);

Route::get('/home', [LayoutController::class, 'index'])->middleware('auth');

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

        Route::get('mempelai-pria', [MempelaipriaController::class, 'index']);
        Route::put('/mempelai-pria/{mempelai_pria}', [MempelaipriaController::class, 'update'])->name('mempelai-pria.update');

        Route::get('mempelai-wanita', [MempelaiwanitaController::class, 'index']);
        Route::put('/mempelai-wanita/{mempelai_wanita}', [MempelaiwanitaController::class, 'update'])->name('mempelai-wanita.update');

        Route::get('informasi-acara', [InfoacaraController::class, 'index']);

        Route::get('tamu-undangan', [TamuController::class, 'index']);
        Route::get('tambah-tamu-undangan', [TamuController::class, 'create']);

        Route::get('galeri', [GaleriController::class, 'index']);

        Route::get('cerita-cinta', [CeritaController::class, 'index']);

        Route::get('musik', [MusikController::class, 'index']);

        Route::get('maps', [MapsController::class, 'index']);

        Route::get('kado', [KadoController::class, 'index']);

        Route::get('doa-dan-ucapan', [UcapanController::class, 'index']);

        Route::get('pilih-tema', [TemaController::class, 'index']);

        Route::get('musiks', [MusiksController::class, 'index']);

        Route::get('temas', [TemasController::class, 'index']);

        Route::get('pengaturan-akun', [PengaturanController::class, 'index']);

        Route::get('transaksi', [TransaksiController::class, 'index']);

        Route::get('edit-password', [PasswordController::class, 'edit']);

        Route::get('hitory-transaksi', [TransaksiController::class, 'index']);
    });

    Route::group(['middleware' => ['cekUserLogin:2']], function () {
        Route::resource('mempelai', MempelaiController::class);
    });
});
