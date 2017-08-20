@extends('backend.header')
@section('content')
<section class="content-header">
    <h1>
     <span>
        <a href="{{ url('home/interestedcourse/create') }}">
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
                
                <th>Publish</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i=$interestedcourse->firstItem();
            ?>
            @foreach($interestedcourse as $interestedcourses)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{$interestedcourses->title}}</td>
                <td><img src="{{URL::to('/').'/uploads/banners_resize/'.$interestedcourses->image}}" alt="{{$interestedcourses->image}}" ></td>
                
                <td>
                   @if($interestedcourses->status== 0)
                   Inactive
                   @else 
                   Active
                   @endif
               </td>
               <td>
                <a type="button" type="button" class="btn btn-primary btn-sm"
                href="{{ route('interestedcourse.edit', array($interestedcourses->id)) }}">
                <i class="flaticon-edit"> Edit</i>
            </a>
            <form action="{{ route('interestedcourse.destroy', array($interestedcourses->id)) }}" method="POST" class="delete-user-form">
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
{{ $interestedcourse->links() }}
@stop