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

Route::get('/', ['as' => 'index', 'uses' => 'IndexController@index']);

//Route::resource('domain', 'DomainCheckController');
Route::post('/domains/{id}/check', ['as' => 'check', 'uses' => 'DomainCheckController@store']);
Route::resource('domains', 'DomainsController');
