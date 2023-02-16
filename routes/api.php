<?php

use Illuminate\Http\Request;
use App\Http\Controllers\PostC;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return 'Hello World API !';
});
Route::get('/posts', [PostC::class, 'index']);
Route::get('/posts/{id}', [PostC::class,'detail']);