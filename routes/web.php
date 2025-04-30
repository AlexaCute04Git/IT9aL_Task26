<?php

use App\Http\Controllers\PostController;

Route::get('/', function () {
    
 
Route::resource('posts', PostController::class);
});
