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
    return view('welcome');
});
Route::get('/addProducts', function () {
    return view('addProducts');
});
Route::get('/addCustomers', function () {
    return view('addCustomers');
});

Route::get('/ContactSupport', function () {
    return view('ContactSupport');
});


Route::get('/addProduct','productsController@insertProduct');

Route::get('/showAllProducts', 'productsController@showProducts');

Route::get('/addCustomer','customersController@insertCustomer');

Route::get('/showAllCustomers', 'customersCo;ntroller@showCutomers');

Route::get('/contactHelp','ContactController@insertContact');

Route::get('/showtHelp','ContactController@showAllHelpRequest');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
