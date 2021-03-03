<?php

use App\Http\Controllers\LogController;
use App\Http\Controllers\TreeController;
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

Route::get('/trees',[TreeController::class,'index'])->name('trees');
Route::get('/trees/{tree}',[TreeController::class,'show'])->name('trees.show');
Route::post('/logs',[LogController::class, 'store'])->name('logs.store');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
