<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/padawan', function () {
	return view('padawan');
});

Route::get('/posts/{post}', function ($post) {
	$posts = [
		'my-first-post' => 'Hello, this is my first post dawg!',
		'my-second-post' => 'Yo,  this is my second post.'
	];

	if (! array_key_exists($post, $posts)) {
		abort(404, 'Sorry, not found');
	}

	return view('post', [
		'post' => $posts[$post]
	]);
});