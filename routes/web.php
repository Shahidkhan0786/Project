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


Route::get('/Pcatagory', function () {
    return view('Pcatagory');
});
Route::get('/Supplier', function () {
    return view('Supplier');
});
Route::get('/login', function () {
    return view('login');
});




Route::get('/productp', function () {
    return view('productpricing');
});

// Route::get('/home', function () {
//     return view('masterdash');
// });

Route::get('/home', function () {
    return view('home');
});



Route::get('/sales', function () {
    return view('sales');
});

Route::get('/catagory', function () {
    return view('catagory');
});

Route::get('/recipt', function () {
    return view('recipt');
});
Route::get('/home1', function () {
    return view('home1');
});
Route::get('/recipt', function () {
    return view('recipt');
});

Route::get('/user1', function () {
    return view('user');
});
Route::get('/', 'sloginController@index');
Route::post('/check', 'sloginController@check');

Route::post('/index5', 'Login1Controller@store');
// Route::post('/index4/store', 'PurchaseinController@store');


Route::get('/index', 'user1Controller@index');
Route::post('/index/store', 'user1Controller@store');
Route::get('/index/store/edit/{id}', 'user1Controller@edit');
Route::put('/index/store/update/{id}', 'user1Controller@update');
Route::delete('/index/store/destroy/{id}', 'user1Controller@destroy');

Route::get('/index1', 'product1Controller@index');
Route::post('/index1/store', 'product1Controller@store');

Route::get('/index2', 'productcat1Controller@index');
Route::post('/index2/store', 'productcat1Controller@store');

Route::get('/index3', 'SupplierController@index');
Route::post('/index3/store', 'SupplierController@store');

Route::get('/index4', 'PurchaseinController@index');
Route::post('/index4/store', 'PurchaseinController@store');

// Route::get('/pp', 'productpController@index');
Route::get('/sale', 'salesController@index');
Route::post('/sale', 'salesController@show');