<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label>Title</label>
            {{Form::text('title',null,['class'=>'form-control', 'placeholder'=>'Course Title'])}}
            @if ($errors->has('title'))
                <span class="text-danger"> {{$errors->first('title')}}</span>
            @endif
        </div>
    </div>

      <div class="col-md-4">
        <div class="form-group">
            <label>description</label>
            {{Form::text('description',null,['class'=>'form-control', 'placeholder'=>'Course description'])}}
            @if ($errors->has('description'))
                <span class="text-danger"> {{$errors->first('description')}}</span>
            @endif
        </div>
    </div>
       <div class="col-md-4">
        <div class="form-group">
            <label>Short Information</label>
            {{Form::text('short_info',null,['class'=>'form-control', 'placeholder'=>'Course short information'])}}
            @if ($errors->has('short_info'))
                <span class="text-danger"> {{$errors->first('short_info')}}</span>
            @endif
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>Publish</label>
            <label class="switch">
                {{Form::checkbox('status', null, null)}}
                <span class="slider round"></span>

            </label>
        </div>
    </div>
</div>
<div class="row">

    <div class="col-md-4">
        <div class="form-group">
            <label>Image</label>
            {{Form::file('image')}}
            @if( isset($course) && file_exists('uploads/courses/'.$course->image))
                <img src="{{URL::to('/').'/uploads/courses/'.$course->image}}" alt="{{$course->image}}" width="100" height="100">
            @endif
            @if ($errors->has('image'))
                <span class="text-danger"> {{$errors->first('image')}}</span>
            @endif
        </div>
    </div>

</div>