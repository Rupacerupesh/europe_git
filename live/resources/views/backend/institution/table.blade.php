@extends('backend.header')
@section('content')
    <section class="content-header">
        <h1>
           <span>
        <a href="{{ url('home/institution/create') }}">
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
                <th>Logs</th>
                <th>Established Year</th>
                <th>Publish</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                <?php
                $i=$institution_list->firstItem();
                ?>
                @foreach($institution_list as $institution)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{$institution->title}}</td>
                       <td><img src="{{URL::to('/').'/uploads/institution/logo_resize/'.$institution->logo}}" alt="{{$institution->logo}}" width="50" height="50"></td>
                        <td>{{$institution->estd_year}}</td>
                      

                        <td>@if($institution->status==1)
                                <i class="fa-tick"> Active</i>
                            @else
                                <i class="fa-tick"> Inactive</i>
                            @endif </td>
                        <td>
                            <a type="button" type="button" class="btn btn-primary btn-sm"
                               href="{{ route('institution.edit', array($institution->id)) }}">
                                <i class="flaticon-edit"> Edit</i>
                            </a>
                            <form action="{{ route('institution.destroy', array($institution->id)) }}" method="POST" class="delete-user-form">
                                <input name="_method" value="DELETE" type="hidden">
                                {!! csrf_field() !!}

                                <button type="submit" class="btn btn-sm btn-danger"onclick="return confirm('Are you sure, you want to delete it?');">
                                    <i class="flaticon-delete-button">Delete</i>
                                </button>

                            </form>
                            <a type="button" type="button" class="btn btn-primary btn-sm"
                               href="{{ route('institution.addMore', array($institution->id)) }}">
                                <i class="flaticon-edit"> More</i>
                            </a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        Showing {{ $institution_list->firstItem() }} to {{ $institution_list->lastItem() }} of {{ $institution_list->total() }} entries
    </div>

    {{ $institution_list->links() }}
@stop