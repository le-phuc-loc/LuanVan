<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagerController;

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
Route::get('/', [ManagerController::class, 'course']);
Route::get('/schedule/{id}', [ManagerController::class, 'schedule'])->name('schedule');
Route::get('/list/{id}', [ManagerController::class, 'list_student'])->name('list');
