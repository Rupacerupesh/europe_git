@extends('backend.header')
@section('content')
 
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>SN</th>
                <th>Name</th>
                <th>Address</th>
                <th>Email</th>
                <th>Phone No</th>
                <th>Education Level</th>
                <th>Intrested Course</th>
                <th>Intrested Country</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $i=1;
            ?>
            @foreach($application as $app)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $app->full_name }}</td>
                    <td>{{ $app->address }}</td>
                    <td>{{ $app->email }}</td>
                    <td>{{ $app->contact_no }}</td>
                    <td>
                    @if($app->education_level_id==1)
                    {{'SLC'}}

                    @elseif($app->education_level_id==2)
                    {{'10+2'}}

                    @elseif($app->education_level_id==3)
                    {{'Bachelor'}}

                    @elseif($app->education_level_id==4)
                    {{'Master'}}

                    @endif
                    </td>
                    <td>
					@if($app->intrested_course_id==1)
                    {{'Course 1'}}

                    @elseif($app->intrested_course_id==2)
                    {{'Course 2'}}

                    @elseif($app->intrested_course_id==3)
                    {{'Course 3'}}

                    @elseif($app->intrested_course_id==4)
                    {{'Course 4'}}

                    @endif
                    </td>
                    <td>
                    @if($app->intrested_country_id==1)
                    {{'Nepal'}}

                    @elseif($app->intrested_country_id==2)
                    {{'China'}}

                    @elseif($app->intrested_country_id==3)
                    {{'India'}}

                    @elseif($app->intrested_country_id==4)
                    {{'Bhutan'}}

                    @endif

                    </td>


                    <td>
                    	<a type="button" type="button" class="btn btn-success btn-sm"
                           href="{{ route('applications.show', array($app->id)) }}">
                            <i class="flaticon-edit"> View</i>
                        </a>
                         <form action="{{ route('applications.destroy', array($app->id)) }}" method="POST" class="delete-user-form">
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
    {{ $application->links() }}

@stop