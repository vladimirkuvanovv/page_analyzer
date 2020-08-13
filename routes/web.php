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

//Route::get('/domain', ['as' => 'domain', 'uses' => 'DomainController@index']);

//Route::get('/domains', ['as' => 'domains', 'uses' => 'DomainsController@index']);

//list
Route::resource('domains', 'DomainsController');
