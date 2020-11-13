<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
      public function show($category_id=null)
   {
   	        // $posts = Post::with('translations')->get();
	   $posts = Post::all();
	   $posts->load('translations');

	   $max_id = $posts->count();

	   // for ($i=0; $i < $max_id; $i++) { 
	   //  	$idcontainer[]=$i;
	   //  } 
	   return view('news')->withPosts($posts);
	   // ->withidcontainer($idcontainer);
   	}

	public function readArticle($slug)
		{
			$post=Post::where('slug', $slug)->first();
	   		$post->load('translations');

			 $allposts = Post::all();
	   		 $allposts->load('translations');

			return view('article')->withPost($post)->withallposts($allposts);
		}
}
