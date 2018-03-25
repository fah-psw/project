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
    return view('login');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/viewdata', function () {
    return view('viewData');
});

Route::get('/adddata', function () {
    return view('addData');
});

Route::get('/editdata', function () {
    return view('editData');
});

Route::get('/deletedata', function () {
    return view('deleteData');
});

//show menu 
Route::get('/allmenus', 'getData@getMenu');

//show location 
Route::get('/alllocations', 'getData@getLocation');

//show order 
Route::get('/allorders', 'getData@getOrder');

//show route 
Route::get('/allroutes', 'getData@getRoute');

//show seller 
Route::get('/allsellers', 'getData@getSeller');

//show sender 
Route::get('/allsenders', 'getData@getSender');

//show location 
Route::get('/allstores', 'getData@getStore');

//add location
Route::get('/addlocation',function () {
    return view('addLocation');
});

Route::post('/addLo','addData@addLocation');

//add menu
Route::get('/addmenu',function () {
    return view('addMenu');
});

Route::post('/addMenu','addData@addMenu');

//add route
Route::get('/addroute',function () {
    return view('addRoute');
});

Route::post('/addRoute','addData@addRoute');

//add seller
Route::get('/addseller',function () {
    return view('addSeller');
});

Route::post('/addSeller','addData@addSeller');

//add sender
Route::get('/addsender',function () {
    return view('addSender');
});

Route::post('/addSender','addData@addSender');

//add store
Route::get('/addstore',function () {
    return view('addStore');
});

Route::post('/addStore','addData@addStore');

//delete location
Route::get('/deletelocation', 'deleteData@getLocation');

Route::get('/deleteLocation/{location_id}','deleteData@deleteLocation');

//delete menu
Route::get('/deletemenu', 'deleteData@getMenu');

Route::get('/deleteMenu/{menu_id}','deleteData@deleteMenu');

//delete route
Route::get('/deleteroute', 'deleteData@getRoute');

Route::get('/deleteRoute/{route_id}','deleteData@deleteRoute');

//delete seller
Route::get('/deleteseller', 'deleteData@getSeller');

Route::get('/deleteSeller/{seller_id}','deleteData@deleteSeller');

//delete sender
Route::get('/deletesender', 'deleteData@getSender');

Route::get('/deleteSender/{sender_id}','deleteData@deleteSender');

//delete store
Route::get('/deletestore', 'deleteData@getStore');

Route::get('/deleteStore/{store_id}','deleteData@deleteStore');

//edit location
Route::get('/showlocation', 'editData@getLocation');

Route::get('/editLocation/{location_id}','editData@editLocation');

Route::post('/updateLocation','editData@updateLocation');

//edit menu
Route::get('/showmenu', 'editData@getMenu');

Route::get('/editMenu/{menu_id}','editData@editMenu');

Route::post('/updateMenu','editData@updateMenu');

//edit route
Route::get('/showroute', 'editData@getRoute');

Route::get('/editRoute/{route_id}','editData@editRoute');

Route::post('/updateRoute','editData@updateRoute');

//edit seller
Route::get('/showseller', 'editData@getSeller');

Route::get('/editSeller/{seller_id}','editData@editSeller');

Route::post('/updateSeller','editData@updateSeller');

//edit sender
Route::get('/showsender', 'editData@getSender');

Route::get('/editSender/{sender_id}','editData@editSender');

Route::post('/updateSender','editData@updateSender');

//edit store
Route::get('/showstore', 'editData@getStore');

Route::get('/editStore/{store_id}','editData@editStore');

Route::post('/updateStore','editData@updateStore');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/loginsender','login@loginSender');

Route::post('/makeorder','addData@addOrder');

Route::post('/test','addData@test');
