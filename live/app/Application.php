<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'full_name', 'address', 'country_id','email','contact_no','education_level_id','faculty','intrested_course_id','intrested_country_id','married_status',
        'ielts','tofel','sat','gre','other_test'
    ];
}
