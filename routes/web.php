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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/subscriptions', 'SubscriptionsController@index')->name('subscriptions');
Route::any('/subscriptions/store', 'SubscriptionsController@store')->name('subscriptions/store');

Route::group(['middleware'=>['web','auth']], function(){
    Route::any('/subscribers/manage', 'SubscriptionsController@showSubscribers')->name('subscribers/manage');
    Route::any('/subscribers/delete', 'SubscriptionsController@delete')->name('subscribers/delete');
});


Route::any('subscribers/sendNewsletter', 'EmailController@sendNewsletter');
