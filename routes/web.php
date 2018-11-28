<?php

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
    return view('adminLogin');
});

Route::POST('/adminLogin','AdminController@logAdmin');

Route::get('/index','PageController@getIndexPage');

Route::get('/adminLogin','PageController@getDefaultAdminPage');

Route::get('/farmer','PageController@getFarmerPage');

Route::get('/register','PageController@getFarmerRegisterPage');


Route::POST('/farmerRegister','FarmerController@addFarmersDetails');


Route::get('/viewfarmer','FarmerController@viewFarmer');

Route::get('/customer','PageController@getCustomerPage');

Route::get('/customerRegister','PageController@getCustomerRegisterPage');

Route::POST('/customerRegister','customerController@addCustomerDetails');

Route::get('/viewcustomer','customerController@viewCustomer');
