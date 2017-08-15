<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label>Title</label>
            {{Form::text('title',null,['class'=>'form-control', 'placeholder'=>'Navigation Title'])}}
            @if ($errors->has('title'))
                <span class="text-danger"> {{$errors->first('title')}}</span>
            @endif
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>Parent</label>
            {{Form::select('parent_id', $parents_list, null,['class'=>'form-control'])}}
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
</div>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label>status</label>
            <label class="switch">
                {{Form::checkbox('status', null, null)}}
                <span class="slider round"></span>

            </label>
        </div>
    </div>

</div>