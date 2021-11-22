<?php

use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';





Route::view('/', 'main');

Route::prefix('{pageCategory:name}')->group(function () {
    Route::get('{page:name}', 'PageController@index');
});
