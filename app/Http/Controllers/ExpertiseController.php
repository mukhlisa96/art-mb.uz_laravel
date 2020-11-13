<?php

namespace App\Http\Controllers;
use\App\ProjectCategory;
use\App\Project;
use\App\Text;
use\App\Banner;
use Illuminate\Http\Request;

class ExpertiseController extends Controller
{
      public function allCategories()
   {
   	   $text = Text::all();
   	   $banner = Banner::all();
   	   $text->load('translations');
	   $projectcategories = ProjectCategory::all();
	   $projectcategories->load('translations');
	   return view('expertise')->withProjectCategory($projectcategories)->withtext($text)->withbanner($banner);
   	}

   	public function categorydef($slug){
   	   $thiscategory = ProjectCategory::where('slug', $slug)->first();
	   $thiscategory->load('translations');
	   $projectcategories = ProjectCategory::where('slug', '!=', $slug)->get();
	   

	   $c = ProjectCategory::where('slug', $slug)->first();
				$cat_id = $c->id;
				$projects=Project::where('category_id', $cat_id)->get();
	   			$projects->load('translations');

	   return view('category-definition')->withthiscategory($thiscategory)->withprojectcategories($projectcategories)->withprojects($projects);
   	}
}
