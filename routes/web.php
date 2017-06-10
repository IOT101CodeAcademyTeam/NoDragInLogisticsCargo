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
    return view('admin.adminList');
});

Route::group(['prefix' => 'admin'], function () {

    Route::group(['prefix' => 'devices'], function () {
        Route::get('/', ['as' => 'app.admin.devices.index', 'uses' => 'IotDeviceController@adminIndex']);

        Route::group(['prefix' => '{id}'], function () {
            Route::get('/', ['uses' => 'IotDeviceController@adminShow']);
            Route::get('/edit', ['as' => 'app.admin.devices.edit', 'uses' => 'IotDeviceController@adminEdit']);
            Route::post('/edit', ['uses' => 'IotDeviceController@adminUpdate']);
            Route::delete('/', ['as' => 'app.admin.devices.showDelete', 'uses' => 'IotDeviceController@adminDestroy']);
        });
    });

    Route::group(['prefix' => 'data'], function () {
        Route::get('/', ['as' => 'app.admin.data.index', 'uses' => 'IotDeviceDataController@adminIndex']);

        Route::group(['prefix' => '{id}'], function () {
            Route::get('/', ['uses' => 'IotDeviceDataController@adminShow']);
            Route::get('/edit', ['as' => 'app.admin.data.edit', 'uses' => 'IotDeviceDataController@adminEdit']);
            Route::post('/edit', ['uses' => 'IotDeviceDataController@adminUpdate']);
            Route::delete('/', ['as' => 'app.admin.data.showDelete', 'uses' => 'IotDeviceDataController@adminDestroy']);
        });
    });
});