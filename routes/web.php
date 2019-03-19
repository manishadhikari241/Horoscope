<?php


Route::group(['namespace' => 'Backend', 'prefix' => 'admin'], function () {
    Route::any('/', 'AdminController@index')->name('index');
    Route::any('add-privilege', 'AdminController@add_privilege')->name('add-privilege');
    Route::any('add-user', 'AdminController@add_user')->name('add-user');
    Route::any('add-user-action', 'AdminController@add_user_action')->name('add-user-action');
    Route::any('add-horo', 'AdminController@add_horo')->name('add-horo');
    Route::any('save-horo', 'AdminController@save_horo')->name('save-horo');
    Route::any('show-horo', 'AdminController@show_horo')->name('show-horo');
    Route::any('delete-horo/{id?}', 'AdminController@delete_horo')->name('delete-horo');
    Route::any('edit-horo/{id?}', 'AdminController@edit_horo')->name('edit-horo');
    Route::any('edit-horo-action','AdminController@edit_horo_action')->name('edit-horo-action');

    Route::group(['prefix' => 'News'], function () {
        Route::any('add-news', 'AdminController@add_news')->name('add-news');
        Route::any('add-news-action', 'AdminController@add_news_action')->name('add-news-action');
        Route::any('show-news', 'AdminController@show_news')->name('show-news');
    }
    );
    Route::group(['prefix' => 'slides'], function () {
        Route::any('add-slides', 'AdminController@add_slides')->name('add-slides');
    });


}
);

