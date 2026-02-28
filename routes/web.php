<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class,'index']);

Route::get('/about', [PageController::class,'about']);

Route::get('/articles/{Id}', [PageController::class,'articles']);

Route::get('/hello', [WelcomeController::class,'hello']);

Route::get('/world', function () {
 return 'World';
});



Route::get('/posts/{post}/comments/{comment}', function
($postId, $commentId) {
 return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/user/{name?}', function ($name='null') {
return 'Nama saya '.$name;
});

Route::get('/user/{name?}', function ($name='John') {
return 'Nama saya '.$name;
});


