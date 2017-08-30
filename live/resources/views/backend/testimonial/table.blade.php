@extends('backend.header')
@section('content')
    <section class="content-header">
        <h1>
           <span>
        <a href="{{ url('home/testimonial/create') }}">
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
                <th>Fullname</th>
                <th>Description</th>
                <th>Address</th>
              
                <th>Publish</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                <?php
                $i=$testimonial->firstItem();
                ?>
                @foreach($testimonial as $testimonals)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{$testimonals->fullname}}</td>
                        <td>{{$testimonals->description}}</td>
                        <td>{{$testimonals->address}}</td>
                     
                        <td>
                        @if($testimonals->status== 0)
                        InActive
                        @else
                        Active
                        @endif
                        </td>
                        <td>
                            <a type="button" type="button" class="btn btn-primary btn-sm"
                               href="{{ route('testimonial.edit', array($testimonals->id)) }}">
                                <i class="flaticon-edit"> Edit</i>
                            </a>
                            <form action="{{ route('testimonial.destroy', array($testimonals->id)) }}" method="POST" class="delete-user-form">
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
    {{ $testimonial->links() }}
@stop