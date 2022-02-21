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


Route::group(['middleware' => 'auth'], function(){
/*
|--------------------------------------------------------------------------
| Front Desk Routes
|--------------------------------------------------------------------------
*/

Route::get('table','App\Http\Controllers\ClientController@index')->name('table');
Route::get('new-record','App\Http\Controllers\ClientController@create')->name('new-record');



/*
|--------------------------------------------------------------------------
| Accounts Routes
|--------------------------------------------------------------------------
*/



/*
|--------------------------------------------------------------------------
| agents Routes
|--------------------------------------------------------------------------
*/


/*
|--------------------------------------------------------------------------
| Super Admin Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/inv', function () {
    return view('valmaster/accounts/invoice');
})->name('invoice');

Route::get('/test', function () {
    return view('valmaster/admin/index');
})->name('index');


//-----------------------------------------------------------------------


//Front Desk View
Route::get('/new', function () {
    return view('valmaster/front-desk/create-record');
})->name('new');


});
require __DIR__.'/auth.php';


