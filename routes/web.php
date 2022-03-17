<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\AgencyController;
use App\Http\Controllers\ValuationController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\SmsController;
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

        Route::get('/', 'App\Http\Controllers\DashBoardController@index')->name('/');


    /*
    |--------------------------------------------------------------------------
    | Front Desk Routes
    |--------------------------------------------------------------------------
    */

        Route::prefix('valmaster')->middleware('role:frontdesk')->name('valmaster.')->group(function() {
            Route::resource('/front-desk', ClientController::class);
        });


    /*
    |--------------------------------------------------------------------------
    | Accounts Routes
    |--------------------------------------------------------------------------
    */
        Route::prefix('valmaster')->middleware('role:accounts')->name('valmaster.')->group(function() {
            Route::resource('/accounts', AccountController::class);
           /* Route::get('/accounts/invoice', 'App\Http\Controllers\AccountController@invoice')->name('accounts.send.invoice');*/
            Route::get('/save/{id}', [AccountController::class, 'saveInvoice'])->name('accounts.invoice.save-invoice');
            Route::get('/email/{id}', [AccountController::class, 'sendInvoice'])->name('accounts.invoice.mail-invoice');



            Route::resource('/invoice', InvoiceController::class);
            Route::get('/invoice', [AccountController::class, 'invoice'])->name('accounts.send.invoice');
            Route::get('/receipt', [AccountController::class, 'receipt'])->name('accounts.send.receipt');
            Route::get('/sms', [AccountController::class, 'sendSms'])->name('accounts.send.sms');

        });



    /*
    |--------------------------------------------------------------------------
    | agency Routes
    |--------------------------------------------------------------------------
    */
        Route::prefix('valmaster')->middleware('role:agency')->name('valmaster.')->group(function() {
            Route::resource('/agency', AgencyController::class);
        });

    /*
    |--------------------------------------------------------------------------
    | Super Admin Routes
    |--------------------------------------------------------------------------
    */
        Route::prefix('valmaster')->middleware('role:superadmin')->name('valmaster.')->group(function() {
            Route::resource('/super-admin', SuperAdminController::class);

        });
    /*
    |--------------------------------------------------------------------------
    | Admin Routes
    |--------------------------------------------------------------------------
    */
        Route::prefix('valmaster')->middleware('role:admin')->name('valmaster.')->group(function() {
            Route::resource('/admin', AdminController::class);
            Route::get('/invoice', [AccountController::class, 'invoice'])->name('accounts.send.invoice');
            Route::get('/receipt', [AccountController::class, 'receipt'])->name('accounts.send.receipt');
            Route::get('/sms', [AccountController::class, 'sendSms'])->name('accounts.send.sms');

            Route::resource('/invoice', InvoiceController::class);
        });

    /*
    |--------------------------------------------------------------------------
    | Valuation Routes
    |--------------------------------------------------------------------------
    */
        Route::prefix('valmaster')->middleware('role:valuation')->name('valmaster.')->group(function() {
            Route::resource('/valuation', ValuationController::class);
        });




        /*Route::get('/', function () {
            return view('dashboard');
        })->name('dashboard');*/

  Route::get('/inv', function () {
        return view('valmaster/accounts/send/invoice');
    })->name('invoice');

    Route::get('/test', function () {
        return view('valmaster/admin/index');
    })->name('index');


    //-----------------------------------------------------------------------


    //Front Desk View
    Route::get('/new', function () {
        return view('valmaster/accounts/invoice');
    })->name('new');

    Route::get('/pdf', [SmsController::class, 'index'])->name('pdf');
});
require __DIR__.'/auth.php';


