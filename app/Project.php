<?php

namespace App;
use App\Teammember;
use App\Teammemberproject;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Project extends Model
{
      use Translatable;
    protected $translatable = ['name', 'desc', 'location'];

  public function teammember_id(){
	    return $this->belongsToMany(Teammember::class, 'teammemberprojects');
	}
	//      public function projects_name(){
	//     return $this->belongsToMany(Project::class);
	// }


}




