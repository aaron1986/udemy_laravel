<?php

use Spatie\Sheets\Facades\Sheets;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $posts = Sheets::collection('posts')->all();
    return view('posts.index', [
        'posts' => $posts
    ]);
});
Route::get('/posts/{post}', function($post) {
    return view('posts.show',[
        'post' => $post
    ]);
});

