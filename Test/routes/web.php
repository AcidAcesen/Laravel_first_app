<?php

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
    return view('welcome');
});

//
use App\Http\Controllers\WelcomeController;

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::get('/dashboard', [WelcomeController::class, 'dashboard'])->name('dashboard');

//C
Route::post('/person', [WelcomeController::class, 'store'])->name('person.store');
//U
Route::get('/person/{id}/edit', [WelcomeController::class, 'edit'])->name('person.edit');
Route::put('/person/{id}', [WelcomeController::class, 'update'])->name('person.update');
//D
Route::delete('/person/{id}', [WelcomeController::class, 'destroy'])->name('person.destroy');

