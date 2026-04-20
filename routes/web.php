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


Route::prefix('my-portfolio')->name('my-portfolio.')->group(function () {
    Route::get('/', [MyPortfolioController::class, 'index'])->name('index');
//    Route::get('/home', [MyPortfolioController::class, 'index'])->name('index');

    Route::get('/contact', [MyPortfolioController::class, 'contact'])->name('contact');
    Route::post('/contact-store', [MyPortfolioController::class, 'contactStore'])->name('contact.store');
    Route::get('/skill', [MyPortfolioController::class, 'skill'])->name('skill');
    Route::get('/contact-list', [MyPortfolioController::class, 'contactList'])->name('contact.list');
    Route::get('/contact-edit/{id}', [MyPortfolioController::class, 'edit'])->name('contact.edit');
    Route::put('/contact-update/{id}', [MyPortfolioController::class, 'update'])->name('contact.update');

    Route::get('/contact-page', [MyPortfolioController::class, 'index'])->name('contact.page');
    Route::get('/contact-ajax', [MyPortfolioController::class, 'ajaxList'])->name('contact.list.ajax');;

});

