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
//Route::get('/', 'GetProductoController@getProducto');

Route::get('/',function () {
    return view('welcome');
});

Route::get('/api/productos', 'GetProductoController@getProducto');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('administrator.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('administrator.login.submit');

    Route::get('/', 'AdministratorController@index')->name('administrator.dashboard');
    Route::get('/products', 'AdministratorController@editProduct')->name('administrator.editProduct');
    Route::post('/upexcel','UpexcelController@upExcel');
    
    //crud Productos
    Route::post('/addProduct','AdministratorController@addProduct')->name('administrator.addProduct');
    Route::get('/getProduct/{product}', 'AdministratorController@getProduct')->name('administrator.getProduct');
    Route::get('/editProduct/{product}', 'AdministratorController@editProduct')->name('administrator.editProduct');
    Route::post('/updateProduct/{product}', 'AdministratorController@updateProduct')->name('administrator.updateProduct');
    Route::get('/delete/{product}', 'AdministratorController@deleteProduct')->name('administrator.deleteProduct');

    Route::post('/search', 'AdministratorController@searchP')->name('administrator.searchP');
    
    // Marca
    Route::post('/addBrand', 'BrandController@addBrand')->name('administrator.addBrand');
    Route::get('/deleteBrand/{brand}','BrandController@deleteBrand')->name('administrator.deleteBrand');

    //Categoría
    Route::post('/addCategory','CategoryController@addCategory')->name('administrator.addCategory');
    Route::get('/delateCategory/{category}','CategoryController@delateCategory')->name('administrator.dalateCategory');

});



