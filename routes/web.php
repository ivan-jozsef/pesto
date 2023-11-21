<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PestosController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [PestosController::class, 'index'])->name('home');
Route::get('/pesto/{id}', [PestosController::class, 'view'])->name('pesto.view');
Route::get('/kereso', [PestosController::class, 'kereso'])->name('pesto.kereso');