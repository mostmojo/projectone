<?php

namespace App\Http\Controllers;

class PostsController {

	public function show($post) {
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

	}
}
