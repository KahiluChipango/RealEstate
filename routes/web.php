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
            Route::get('invoice-email/{id}', [AccountController::class, 'sendInvoice'])->name('accounts.email.invoice');
            Route::get('/send-sms/{id}', [AccountController::class, 'invoiceSms'])->name('accounts.invoice.send-sms');
            Route::get('receipt/{id}', [AccountController::class, 'showReceipt'] )->name('accounts.show-receipt');
            Route::get('/download-receipt/{id}', [AccountController::class, 'saveReceipt'])->name('accounts.download.receipt');
            Route::get('/receipt-email/{id}', [AccountController::class, 'sendReceipt'])->name('accounts.email.receipt');
            Route::get('/download-invoice/{id}', [AccountController::class, 'saveInvoice'])->name('accounts.download.invoice');
            Route::get('/invoice-sms/{id}', [AccountController::class, 'invoiceSms'])->name('accounts.send.invoice.sms');


        });

        /*
           |--------------------------------------------------------------------------
           | Admin Routes
           |--------------------------------------------------------------------------
           */
        Route::prefix('valmaster')->middleware('role:admin')->name('valmaster.')->group(function() {
            Route::resource('/admin', AdminController::class);

            Route::get('/save/{id}', [AdminController::class, 'saveInvoice'])->name('admin.invoice.save-invoice');
            Route::get('/email/{id}', [AdminController::class, 'sendInvoice'])->name('admin.invoice.mail-invoice');
            Route::get('/send-sms/{id}', [AdminController::class, 'invoiceSms'])->name('admin.invoice.send-sms');
            Route::get('/save-receipt/{id}', [AdminController::class, 'saveReceipt'])->name('admin.receipt.save-receipt');
            Route::get('/email-receipt/{id}', [AdminController::class, 'sendReceipt'])->name('admin.receipt.mail-receipt');
            Route::get('/show-receipt/{id}', [AdminController::class, 'showReceipt'])->name('admin.receipt.show-receipt');

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


