 {{Form::hidden('institution_id',Request::segment(3))}}
 <h1>
 	<span>
 	<a href="{{ url('home/institution') }}">
 			<button type="button" class="btn btn-success" id="viewbtn">
 				<- Back
 			</button>
 		</a>
 	</span>
 </h1>
<div class="row">
<label>Facility List</label>
<hr>
	@foreach($facility_list as $facility)
	<?php
// var_dump($recent_facility); die;
	?>
	
	<div class="col-md-4">
		<div class="form-group">
		<label>{{$facility->title}}</label>
		<label class="switch">
                <input  name="facilities[]" value="{{$facility->id}}" type="checkbox" @if(in_array($facility->id,$recent_facility)) checked @endif>
                <span class="slider round"></span>
            </label>
		</div>
	</div>
	
	@endforeach
</div>
<div class="row">
<label>Course List</label>
<hr>
	@foreach($course_list as $course)
	<div class="col-md-4">
		<div class="form-group">
		<label>{{$course->title}}</label>
		<label class="switch">
                <input  name="courses[]" value="{{$course->id}}" type="checkbox" @if(in_array($course->id,$recent_course)) checked @endif>
                <span class="slider round"></span>
            </label>
		</div>
	</div>
	@endforeach
</div>