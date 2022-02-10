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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/inv', function () {
    return view('valmaster/accounts/invoice');
})->middleware(['auth'])->name('invoice');

Route::get('/test', function () {
    return view('valmaster/super-admin/index');
})->middleware(['auth'])->name('index');

Route::get('/table', function () {
    return view('components/content');
});

Route::get('/new', function () {
    return view('valmaster/front-desk/create-record');
});


require __DIR__.'/auth.php';
