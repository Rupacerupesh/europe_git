@extends('backend.header')
@section('content')
<div class="col-md-12">
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            {{--<ul>--}}
            {{--@foreach ($errors->all() as $error)--}}
            {{--<li>{{ $error }}</li>--}}
            {{--@endforeach--}}
            {{--</ul>--}}
        </div>
    @endif
    {{ Form::open(['url'=>'home/institution', 'method'=>'POST', 'class' => 'common-form eq-half-form','enctype'=>'multipart/form-data' ]) }}

        @include('backend.institution.partial.form')
        <button type="submit" class="btn btn-info btn-fill">Submit
        </button>
        <div class="clearfix"></div>
    {!! Form::close() !!}
</div>
    @stop