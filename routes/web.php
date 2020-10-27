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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::resource('/', 'General\HomeController');
Route::resource('news-page', 'General\NewsController');
Route::resource('event-page', 'General\EventController');
Route::resource('category-page', 'General\CategoryController');
Route::resource('gallery-page', 'General\GalleryController');
Route::resource('contact', 'General\ContactController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('admin-news', 'Admin\NewsController');
Route::resource('admin-gallery', 'Admin\GalleryController');
// Route::post('admin-gellery/upload', 'Admin\GalleryController@upload');
Route::resource('admin-event', 'Admin\EventController');
Route::resource('admin-account', 'Admin\AccountController');
Route::resource('admin-category', 'Admin\CategoryController');
Route::resource('admin-slider', 'Admin\SliderController');