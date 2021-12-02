<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::name('api.')->group(function () {
    Route::get('comments', 'CommentController@getAll')->name('comments');
    Route::get('employees', 'EmployeeController@getAll')->name('employees');
});
