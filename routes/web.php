<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RoutegalleryProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

route::get('/','HomeController@index')->name('home');

//menu about
Route::get('/about','AboutController@index')->name('about');
Route::get('/stakeholder','AboutController@stakeholder')->name('stakeholder');
Route::get('/statistic','AboutController@statistic')->name('statistic');

//menu service
route::get('/service','ServiceController@index')->name('service');

//menu gallery
route::get('/gallery','galleryController@index')->name('gallery');

//menu info
route::get('/info','infoController@index')->name('info');

//menu event
route::get('/event','eventController@index')->name('event');