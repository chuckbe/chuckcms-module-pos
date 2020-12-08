<?php
use Chuckbe\Chuckcms\Models\Repeater as ProductModel;

Route::group(['middleware' => ['web']], function() {
    Route::group(['middleware' => 'auth'], function () {
        Route::group(['middleware' => ['role:super-admin|administrator|moderator']], function () {
            Route::get('/dashboard/pos', 'Chuckbe\ChuckcmsModulePos\Controllers\PosController@index')->name('dashboard.module.pos.index');
            Route::get('/dashboard/pos/data', 'Chuckbe\ChuckcmsModulePos\Controllers\PosController@list')->name('dashboard.module.pos.list');
        });
    });
});