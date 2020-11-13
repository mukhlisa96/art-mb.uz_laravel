<?php

namespace App;
use App\Project;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Teammember extends Model
{
	  use Translatable;
    protected $translatable = ['name', 'position', 'desc', 'slug'];
}

