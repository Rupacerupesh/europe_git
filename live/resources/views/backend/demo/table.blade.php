@extends('backend.header')
@section('content')
    <section class="content-header">
        <h1>
           <span>
        <a href="{{ url('home/navigation/create') }}">
            <button type="button" class="btn btn-success" id="viewbtn">
                Add New
            </button>
        </a>
    </span>
        </h1>
    </section>
    @if(Session::has('message'))
        <div class="content_top">
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{ session('message') }}  <!-- equivalent to Session::get('flash_message') -->
            </div>
        </div>
    @endif
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>SN</th>
                <th>Title</th>
                <th>Parent</th>
                <th>Url</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                <?php
                $i=1;
                ?>
                @foreach($navigation_list as $navigation)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{$navigation->title}}</td>
                        <td>{{$navigation->parent_id}}</td>
                        <td>{{$navigation->url}}</td>
                        <td>{{$navigation->status}}</td>
                        <td>
                            <a type="button" type="button" class="btn btn-primary btn-sm"
                               href="{{ route('navigation.edit', array($navigation->id)) }}">
                                <i class="flaticon-edit"> Edit</i>
                            </a>
                            <form action="{{ route('navigation.destroy', array($navigation->id)) }}" method="POST" class="delete-user-form">
                                <input name="_method" value="DELETE" type="hidden">
                                {!! csrf_field() !!}

                                <button type="submit" class="btn btn-sm btn-danger"onclick="return confirm('Are you sure, you want to delete it?');">
                                    <i class="flaticon-delete-button">Delete</i>
                                </button>

                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

@stop