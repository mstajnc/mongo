<?php

Route::get('/', function () {

	/*$post = new \App\Post();
	$post->title = "Awesome new blog post";
	$post->body = "Amazing post content";

	$comment = new \App\Comment();
	$comment->content = "This is a bad post, really!";

	$post->save();
	$comment->save();*/

	/*$post = \App\Post::all()->first();
	$comment = \App\Comment::all()->first();

	$post->comments()->associate($comment);
	$post->save();*/

	// dd($post->comments->toArray());

	// dd(\App\Post::all()->first()->comments->toArray());

	$posts = \App\Post::where('comments.content', 'LIKE', '%temporibus%')->get();

	dd($posts->toArray());


});
