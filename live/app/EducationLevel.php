<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EducationLevel extends Model
{
    protected $fillable=['id','title','slug','status'];
}
