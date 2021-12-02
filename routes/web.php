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

Route::get('partners', 'PartnerController@index')->name('partners.index');
Route::get('comments', 'CommentController@index')->name('comments.index');
Route::get('employees', 'EmployeeController@index')->name('employees');
