<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label>Title</label>
            {{Form::text('title',null,['class'=>'form-control', 'placeholder'=>'Advertisement Title'])}}
            @if ($errors->has('title'))
                <span class="text-danger"> {{$errors->first('title')}}</span>
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
            <label>Logo</label>
            {{Form::file('logo')}}
            @if( isset($facility) && file_exists('uploads/facility/'.$facility->logo))
                <img src="{{URL::to('/').'/uploads/facility/'.$facility->logo}}" alt="{{$facility->logo}}" width="100" height="100">
            @endif
            @if ($errors->has('logo'))
                <span class="text-danger"> {{$errors->first('logo')}}</span>
            @endif
        </div>
    </div>

</div>