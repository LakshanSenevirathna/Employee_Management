<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

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

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->name('admin.')->controller(CompanyController::class)->group(function () {
    Route::get('/company/all', 'index');
    Route::get('/company/create', 'create');
    Route::post('/company/store', 'store');
    Route::get('/company/edit/{id}', 'edit');
    Route::put('/company/update', 'update');
    Route::get('/company/show/{id}', 'show');
    Route::delete('/company/destroy/{id}', 'destroy');
});
