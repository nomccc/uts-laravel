<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BajuController;
use App\Http\Controllers\ModelBajuController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/tambahBaju', function () {
    return view('tambahBaju');
});
Route::get('/modelBaju', function () {
    return view('modelBaju');
});

// Route::get('/', [AdminController::class, 'create']);
// Route::post('/', [AdminController::class, 'store']) -> name('register');

Route::get('/', [AdminController::class, 'login'])  -> name('login');
Route::post('/', [AdminController::class, 'authenticate']) -> name('auth');

Route::get('/dashboard', [BajuController::class, 'index']);
Route::get('/hapusBaju/{id}', [BajuController::class, 'hapusBaju']);

Route::get('/modelBaju', [ModelBajuController::class, 'index']);
Route::post('/modelBaju', [ModelBajuController::class, 'store']);
Route::get('/hapusModel/{id}', [ModelBajuController::class, 'destroy']);

Route::get('/tambahBaju', [BajuController::class, 'model']);
Route::post('/tambahBaju', [BajuController::class, 'store']);

Route::get('/logout', function () {
    auth()->logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect('/');
})->name('logout');
