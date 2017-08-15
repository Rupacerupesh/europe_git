@extends('backend.header')
@section('content')
    <section class="content-header">
        <h1>
           <span >
                <a href="{{ url('home/navigation/create') }}">
                    <button type="button" class="btn btn-success " id="viewbtn">
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
    <div class="table-responsive backend-nav">
        <table class="table table-bordered">
        <tbody>

        @foreach($navigation_parent as $navigation)
            <tr class="nav-parent">
                <td><strong>{{$navigation->title}}</strong></td>
                <td class="text-right">
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
            @foreach($navigation_children as $navigation_child)
                @if($navigation_child->parent_id==$navigation->id)
                    <tr class="nav-child">
                        <td>{{$navigation_child->title}}</td>

                        <td class="text-right">
                            <a type="button" type="button" class="btn btn-primary btn-sm"
                               href="{{ route('navigation.edit', array($navigation_child->id)) }}">
                                <i class="flaticon-edit"> Edit</i>
                            </a>
                            <form action="{{ route('navigation.destroy', array($navigation_child->id)) }}" method="POST" class="delete-user-form">
                                <input name="_method" value="DELETE" type="hidden">
                                {!! csrf_field() !!}

                                <button type="submit" class="btn btn-sm btn-danger"onclick="return confirm('Are you sure, you want to delete it?');">
                                    <i class="flaticon-delete-button">Delete</i>
                                </button>

                            </form>
                        </td>
                    </tr>
                @endif
            @endforeach
        @endforeach
        </tbody>

    </table>
    </div>


@stop