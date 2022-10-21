<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CommentController;
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

Route::get('/', [CompanyController::class, 'index'])->name('index');

Auth::routes();
Route::post('/create.company', [CompanyController::class, 'createCompany'])->name('create.company');
Route::post('/create.comment', [CommentController::class, 'createComment'])->name('create.comment');
Route::get('/{company}', [CompanyController::class, 'detail'])->name('detail');