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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function() {
<<<<<<< HEAD
    //muestra el formulario de login
=======
    
>>>>>>> bfa8583463b99bd21e466a5d9d25b5e9c0f80369
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('administrator.login');
    //envía el formulario de login 
    Route::post('/login', 'Auth\AdminLoginController@login')->name('administrator.login.submit');

    Route::get('/', 'AdministratorController@index')->name('administrator.dashboard');
    Route::get('/products', 'AdministratorController@editProduct')->name('administrator.editProduct');
    Route::post('/upexcel','UpexcelController@upExcel');
    
    //crud 
    Route::post('/addProduct','AdministratorController@addProduct')->name('administrator.addProduct');
    Route::get('/getProduct/{product}', 'AdministratorController@getProduct')->name('administrator.getProduct');
    Route::get('/editProduct/{product}', 'AdministratorController@editProduct')->name('administrator.editProduct');
    Route::post('/updateProduct/{product}', 'AdministratorController@updateProduct')->name('administrator.updateProduct');

    Route::post('/search', 'AdministratorController@searchP')->name('administrator.searchP');



    Route::get('/delete/{product}', 'AdministratorController@deleteProduct')->name('administrator.deleteProduct');

    Route::post('/addBrand', 'BrandController@addBrand')->name('administrator.addBrand');
    Route::get('/deleteBrand/{brand}','BrandController@deleteBrand')->name('administrator.deleteBrand');

});



