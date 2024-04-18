<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

*/

Route::get('/', [\App\Http\Controllers\WelcomeController::class, 'welcome'])->name('welcome');
Route::get('/import', [\App\Http\Controllers\WelcomeController::class, 'importCSV']);
Route::get('/invite/{name}', [\App\Http\Controllers\WelcomeController::class, 'invite'])->name('invite');
Route::post('/invite/{name}', [\App\Http\Controllers\WelcomeController::class, 'invite'])->name('invite');
Route::get('/thanks/{vocative}', [\App\Http\Controllers\WelcomeController::class, 'thanks'])->name('thanks');
Route::post('/', [\App\Http\Controllers\WelcomeController::class, 'welcome']);
