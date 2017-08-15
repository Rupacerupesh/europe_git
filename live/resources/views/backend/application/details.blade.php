@extends('backend.header')
@section('content')

<div class="box">
    <div class="box-body">
      <h1>
           <span>
        <a href="{{ url('home/applications') }}">
            <button type="button" class="btn btn-success" id="viewbtn">
               <- Back
            </button>
        </a>
    </span>
        </h1>

    Name: <label>{{$application->full_name}}</label></br>
    Address: <label>{{$application->address}}</label></br>
    Emali: <label>{{$application->email}}</label></br>
    Contact No: <label>{{$application->contact_no}}</label></br>
    Faculty: <label>{{$application->faculty}}</label></br>
    Highest Education Level: <label>@if($application->education_level_id==1)
	                        {{'SLC'}}

	                        @elseif($application->education_level_id==2)
	                        {{'10+2'}}

	                        @elseif($application->education_level_id==3)
	                        {{'Bachelor'}}

	                        @elseif($application->education_level_id==4)
	                        {{'Master'}}

	                        @endif</label></br>
    Intrested Course: <label>@if($application->intrested_course_id==1)
	                        {{'Course 1'}}

	                        @elseif($application->intrested_course_id==2)
	                        {{'Course 2'}}

	                        @elseif($application->intrested_course_id==3)
	                        {{'Course 3'}}

	                        @elseif($application->intrested_course_id==4)
	                        {{'Course 4'}}

	                        @endif</label></br>
    Intrested Country: <label>@if($application->intrested_country_id==1)
	                        {{'Nepal'}}

	                        @elseif($application->intrested_country_id==2)
	                        {{'China'}}

	                        @elseif($application->intrested_country_id==3)
	                        {{'India'}}

	                        @elseif($application->intrested_country_id==4)
	                        {{'Bhutan'}}

	                        @endif
</label></br>
    Work Experience: <label>{{$application->work_experience}}</label></br>

    </div>

</div>

@stop