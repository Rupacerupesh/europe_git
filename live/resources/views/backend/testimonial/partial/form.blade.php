<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label>Fullname</label>
            {{Form::text('fullname',null,['class'=>'form-control', 'placeholder'=>'fullname'])}}
            @if ($errors->has('fullname'))
                <span class="text-danger"> {{$errors->first('fullname')}}</span>
            @endif
        </div>
    </div>
        <div class="col-md-4">
        <div class="form-group">
            <label>Description</label>
            {{Form::textarea('description',null,['class'=>'form-control', 'placeholder'=>'description'])}}
            @if ($errors->has('description'))
                <span class="text-danger"> {{$errors->first('description')}}</span>
            @endif
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>address</label>
            {{Form::text('address',null,['class'=>'form-control', 'placeholder'=>'address'])}}
            @if ($errors->has('address'))
                <span class="text-danger"> {{$errors->first('address')}}</span>
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



</div>