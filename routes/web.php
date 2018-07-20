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

/*Route::get('/', function () {
    return view('home/index');
});*/

Route::get('/', 'HomeController@index');
Route::get('home', function()
{
    return view('home/home');
});

Route::get('main', function()
{
    return view('home/main');
});

Route::get('home/items',['as'=>'items','uses'=>'ItemsController@index']);

Route::post('items/saveitems','ItemsController@SaveItem');
Route::get('items/detail','ItemsController@ItemsDetail');
Route::get('items/getitems','ItemsController@GetItemList');
Route::get('items/index','ItemsController@index');
Route::get('items/delete/{id}','ItemsController@DeleteItem');


//ItemType
Route::get('itemtype/index','ItemTypeController@index');
Route::post('itemtype/save','ItemTypeController@SaveItemType');
Route::get('itemtype/add','ItemTypeController@ItemTypeDetail');
Route::get('itemtype/delete/{id}','ItemTypeController@DeleteItemType');

//DayPrice
Route::get('dayprice/index',['as'=>'dayprice','uses'=>'DayPriceController@index']);
Route::get('dayprice/add','DayPriceController@DayPriceDetail');
Route::post('dayprice/save','DayPriceController@SaveDayPrice');
Route::get('dayprice/chart/{id}','DayPriceController@PriceChart');

//Menu
Route::get('menu/index','MenuController@index');
