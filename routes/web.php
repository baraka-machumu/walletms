<?php

use App\Http\Controllers\Access\RoleController;
use App\Http\Controllers\Access\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExchangeRateController;
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


/**
 * authentication activities
 */
Route::get('/',[LoginController::class,'showLoginForm'])->name('login');
Route::post('login',[LoginController::class,'login']);


Route::group(['middleware'=>'auth'], function () {

    Route::post('logout', [LoginController::class,'logout'])->name('logout');

    /**
     * manage consumes
     */

    Route::get('consumers/getall/deposits/{id}', 'Consumer\ConsumerController@getAllConsumerDeposits');

    Route::post('consumers/account/enable', 'Consumer\ConsumerController@enableAccount')->name('c-enable-acount');
    Route::post('consumers/account/disable', 'Consumer\ConsumerController@disableAccount')->name('c-enable-acount');

    Route::resource('consumers', 'Consumer\ConsumerController');

    Route::get('consumers/reports', 'Consumer\ConsumerController@report');

    Route::post('consumers/pin-reset', 'Consumer\ConsumerController@pinReset');

    Route::post('consumers/password-reset', 'Consumer\ConsumerController@passwordReset');

    /**
     * manage user , roles and permission here
     */

    Route::group(['prefix' => 'access'], function () {

        Route::group(['prefix' => 'users'], function () {


            Route::resources([
                '/' => UserController::class,
            ]);


            Route::get('/{id}/edit', [UserController::class,'edit'])->name('access-user-edit');
            Route::post('/update/{id}', [UserController::class,'update']);
            Route::get('/view/{id}', [UserController::class,'show']);
            Route::post('/activate', 'Access\UserController@activateUser');
            Route::post('/disable', 'Access\UserController@disabledUser');
            Route::post('/reset-password', 'Access\UserController@resetPassword');

        });

        Route::post('roles/update/{id}', 'Access\RoleController@roleUpdate');

        Route::get('roles/getrole-data/{id}', 'Access\RoleController@getRoleData');
        Route::get('permissions/getpermission-data/{id}', 'Access\PermissionController@getPermissionData');

        Route::resources([
            'roles' => RoleController::class,
        ]);


        Route::post('permissions/update', 'Access\PermissionController@permissionUpdate');

        Route::post('assign/permission', 'Access\ProfileController@assignPermissionToProfile');

        Route::resource('permissions', 'Access\PermissionController');
        Route::get('role/{roleId}/edit', [RoleController::class,'edit'])->name('access-role-edit');

        Route::get('errors/login', 'Access\ErrorController@errorLogin');

        Route::resource('profiles', 'Access\ProfileController');


    });

    /**
     * manage consumer transactions
     */


    Route::group(['prefix' => 'consumer-transactions'], function () {


        Route::get('history/{id}', 'Transaction\TransactionController@history')->name('transactions.history');

        Route::get('/', 'Transaction\ConsumerTransactionController@index');

        Route::get('fee-collection', 'Transaction\ConsumerTransactionController@feeCollectionTransactions');

        Route::get('deposits', 'Transaction\ConsumerTransactionController@depositTransactions');
        Route::get('payments', 'Transaction\ConsumerTransactionController@paymentsTransactions');
        Route::get('payment-history/{consumer_wallet_id}', 'Transaction\ConsumerTransactionController@paymentsHistory')->name('payment.history');
        Route::get('deposit-history/{consumer_wallet_id}', 'Transaction\ConsumerTransactionController@depositsHistory')->name('deposit.history');


    });


// -------------------------wallet controller-----------------------------
    Route::group(['prefix' => 'wallet', 'middleware' => 'manage-wallet'], function () {

        Route::get('consumer/details/{wallet_id}', 'Wallet\WalletController@getConsumerWalletDetails');
        Route::get('merchants', 'Wallet\WalletController@merchantWallet');
        Route::get('agents', 'Wallet\WalletController@agentWallet');
        Route::get('consumers', 'Wallet\WalletController@consumerWallet');
        Route::get('info', 'Wallet\WalletController@ncardWalletInfo');


        Route::post('disable-consumer-wallet', 'Wallet\ConsumerWalletController@disableAccount');
        Route::post('disabled-consumer-card', 'Wallet\ConsumerWalletController@disableCard');

    });


    Route::get('dashboard',[DashboardController::class,'adminDashboard']);

    Route::get('view-exchange-rate',[ExchangeRateController::class,'viewExchangeRate'])->name('view-exchange-rate');
    Route::get('edit-exchange-rate/{id}',[ExchangeRateController::class,'editExchangeRates'])->name('edit-exchange-rate');
    Route::post('add-exchange-rate',[ExchangeRateController::class,'addExchangeRate'])->name('add-exchange-rate');
    Route::post('update-exchange-rate/{id}',[ExchangeRateController::class,'updateExchangeRate'])->name('update-exchange-rate');


    Route::get('view-currency-code',[ExchangeRateController::class,'viewCurrencyCodes'])->name('view-currency-code');
    Route::get('edit-currency-code/{id}',[ExchangeRateController::class,'editCurrencyCodes'])->name('edit-currency-code/{id}');
    Route::post('add-currency-code',[ExchangeRateController::class,'addCurrencyCode'])->name('add-currency-code');
    Route::post('update-currency-code/{id}',[ExchangeRateController::class,'updateCurrencyCode'])->name('update-currency-code');
});
