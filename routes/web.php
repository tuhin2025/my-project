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
|
*/
//
//Route::get('/', function () {
//    return view('welcome');
//});


use App\Http\Controllers\MyPortfolioController;

//Route::group(['prefix' => 'my-portfolio', 'as' => 'my-portfolio.'], function () {
//
//    Route::get('/home', [MyPortfolioController::class, 'index'])->name('index');
//    Route::get('/my-portfolio/contact',[MyPortfolioController::class, 'contact'])->name('contact');
//    Route::get('/my-portfolio/skill',[MyPortfolioController::class, 'skill'])->name('skill');
//
//});

Route::prefix('my-portfolio')->name('my-portfolio.')->group(function () {
    Route::get('/', [MyPortfolioController::class, 'index'])->name('index');
    Route::get('/home', [MyPortfolioController::class, 'index'])->name('index');
    Route::get('/contact', [MyPortfolioController::class, 'contact'])->name('contact');
    Route::get('/skill', [MyPortfolioController::class, 'skill'])->name('skill');
    Route::get('/contact-list', [MyPortfolioController::class, 'contactList'])->name('contact.list');
});

