@extends('backend.header')
@section('content')
    <section class="content-header">
        <h1>
           <span>
        <a href="{{ url('home/advertisement/create') }}">
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
                <th>Image</th>
                <th>Url</th>
                <th>Publish</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                <?php
                $i=$advertisement_list->firstItem();
                ?>
                @foreach($advertisement_list as $advertisement)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{$advertisement->title}}</td>
                        <td><img src="{{URL::to('/').'/uploads/advertisements_resize/'.$advertisement->image}}" alt="{{$advertisement->image}}" width="50" height="50"></td>
                        <td>{{$advertisement->url}}</td>
                        <td>@if($advertisement->status==1)
                                <i class="fa-tick"> Active</i>
                            @else
                                <i class="fa-tick"> Inactive</i>
                            @endif </td>
                        <td>
                            <a type="button" type="button" class="btn btn-primary btn-sm"
                               href="{{ route('advertisement.edit', array($advertisement->id)) }}">
                                <i class="flaticon-edit"> Edit</i>
                            </a>
                            <form action="{{ route('advertisement.destroy', array($advertisement->id)) }}" method="POST" class="delete-user-form">
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
        Showing {{ $advertisement_list->firstItem() }} to {{ $advertisement_list->lastItem() }} of {{ $advertisement_list->total() }} entries
    </div>

    {{ $advertisement_list->links() }}
@stop