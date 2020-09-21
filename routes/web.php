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



Route::get('viewAllDownloadFile', 'DownloadController@downfunc');

Route::get('/uploadfile','UploadController@index')->name('upload');
Route::post('/uploadfile','UploadController@showUploadFile')->name('upload');

Route::get('/upload','FileController@showUploadForm')->name('upload.file');
Route::post('/upload','FileController@storeFile')->name('upload.file');


Route::get('/', 'ProductController@indexx')->name('indexx');
Route::get('/create', 'ProductController@create')->name('create');
Route::get('/contact', 'ProductController@contact')->name('contact');
Route::get('/products', 'ProductController@products')->name('products');
Route::get('/product/create1', 'ProductController@product_create1')->name('product.create1');
Route::post('/create1', 'ProductController@product_store')->name('store');

Route::get('/seller', 'ProductController@seller')->name('seller');
Route::get('/products', 'ProductController@product')->name('product');
Route::get('/search', 'ProductController@search')->name('search');
Rout e::get('/admin', 'ProductController@admin')->name('admin');

Route::get('/about', 'ProductController@about');

Route::get('messages', 'MessageController@fetch');
Route::post('messages', 'MessageController@sentMessage');


Route::get('/about', 'ProductController@about')->name('about');













Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
