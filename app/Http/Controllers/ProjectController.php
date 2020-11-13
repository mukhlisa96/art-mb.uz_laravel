<?php

namespace App\Http\Controllers;
use App\Project;
use App\ProjectCategory;
use Illuminate\Http\Request;

class projectController extends Controller
{
      public function allProjects($category_id=null)
   {
   	        // $projects = project::with('translations')->get();
	   $projects = Project::all();
	   $projects->load('translations');
	   return view('projects')->withprojects($projects);
   	}

	public function categoryProjects($slug)
		{
			if ($slug == null) {
				$projects=Project::all();
	   			$projects->load('translations');
			}else
			{	$c = ProjectCategory::where('slug', $slug)->first();
					$id = $c->id;
					$cat_slug = $c->slug;
				$projects=Project::where('category_id', $id)->get();
	   			$projects->load('translations');

				$num_of_all_proj = count($projects);
			}


			return view('this-category')->withprojects($projects)->withcount($num_of_all_proj)->withcat_slug($cat_slug);
		}



	public function thisProject($cslug, $slug){
		
				$c = ProjectCategory::where('slug', '!=', $cslug)->get();

				$p = Project::where('slug', $slug)->first();
	   			$p->load('translations');
         		$images = json_decode($p->gallery); 


				$projects=Project::where('category_id', $p->category_id)->get();
	   			$projects->load('translations');
			

		return view('this-project')->withp($p)->withc($c)->withimages($images)->withps($projects);
	}

	public function showallprojects(){



		$projects = Project::all();
		$projects->load('translations');
		$count = $projects->count();

		return view('show-all-projects')->withprojects($projects)->withcount($count);
	}

	public function nocat($slug){
		$p = Project::where('slug', $slug)->first();
		$p -> load('translations');
		$images = json_decode($p->gallery);

		// $p->category_id == $c->id;
		// $cslug = $c->slug;

		$c = ProjectCategory::where('id', '!=', $p->category_id)->get();

		$projects=Project::where('category_id', $p->category_id)->get();
	   	$projects->load('translations');
		return view('this-project')->withp($p)->withc($c)->withimages($images)->withps($projects);

	}
}