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
            {!! Form::model($institution, [
                    'route' => ['institution.update', $institution->id],
                    'class' => 'form-horizontal',
                    'method'=> 'PUT',
                    'enctype'=>'multipart/form-data',
                ])
            !!}
        @include('backend.institution.partial.form')
        <button type="submit" class="btn btn-info btn-fill">Update
        </button>
        <div class="clearfix"></div>
        {!! Form::close() !!}
    </div>
@stop