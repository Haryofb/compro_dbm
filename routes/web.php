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

Auth::routes();

//FRONTEND
route::get('/','FrontendMasterController@index')->name('frontend');

//menu about
Route::get('/about','FrontendAboutController@index')->name('about');
Route::get('/stakeholder','FrontendAboutController@stakeholder')->name('stakeholder');
Route::get('/statistic','FrontendAboutController@statistic')->name('statistic');

//menu service
route::get('/service','FrontendServiceController@index')->name('service');

//menu gallery
route::get('/gallery','FrontendGalleryController@index')->name('gallery');

//menu info
route::get('/info','FrontendInfoController@index')->name('info');

//menu event
route::get('/event','FrontendEventController@index')->name('event');


//BACKEND
Route::get('/home', 'HomeController@index')->name('home');

//Category Picture
Route::get('/backend_category_picture', 'BackendCategoryPictureController@index')->name('backend.category.picture.home');
Route::get('/backend_category_picture/add', 'BackendCategoryPictureController@create')->name('backend.category.picture.add');
Route::post('/backend_category_picture/store', 'BackendCategoryPictureController@store')->name('backend.category.picture.store');
Route::get('/backend_category_picture/edit/{id}', 'BackendCategoryPictureController@edit');
Route::put('/backend_category_picture/update', 'BackendCategoryPictureController@update')->name('backend.category.picture.update');
Route::get('/backend_category_picture/delete/{id}', 'BackendCategoryPictureController@destroy');