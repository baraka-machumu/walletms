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


/**
 * authentication activities
 */
Route::get('/','Auth\LoginController@showLoginForm')->name('login');
Route::post('login','Auth\LoginController@webLogin');


Route::group(['middleware'=>'auth'], function () {

    Route::post('logout', 'Auth\LoginController@logout')->name('logout');

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

            Route::resource('/', 'Access\UserController');
            Route::get('/{id}/edit', 'Access\UserController@edit')->name('access-user-edit');
            Route::post('/update/{id}', 'Access\UserController@update');
            Route::get('/view/{id}', 'Access\UserController@show');
            Route::post('/activate', 'Access\UserController@activateUser');
            Route::post('/disable', 'Access\UserController@disabledUser');
            Route::post('/reset-password', 'Access\UserController@resetPassword');

        });

        Route::post('roles/update/{id}', 'Access\RoleController@roleUpdate');

        Route::get('roles/getrole-data/{id}', 'Access\RoleController@getRoleData');
        Route::get('permissions/getpermission-data/{id}', 'Access\PermissionController@getPermissionData');

        Route::resource('roles', 'Access\RoleController');

        Route::post('permissions/update', 'Access\PermissionController@permissionUpdate');

        Route::post('assign/permission', 'Access\ProfileController@assignPermissionToProfile');

        Route::resource('permissions', 'Access\PermissionController');
        Route::get('role/{roleId}/edit', 'Access\RoleController@edit')->name('access-role-edit');

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
});
