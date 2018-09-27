<?php

Route::group(['namespace' => 'API'], function () {

    Route::group(['prefix' => 'comments'], function () {

        Route::get('', 'CommentController@index');

        Route::post('', 'CommentController@store');

    });

});