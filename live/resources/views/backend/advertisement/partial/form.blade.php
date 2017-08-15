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
            <label for="exampleInputEmail1">URL</label>
            {{Form::text('url',null,['class'=>'form-control', 'placeholder'=>'URL:eg /home/test'])}}
            @if ($errors->has('url'))
                <span class="text-danger"> {{$errors->first('url')}}</span>
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
            @if( isset($advertisement) && file_exists('uploads/advertisements/'.$advertisement->image))
                <img src="{{URL::to('/').'/uploads/advertisements/'.$advertisement->image}}" alt="{{$advertisement->image}}" width="100" height="100">
            @endif
            @if ($errors->has('image'))
                <span class="text-danger"> {{$errors->first('image')}}</span>
            @endif
        </div>
    </div>

</div>