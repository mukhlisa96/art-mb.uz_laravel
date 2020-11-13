<?php

namespace App\Http\Controllers;
use App\Banner;
use App\Text;
use App\Teammember;
use App\Post;
use Illuminate\Http\Request;

class BannerController extends Controller
{
       public function show()
   {
    $posts=Post::orderBy('created_at','desc')->take(5)->get();
	   $bs = Banner::all();
	   $bs->load('translations');
	   return view('mb')->withbs($bs);
   	}

  

       public function showi()
   {
	   return 'abc';
   	}




}


