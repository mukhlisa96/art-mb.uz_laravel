<?php

namespace App\Http\Controllers;
use App\Banner;
use App\Text;
use App\Project;
use App\Teammember;
use App\Teammemberproject;
use App\Partner;
use Illuminate\Http\Request;

class StudioController extends Controller
{
     public function showtostudio()
   {
	   $bs = Banner::all();
	   $bs->load('translations');

	   $ts = Text::all();
	   $ts->load('translations');

 	   $members = Teammember::all();
	   $members->load('translations');

	   $members_info = Teammember::all();
	   $members_info->load('translations');

   	   $members_info = $members_info[0];

   	   $partners = Partner::all();
// dd($members);
	   return view('studio')->withbs($bs)->withts($ts)->withmembers($members)->withmembers_info($members_info)->withpartners($partners);
   	}

   	public function memberinfo($slug){
   		if ($slug == null) {
   			$members_info = Teammember::all();
   			$members_info = $members_info[0];
   		}else{
   				$members_info = Teammember::where('slug', $slug)->first();
	  			// $members_info->load('translations');



		   	   $team_members_projects =Teammemberproject::all();
		   	   $ps = Project::all();
			  			$ps->load('translations');
			  			// dd($ps);

		   			foreach ($team_members_projects as $mp) {
			   	   	 if( $mp->teammember_id == $members_info->id){
			   	   		$p_id = $mp->project_id;
			   	   		$projects[] = Project::where('id', $p_id)->get()->load('translations');

				   	   }   	   			

			   	   }
		   	  
   		}
   	
	   return view('member-info')->withmembers_info($members_info)->withprojects($projects);
   	}
}
