<?php

Route::group(['middleware' => ['web'], 'namespace' => 'Components\Articles\Http\Controllers'], function () {
    Route::resource('articles', 'ArticleController', ['as' => 'admin']);
    Route::resource('article_categories', 'ArticleCategoryController', ['as' => 'admin']);
});
