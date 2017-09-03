<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    public function course()
{
    return $this->belongsToMany('App\Course', 'institution_has_courses', 
      'institution_id', 'course_id');
}
 public function facility()
{
    return $this->belongsToMany('App\Facility', 'institution_has_facilities', 
      'institution_id', 'facility_id');
}
}
