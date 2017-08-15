<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Europe Study Center</title>
    <meta name="description" content="">
    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

    <!--Stylesheet
    ================================================== -->
    <link rel="stylesheet" href="{{URL::to('/')}}/live/public/lib/css/screen.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/live/public/lib/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/live/public/lib/css/slicknav.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/live/public/lib/css/animated.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/live/public/lib/css/select2.min.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/live/public/lib/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/live/public/lib/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/live/public/lib/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/live/public/lib/css/isotope.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/live/public/css/style.css">

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Google Webfonts
    ================================================== -->
    <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">

    <script src="{{URL::to('/')}}/live/public/lib/js/vendor/modernizr-2.7.1.min.js"></script>
</head>
<body>
<header id="header">  
   <div class="top-header">
      <div class="container clearfix">
        <div class="social col-sm-3 col-xs-5">
          <a href="#" target="_blank"><i class="fa fa-facebook"></i></a> 
          <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
           <a href="#" target="_blank"><i class="fa fa-youtube"></i></a> 
           <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
         </div>
        <!-- social -->

        <!-- top-right-menu -->
        <div class="alignright text-right col-sm-9 col-xs-7"> 
          <a href="{{URL::to('/apply')}}" class="btn btn-input btn-2">apply now</a>
        </div>
      </div>
  </div>
  <!-- .top-header -->
  <div class="bottom-header">
    <div class="container clearfix">
      <h1 id="logo" class="col-sm-3 col-xs-5">
        <a href="index.html">
          <img src="{{URL::to('/')}}/live/public/images/logo.png" alt=""/>
        </a>
      </h1>
      <!-- #logo -->
      <nav id="primary-nav" class="col-sm-9 col-xs-7">
        <ul class="main-nav common-nav">
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Service</a></li>
          <li><a href="#">Insitution</a>
            <ul>
              <li><a href="#">As Institution</a></li>
              <li><a href="#">As Institution</a></li>
            </ul>
          </li>
          <li><a href="#">Contact</a></li>
        </ul>
        <!-- .main-nav -->
      </nav>
      <!-- #primary-nav -->
    </div>
  </div>
  <!-- .bottom-header -->
</header> 
<!-- #header -->

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

<footer id="footer">
    <div class="top-footer">
        <div class="container">
            <ul class="footer-menus">
                <li class="col-sm-4 col-xs-6">
        <span class="menu-title">
          Insitution
        </span>
                    <a href="#">
                        Australia
                    </a>
                    <a href="#">
                        Canada
                    </a>
                    <a href="#">
                        America
                    </a>
                    <a href="#">
                        America
                    </a>
                    <a href="#">
                        America
                    </a>
                </li>
                <li class="col-sm-4 col-xs-6">
        <span class="menu-title">
          Consultants
        </span>
                    <a href="#">
                        Australia
                    </a>
                    <a href="#">
                        Canada
                    </a>
                    <a href="#">
                        America
                    </a>
                    <a href="#">
                        America
                    </a>
                    <a href="#">
                        America
                    </a>
                </li>
                <li class="col-sm-4 col-xs-6">
        <span class="menu-title">
          Students
        </span>
                    <a href="#">
                        Australia
                    </a>
                    <a href="#">
                        Canada
                    </a>
                    <a href="#">
                        America
                    </a>
                    <a href="#">
                        America
                    </a>
                    <a href="#">
                        America
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="bottom-footer">
        <div class="container">
            <a class="credit" href="#" target="_blank" style=" display:inline-block;">Website Designed and Developed By:
                <img src="{{URL::to('/')}}/live/public/images/logo.png"></a>
        </div>
    </div>

</footer>


<script src="{{URL::to('/')}}/live/public/lib/js/vendor/jquery-1.11.0.min.js"></script>
<script src="{{URL::to('/')}}/live/public/lib/js/vendor/bootstrap.min.js"></script>
<script src="{{URL::to('/')}}/live/public/lib/js/select2.min.js"></script>
<script src="{{URL::to('/')}}/live/public/lib/js/jquery.isotope.js"></script>
<script src="{{URL::to('/')}}/live/public/lib/js/plugins.js"></script>
<script src="{{URL::to('/')}}/live/public/lib/js/scripts.js"></script>
<!--[if lt IE 9]>
<script src="lib/js/vendor/selectivizr-min.js"></script>
<![endif]-->
</body>
</html>