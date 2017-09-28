<?php

namespace App\Http\Controllers\Front;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
	public function index()
	{
		$posts = Post::paginate(5);
		return view('blogs.index', compact('posts'));
	}
	public function show($slug)
	{
		$post = Post::where('slug', $slug)->FirstOrFail();
		$author = $post->user;
		//dd($author);
		$comments = $post->comments;
		return view('blogs.show', compact('post', 'author', 'comments'));
	}
}
