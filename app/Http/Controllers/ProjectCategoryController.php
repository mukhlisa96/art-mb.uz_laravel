<?php

namespace App\Http\Controllers;
use App\ProjectCategory;
use Illuminate\Http\Request;

class ProjectCategoryController extends Controller
{
      public function allCategories()
   {
	   $projectcategories = ProjectCategory::all();
	   $projectcategories->load('translations');
	   return view('projects')->withProjectCategory($projectcategories);
   	}

	public function readArticle($slug)
		{
			$post=Post::where('slug', $slug)->first();
			return view('article')->withPost($post);
		}
}
