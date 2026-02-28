<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ('Selamat Datang');
});

Route::get('/hello', function () {
 return 'Hello World';
});

Route::get('/world', function () {
 return 'World';
});

Route::get('/about', function () {
    return ('NIM saya 244107020154, Nama saya Hafiz Rizqi Hernanda');
});

Route::get('/user/{name}', function ($name) {
return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function
($postId, $commentId) {
 return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{articleId}', function ($articleId) {
 return 'Halaman artikel dengan ID ke-'.$articleId;
});





