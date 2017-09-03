@extends('frontend.master')
@section('content')

<main id="content">
    <section class="form-section">
        <div class="container clearfix">
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
            @if(Session::has('message'))
                <div class="content_top">
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{ session('message') }}  <!-- equivalent to Session::get('flash_message') -->
                    </div>
                </div>
            @endif
            {{--<form action="" class="common-form eq-half-form" >--}}
            {{ Form::open(['url'=>'/apply', 'method'=>'POST', 'class' => 'common-form eq-half-form' ]) }}
            <h3 class="form-title text-center">
                Apply Form
            </h3>
            <!-- .form-title -->
            <div class="form-group-wrapper clearfix">
                <div class="form-group">
                    <label for="txt">Student Name:</label>
                    <input type="text" class="form-control" id="txt" name="full_name" value="{{old('full_name')}}">
                    @if ($errors->has('full_name'))
                        <span class="text-danger"> {{ 'Student Name is required' }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="addr">Address:</label>
                    <input type="text" class="form-control" id="addr" name="address" value="{{old('address')}}">
                    @if ($errors->has('address'))
                        <span class="text-danger"> {{ 'Address is required' }}</span>
                    @endif
                </div>

                <div class="form-group">
                    <label>Country:</label>
                    <select class="search-form" name="country_id" value="{{old('country_id')}}">
                        <option value="">Select Country</option>
                        <option value="1"@if(old('country_id')==1) {{'selected'}}@endif>Nepal</option>
                        <option value="2"@if(old('country_id')==2) {{'selected'}}@endif>China</option>
                        <option value="3"@if(old('country_id')==3) {{'selected'}}@endif>India</option>
                        <option value="4"@if(old('country_id')==4) {{'selected'}}@endif>Bhutan</option>
                    </select>
                    @if ($errors->has('country_id'))
                        <span class="text-danger"> {{ 'Please select country' }}</span>
                    @endif
                    <!-- .search-form -->
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}">
                    @if ($errors->has('email'))
                        <span class="text-danger"> {{$errors->first('email')}}</span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="cnt">Contact No:</label>
                    <input type='tel'  class="form-control" id="cnt" name="contact_no" value="{{old('contact_no')}}">
                    @if ($errors->has('contact_no'))
                        <span class="text-danger"> {{$errors->first('contact_no')}}</span>
                    @endif
                </div>

                <div class="form-group">
                    <label>Highest Level of Education:</label>
                    <select class="search-form" name="education_level_id" value="{{old('education_level_id')}}">
                        <option value="">Select Education Level</option>
                        <option value="1" @if(old('education_level_id')==1) {{'selected'}}@endif>SLC</option>
                        <option value="2" @if(old('education_level_id')==2) {{'selected'}}@endif>10+2</option>
                        <option value="3" @if(old('education_level_id')==3) {{'selected'}}@endif>Bachelor</option>
                        <option value="4" @if(old('education_level_id')==4) {{'selected'}}@endif>Master</option>
                    </select>
                    @if ($errors->has('education_level_id'))
                        <span class="text-danger"> {{'Please select your highest education level'}}</span>
                    @endif
                    <!-- .search-form -->
                </div>

                <div class="form-group">
                    <label for="fct">Faculty:</label>
                    <input type="text" class="form-control" id="fct" name="faculty" value="{{old('faculty')}}">
                    @if ($errors->has('faculty'))
                        <span class="text-danger"> {{'Education faculty is required'}}</span>
                    @endif
                </div>

                <div class="form-group">
                    <label>Intrested Course:</label>
                    <select class="search-form" name="intrested_course_id" value="{{old('education_level_id')}}">
                        <option value="">Select Course</option>
                        <option value="1"@if(old('intrested_course_id')==1) {{'selected'}}@endif>Course 1</option>
                        <option value="2" @if(old('intrested_course_id')==2) {{'selected'}}@endif>Course 2</option>
                        <option value="3" @if(old('intrested_course_id')==3) {{'selected'}}@endif>Course 3</option>
                        <option value="4" @if(old('intrested_course_id')==4) {{'selected'}}@endif>Course 4</option>
                    </select>
                    @if ($errors->has('intrested_course_id'))
                        <span class="text-danger"> {{'Please select your intrested course'}}</span>
                @endif
                    <!-- .search-form -->
                </div>

                <div class="form-group">
                    <label>Intrested Country:</label>
                    <select class="search-form" name="intrested_country_id" value="{{old('intrested_country_id')}}">
                        <option value="">Select Country</option>
                        <option value="1" @if(old('intrested_country_id')==1) {{'selected'}}@endif>Nepal</option>
                        <option value="2" @if(old('intrested_country_id')==2) {{'selected'}}@endif>China</option>
                        <option value="3" @if(old('intrested_country_id')==3) {{'selected'}}@endif>India</option>
                        <option value="4" @if(old('intrested_country_id')==4) {{'selected'}}@endif>Bhutan</option>
                    </select>
                    @if ($errors->has('intrested_country_id'))
                        <span class="text-danger"> {{'Please select country of your intrest'}}</span>
                @endif
                    <!-- .search-form -->
                </div>


                <div class="form-group">
                    <div class="control-group">
                        <h3>Are you married?</h3>
                        <label class="control control--radio">Yes
                            <input type="radio" name="married_status" value="1" @if(old('married_status')=='1'){{'checked'}}@endif/>
                            <div class="control__indicator"></div>
                        </label>
                        <label class="control control--radio">No
                            <input type="radio" name="married_status" value="0" @if(old('married_status')=='0'){{'checked'}}@endif/>
                            <div class="control__indicator"></div>
                        </label>
                        @if ($errors->has('married_status'))
                            <span class="text-danger"> {{'Please select your marital status'}}</span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="small-field-group">
                        <h3>Test scores if any:</h3>
                        <label class="control">IELTS
                            <input type="text" class="form-control" name="ielts" value="{{old('ielts')}}"/>

                        </label>
                        <label class="control">TOEFL
                            {{ Form::text('tofel', null, ['class' => 'form-control']) }}
                        </label>


                        <label class="control control--checkbox">SAT
                            {{ Form::text('sat', null, ['class' => 'form-control']) }}
                        </label>
                        <label class="control control--checkbox">GRE
                            {{ Form::text('gre', null, ['class' => 'form-control']) }}
                        </label>
                        <div class="form-group">
                            <label for="othr">Other:</label>
                            <input type="text" class="form-control" id="othr" name="other_test"
                                   value="{{old('other_test')}}">
                        </div>


                    </div>
                </div>
                <div class="form-group">
                    <label for="othr">Work experience if any:</label>
                    {{ Form::textarea('work_experience', null, ['class' => 'form-control']) }}
                </div>

            </div>

            <div class="input-submit text-center">
                <button type="submit" class="btn btn-5">Submit</button>
            </div>
            {!! Form::close() !!}
        </div>
    </section>
    <!-- .form-section -->

</main>
<!-- #content -->
@stop