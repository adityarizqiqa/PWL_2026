<?php

use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', function () {
    return 'World';
});

Route::get('/selamat', function () {
    return 'Selamat Datang';
});

Route::get('/Mahasiswa', function () {
    return 'Nama : Aditya Rizqiqa Ramadhan <br> NIM : 244107020008';
});

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya, ' . $name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke- ' . $postId . ' - Komentar ke-: ' . $commentId;
});

Route::get('/articles/{id}', function ($articlesId) {
    return 'Halaman Artikel dengan ID ' . $articlesId;
});

