<?php

Route::group([
    'middleware' => ['web', 'admin'],
    'namespace' => 'Components\Articles\Http\Controllers',
    'as' => 'admin.',
    'prefix' => 'admin',
], function () {
    Route::resource('articles', 'ArticleController');
    Route::resource('article_categories', 'ArticleCategoryController');
});
