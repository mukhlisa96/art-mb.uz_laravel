<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Text extends Model
{
    use Translatable;
    protected $translatable = ['header','content'];
}