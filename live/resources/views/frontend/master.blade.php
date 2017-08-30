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
    <link rel="stylesheet" href="{{URL::to('/')}}/live/public/lib/css/easy-responsive-tabs.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/live/public/lib/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/live/public/lib/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/live/public/lib/css/isotope.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/live/public/css/style.css">


    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyB__qd-dGSVofxmpga8YBEFRsxgIMWH79Q&callback=initMap"></script>

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
            @foreach($navigation_parent as $parent)

            <li><a href="#">{{$parent->title}}</a>
            <?php
              $count=0;
            ?>
            @foreach($navigation_children as $child)
            <?php 
            if($count==0){
              echo "<ul>";

            }
                $count++;
            ?>
            @if($child->parent_id==$parent->id)
             <li><a href="#">{{$child->title}}</a></li>
            @endif
            @endforeach
            @if($count>0)
            </ul>
            <?php
              $count=0;
            ?>
            @endif
            </li>
            @endforeach
            <!-- <li><a href="#">About</a></li>
            <li><a href="#">Service</a></li>
            <li><a href="#">Insitution</a>
              <ul>
                <li><a href="#">As Institution</a></li>
                <li><a href="#">As Institution</a></li>
              </ul>
            </li>
            <li><a href="#">Contact</a></li> -->
          </ul>
          <!-- .main-nav -->
        </nav>
        <!-- #primary-nav -->
      </div>
    </div>
    <!-- .bottom-header -->
  </header> 
  <!-- #header -->
@yield('content')
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
<script src="{{URL::to('/')}}/live/public/lib/js/easyResponsiveTabs.js"></script>
<script src="{{URL::to('/')}}/live/public/lib/js/jquery.isotope.js"></script>
<script src="{{URL::to('/')}}/live/public/lib/js/plugins.js"></script>
<script src="{{URL::to('/')}}/live/public/lib/js/scripts.js"></script>
<!--[if lt IE 9]>
<script src="lib/js/vendor/selectivizr-min.js"></script>
<![endif]-->
</body>
</html>