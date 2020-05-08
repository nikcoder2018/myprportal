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

Route::get('/', 'DashboardController@index')->name('dashboard');
Route::get('/tenants', 'UsersController@tenants')->name('users.tenant');
Route::get('/landlords', 'UsersController@landlords')->name('users.landlord');
Route::get('/properties', 'PropertiesController@index')->name('properties.index');
Route::get('/invoices', 'InvoicesController@index')->name('invoices.index');
Route::get('/settings', 'SettingsController@index')->name('settings.index');

Auth::routes();


