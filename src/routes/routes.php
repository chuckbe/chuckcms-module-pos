<?php

Route::group(['middleware' => ['web']], function() {
    Route::group(['middleware' => 'auth'], function () {
        Route::group(['middleware' => ['role:super-admin|administrator|moderator']], function () {
            Route::get('/dashboard/pos', 'Chuckbe\ChuckcmsModulePos\Controllers\PosController@index')->name('dashboard.module.pos.index');
        });
    });
});