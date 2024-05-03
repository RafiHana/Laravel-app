<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\userController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\OrganisasiController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth', 'universitas'])->get('/user',
[UserController::class, 'index']);
Route::middleware(['auth', 'universitas'])->get('/user/create',
[UserController::class, 'create']);
Route::middleware(['auth', 'universitas'])->post('/user/store',
[UserController::class, 'store']);
Route::middleware(['auth', 'universitas'])->get('/user/edit/{id}',
[UserController::class, 'edit']);
Route::middleware(['auth', 'universitas'])->post('/user/update/{id}',
[UserController::class, 'update']);
Route::middleware(['auth', 'universitas'])->post('/user/destroy/{id}',
[UserController::class, 'destroy']);


Route::middleware(['auth', 'universitas'])->get('/fakultas',
[FakultasController::class, 'index']);
Route::middleware(['auth', 'universitas'])->get('/fakultas/create',
[FakultasController::class, 'create']);
Route::middleware(['auth', 'universitas'])->post('/fakultas/store',
[FakultasController::class, 'store']);
Route::middleware(['auth', 'universitas'])->get('/fakultas/edit/{id}',
[FakultasController::class, 'edit']);
Route::middleware(['auth', 'universitas'])->post('/fakultas/update/{id}',
[FakultasController::class, 'update']);
Route::middleware(['auth', 'universitas'])->post('/fakultas/destroy/{id}',
[FakultasController::class, 'destroy']);

Route::middleware(['auth', 'universitas'])->get('/prodi',
[ProdiController::class, 'index']);
Route::middleware(['auth', 'universitas'])->get('/prodi/create',
[ProdiController::class, 'create']);
Route::middleware(['auth', 'universitas'])->post('/prodi/store',
[ProdiController::class, 'store']);
Route::middleware(['auth', 'universitas'])->get('/prodi/edit/{id}',
[ProdiController::class, 'edit']);
Route::middleware(['auth', 'universitas'])->post('/prodi/update/{id}',
[ProdiController::class, 'update']);
Route::middleware(['auth', 'universitas'])->post('/prodi/destroy/{id}',
[ProdiController::class, 'destroy']);

Route::middleware(['auth', 'universitas'])->get('/organisasi',
[OrganisasiController::class, 'index']);
Route::middleware(['auth', 'universitas'])->get('/organisasi/create',
[OrganisasiController::class, 'create']);
Route::middleware(['auth', 'universitas'])->post('/organisasi/store',
[OrganisasiController::class, 'store']);
Route::middleware(['auth', 'universitas'])->get('/organisasi/edit/{id}',
[OrganisasiController::class, 'edit']);
Route::middleware(['auth', 'universitas'])->post('/organisasi/update/{id}',
[OrganisasiController::class, 'update']);
Route::middleware(['auth', 'universitas'])->post('/organisasi/destroy/{id}',
[OrganisasiController::class, 'destroy']);
