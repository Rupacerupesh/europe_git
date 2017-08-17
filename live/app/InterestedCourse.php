<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InterestedCourse extends Model
{
    protected $fillable=['id','title','slug','status'];
}
