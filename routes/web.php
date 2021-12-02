<?php

use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';





Route::view('/', 'main')->name('main');

Route::prefix('{pageCategory:name}')->group(function () {
    Route::get('{page:name}', 'PageController@index')->name('pages.index');
});

Route::middleware('auth')->group(function () {

    Route::prefix('{page}')->group(function () {
        Route::post('comments', 'CommentController@store')->name('comments.store');
    });

    Route::prefix('{comment}/ratings')->group(function () {
        Route::post('like', 'RatingController@like')->name('ratings.like');
        Route::post('dislike', 'RatingController@dislike')->name('ratings.dislike');
    });

});

Route::view('employees', 'employees')->name('employees');
