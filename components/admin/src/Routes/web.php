<?php

Route::group(['middleware' => ['web'], 'namespace' => 'Components\Admin\Http\Controllers'], function () {
    Route::get('admin', 'AdminController@dashboard')->name('admin.dashboard');
});
