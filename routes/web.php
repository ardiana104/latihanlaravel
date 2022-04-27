<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PulsauserController;
use App\Http\Controllers\DashboardHomeController;
use App\Http\Controllers\PanenController;

use App\Models\User;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


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
    return view('Toko',[
        "title" => "Toko"
    ]);
});

Route::get('/profil', function () {
    return view('Profil',[
        "title" => "profil"
    ]);
});

Route::get('/hometoko', function () {
    return view('hometoko',[
        "title" => "home"
    ]);
});

Route::get('/beli', function () {
    return view('beli',[
        "title" => "beli"
    ]);
});

Route::get('/PulsaNominal', function () {
    return view('nominal',[
        "title" => "nominal"
    ]);
});

Route::get('/kategori', function () {
    return view('kategori',[
        "title" => "kategori"
    ]);
});

Route::get('/provider', function () {
    return view('provider',[
        "title" => "provider"
    ]);
});

Route::get('/PulsaUser', function () {
    return view('PulsaUser',[
        "title" => "PulsaUser"
    ]);
});

Route::get('/calender', function () {
    return view('calender',[
        "title" => "calenders"
    ]);
});

Route::get('/tambah', function () {
    return view('tambah',[
        "title" => "tambah"
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/pembeli', [PembeliController::class, 'index']);

Route::get('/nominal', [NominalController::class, 'index']);

Route::get('/pembeli', [ProviderController::class, 'index']);

Route::get('/customers', [CustomerController::class, 'index']);

Route::get('/calenders', [CalendersController::class, 'index']);

Route::get('/pulsauser', [PulsauserController::class, 'index']);
Route::get('/pulsauser/create', [PulsauserController::class, 'create']);
Route::POST('/pulsauser/store', [PulsauserController::class, 'store']);
Route::get('/pulsauser/{id}/edit', [PulsauserController::class, 'edit']);
Route::put('/pulsauser/{id}', [PulsauserController::class, 'update']);
Route::delete('/pulsauser/{id}', [PulsauserController::class, 'destroy']);

Route::get('/dashboard',[DashboardController::class,'index'])->middleware('auth');

Route::get('/panen',[PanenController::class,'index']);
Route::get('/panen/create',[PanenController::class,'create']);
Route::post('/panen/store',[PanenController::class,'store']);
Route::get('/panen/{id}/edit',[PanenController::class,'edit']);
Route::put('/panen/{id}',[PanenController::class,'update']);
Route::delete('/panen/{id}',[PanenController::class,'destroy']);