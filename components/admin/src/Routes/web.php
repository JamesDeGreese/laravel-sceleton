<?php

Route::group(['middleware' => ['web'], 'namespace' => 'Components\Admin\Http\Controllers'], function () {
    Route::get('admin/login', 'AdminController@login')->name('admin.login');
    Route::get('admin', 'AdminController@dashboard')->name('admin.dashboard')->middleware('admin');
});
