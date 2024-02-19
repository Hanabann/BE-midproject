<?php

use App\Http\Controllers\karyawanController;
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

Route::get('/', [karyawanController::class, 'main'])->name('karyawan.main');
Route::get('/view', [karyawanController::class, 'view'])->name('karyawan.view');
Route::get('/add', [karyawanController::class, 'add'])->name('karyawan.add');
Route::post('/', [karyawanController::class, 'store'])->name('karyawan.store');
Route::get('/change', [karyawanController::class, 'change'])->name('karyawan.change');

Route::get('/{karyawan}/edit', [karyawanController::class, 'edit'])->name('karyawan.edit');
Route::put('/{karyawan}/update', [karyawanController::class, 'update'])->name('karyawan.update');
Route::delete('/{karyawan}/delete', [karyawanController::class, 'delete'])->name('karyawan.delete');