<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\User\InputController;
use App\Http\Controllers\HomeController;

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
})->name('welcome');

Route::get('input/success', [InputController::class, 'success'])->name('input.success');
Route::get('input', [InputController::class, 'create'])->name('input.create');
Route::get('input/edit/{id}', [InputController::class, 'edit'])->name('input.edit');
Route::put('input/update/{id}', [InputController::class, 'update'])->name('input.update');
Route::post('input', [InputController::class, 'store'])->name('input.store');
Route::delete('input/delete/{id}',[InputController::class, 'delete'])->name('input.delete');

//socialite route
Route::get('sign-in-google', [UserController::class, 'google'])->name('user.login.google');
Route::get('auth/google/callback', [UserController::class, 'handleProviderCallback'])->name('user.google.callback');

//dashboard
Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

Route::get('pdf', [HomeController::class, 'pdf'])->name('pdf');
Route::get('excel',[HomeController::class, 'excel'])->name('excel');
Route::get('grafik',[HomeController::class, 'grafik'])->name('grafik');

//Route::get('/dashboard', function () {
//  return view('dashboard');
//})->middleware(['auth'])->name('dashboard');


require __DIR__ . '/auth.php';
