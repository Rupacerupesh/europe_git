@extends('frontend.master')
@section('content')
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
    <section class="banner-inner">
    <h1 class="insitution-logo">
        <img src="{{URL::to('/live/public/uploads/inst-logo.jpg')}}" alt=""/>
    </h1>
        <figure class="banner-img">
            <img src="{{URL::to('/live/public/uploads/slider.jpg')}}" class="img-responsive" height="400" alt=""/>
        <figcaption>Group of Russian State Universities - RACUS</figcaption>
        </figure>
        <!-- .banner-img -->
    </section>
    <!-- .banner-inner -->

    <section class="details-section">
            <div id="ChildVerticalTab_1">
        <ul class="resp-tabs-list ver_1">
            <li>Responsive Tab 1</li>
            <li>Responsive Tab 2</li>
            <li>Responsive Tab 3</li>
            <li>Long name Responsive Tab 4</li>
        </ul>
        <div class="resp-tabs-container ver_1">
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor. Integer laoreet placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur nibh quis urna gravida mollis.</p>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet, lerisque commodo. Nam porta cursus lectusconsectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor. Integer laoreet placerat suscipit. Sed sodales sce. Proin nunc erat, gravida a facilisis quis, ornare id lectus</p>
            </div>
            <div>
                <p>Suspendisse blandit velit Integer laoreet placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur nibh quis Integer laoreet placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur nibh quis urna gravid urna gravid eget erat suscipit in malesuada odio venenatis.</p>
            </div>
            <div>
                <p>d ut ornare non, volutpat vel tortor. InLorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor. Integer laoreet placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur nibh quis urna gravida mollis.t in malesuada odio venenatis.</p>
            </div>
        </div>
    </div>
    </section>
    <!-- .details-section -->

</main>
<!-- #content -->

@stop

