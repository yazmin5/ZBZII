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

Auth::routes();

//Route untuk view halaman Utama
Route::get('/', 'PageController@home');

//Route untuk View Kategori Produk
Route::get('/Daily', 'DailyController@category')->name('daily.index');
//Route untuk view satuan produk dari kategori
Route::get('/Daily/{slug}', 'DailyController@show');
Route::get('/Casual', 'CasualController@category');
Route::get('/Casual/{slug}', 'CasualController@show');
Route::get('/Party', 'PartyController@category');
Route::get('/Party/{slug}', 'PartyController@show');

//Route untuk ke view Cart
Route::get('/cart', 'CartController@show')->name('cart.index');
Route::post('/cart/{product}', 'CartController@store')->name('cart.store');
Route::delete('/cart/{slug}', 'CartController@destroy')->name('cart.destroy');
Route::patch('/cart/{slug}', 'CartController@update')->name('cart.update');
Route::get('/empty', function(){
    Cart::destroy();
    return redirect('/cart');
});

//Route::get('/single-product', 'PageController@single_product');
/*Route::get('/cart', 'PageController@cart')->name('cart');
*/Route::get('/checkout', 'CheckoutController@index')->name('checkout.index');



// admin functionality
Route::GET('admin/dashboard', 'AdminController@dashboard');
Route::GET('admin/logout', 'Admin\LoginController@logout');
Route::GET('admin', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::POST('admin', 'Admin\LoginController@login');


//Route::get('/ProductType', 'PageController@ProductType')->name('ProductType');
//Route::get('/{type}', 'PageController@category');