
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
    <section class="banner-section">
      <div id="home-banner" class="owl-carousel owl-theme">
        <div class="item">
          <figure>
            <img src="{{URL::to('/live/public/uploads/slider.jpg')}}" alt="">
          </figure>
        </div>
        <div class="item">
          <figure>
            <img src="{{URL::to('/live/public/uploads/slider.jpg')}}" alt="">
          </figure>
        </div>
        <div class="item">
          <figure>
            <img src="{{URL::to('/live/public/uploads/slider.jpg')}}" alt="">
          </figure>
        </div>
        <div class="item">
          <figure>
            <img src="{{URL::to('/live/public/uploads/slider.jpg')}}" alt="">
          </figure>
        </div>
      </div>
    </section>
    <!-- .banner-section -->

    <section class="form-section">
      <div class="container clearfix">
        <!-- .col-sm-4 col-xs-6 -->
        <div class="col-xs-6">
          <form class="common-form" action="">
            <h3 class="form-title">
              Find courses
            </h3>
            <!-- .form-title -->
            <div class="form-group">
              <select class="search-form">
                <option value="AL">Alabama</option>
                <option value="WY">Wyoming</option>
                <option value="AL">Alabama</option>
                <option value="WY">Wyoming</option>
              </select>
              <!-- .search-form -->
            </div>
            <div class="form-group">
              <label for="txt">Keywords:</label>
              <input type="text" class="form-control" id="txt">
            </div>
            <button type="submit" class="btn btn-5">Submit</button>
          </form>
        </div>
        <!-- .col-sm-4 col-xs-6 -->
        <div class="col-xs-6">
          <form action="" class="common-form">
            <h3 class="form-title">
              Find insitution
            </h3>
            <!-- .form-title -->
            <div class="form-group">
              <select class="search-form">
                <option value="AL">Alabama</option>
                <option value="WY">Wyoming</option>
                <option value="AL">Alabama</option>
                <option value="WY">Wyoming</option>
              </select>
              <!-- .search-form -->
            </div>
            <div class="form-group">
              <label for="txt">Keywords:</label>
              <input type="text" class="form-control" id="txt">
            </div>
            <button type="submit" class="btn btn-5">Submit</button>
          </form>
        </div>
        <!-- .col-sm-4 col-xs-6 -->
      </div>
    </section>
    <!-- .form-section -->

    <section class="work-intro-section">
      <header class="text-center">
        <h2>Learn How You Can Benefit from Uniagents as</h2>
      </header>

      <div class="container clearfix">
        <div class="col-xs-6 col-sm-4">
         <section class="intro-sec">
           <header>
             <i class="fa fa-university"></i>
             <h3>insitution</h3>
           </header>
           <figure>
             <img src="{{URL::to('/')}}/live/public/uploads/insitution.jpg" alt=""/>
           </figure>
           <div class="intro-sec">
             <p>
              Enhance your marketing efforts with more customized, relevant information. 
            </p>
            <a href="#" class="btn btn-5">Read more</a>
          </div>
          <!-- .intro-sec -->
        </section>
        <!-- .intro-sec -->
      </div>

      <div class="col-xs-6 col-sm-4">
       <section class="intro-sec">
         <header>
           <i class="fa fa-user"></i>
           <h3>students</h3>
         </header>
         <figure>
           <img src="{{URL::to('/')}}/live/public/uploads/insitution.jpg" alt=""/>
         </figure>
         <div class="intro-sec">
           <p>
            Enhance your marketing efforts with more customized, relevant information. 
          </p>
          <a href="#" class="btn btn-5">Read more</a>
        </div>
        <!-- .intro-sec -->
      </section>
      <!-- .intro-sec -->
    </div>

  </div>
</section>
<!-- work-intro-section -->

<section class="figure-desc">
 <div class="container clearfix">
   <div class="desc-part col-sm-6">
     <h2>Griffith Content demo</h2>
     <p>In order to understand how your institution can benefit from our services, you must book a consultation session with one of our advisors. The advisor will look in to your requirements and based on that you will receive set of recommendations that will help you in making a wise decision over choosing a subscription plan. In case we are not able to provide a service as per your requirements we will be pleased to direct you towards any independent third party services in our knowledge (not associated to us in any manner). Our aim is to build relationship with our partners.</p>
     <p>We will be pleased to direct you towards any independent third party services in our knowledge (not associated to us in any manner). Our aim is to build relationship with our partners</p>
   </div>
   <!-- .desc-part -->
   <figure class="col-sm-6">
     <a href="#">
       <img src="{{URL::to('/')}}/live/public/uploads/intro-video.png" alt=""/>
     </a>
   </figure>
 </div>
</section>
<!-- .figure-desc -->

<section id="home-feature">
 <div class="animated-holder">
  <section class="feature first">
    <header>
      <span class="icon">
        <img src="{{URL::to('/')}}/live/public/uploads/student-network.png" alt=""/>
      </span>
      <h3>Bridge the Global Marketing Gap</h3>
      <p>Enhance your marketing efforts to create more customized, innovative</p>
    </header> 
    <a href="#" class="pop-btn" data-toggle="modal" data-target="#step1"></a>
  </section>
  <section class="feature second">
    <header>
      <span class="icon">
        <img src="{{URL::to('/')}}/live/public/uploads/student-network.png" alt=""/>
      </span>
      <h3>Bridge the Global Marketing Gap</h3>
      <p>Enhance your marketing efforts to create more customized, innovative</p>
    </header> 
    <a href="#" class="pop-btn" data-toggle="modal" data-target="#step2"></a>
  </section>
  <section class="feature third">
    <header>
      <span class="icon">
        <img src="{{URL::to('/')}}/live/public/uploads/student-network.png" alt=""/>
      </span>
      <h3>Bridge the Global Marketing Gap</h3>
      <p>Enhance your marketing efforts to create more customized, innovative</p>
    </header> 
    <a href="#" class="pop-btn" data-toggle="modal" data-target="#step3"></a>
  </section>
  <section class="feature fourth">
    <header>
      <span class="icon">
        <img src="{{URL::to('/')}}/live/public/uploads/student-network.png" alt=""/>
      </span>
      <h3>Bridge the Global Marketing Gap</h3>
      <p>Enhance your marketing efforts to create more customized, innovative</p>
    </header> 
    <a href="#" class="pop-btn" data-toggle="modal" data-target="#step4"></a>
  </section>
  <section class="feature fifth">
    <header>
      <span class="icon">
        <img src="{{URL::to('/')}}/live/public/uploads/student-network.png" alt=""/>
      </span>
      <h3>Bridge the Global Marketing Gap</h3>
      <p>Enhance your marketing efforts to create more customized, innovative</p>
      <a href="#" class="pop-btn" data-toggle="modal" data-target="#step5"></a>
    </header> 
  </section>
  <section class="feature sixth">
    <header>
      <span class="icon">
        <img src="{{URL::to('/')}}/live/public/uploads/student-network.png" alt=""/>
      </span>
      <h3>Bridge the Global Marketing Gap</h3>
      <p>Enhance your marketing efforts to create more customized, innovative</p>
    </header> 
    <a href="#" class="pop-btn" data-toggle="modal" data-target="#step6"></a>
  </section>
  <section class="feature seventh">
    <header>
      <span class="icon">
        <img src="{{URL::to('/')}}/live/public/uploads/student-network.png" alt=""/>
      </span>
      <h3>Bridge the Global Marketing Gap</h3>
      <p>Enhance your marketing efforts to create more customized, innovative</p>
    </header> 
    <a href="#" class="pop-btn" data-toggle="modal" data-target="#step7"></a>
  </section>
  <section class="feature eight">
    <header>
      <span class="icon">
        <img src="{{URL::to('/')}}/live/public/uploads/student-network.png" alt=""/>
      </span>
      <h3>Bridge the Global Marketing Gap</h3>
      <p>Enhance your marketing efforts to create more customized, innovative</p>
    </header> 
    <a href="#" class="pop-btn" data-toggle="modal" data-target="#step8"></a>
  </section>
  <figure class="center-logo">
    <img src="{{URL::to('/')}}/live/public/uploads/logo-center.png" alt="">
  </figure>
</div>
</section>
<!-- .home-feature -->

<section id="isotope">
  <div class="container">
    <div class="col-md-12">
      <h2>Services</h2>

      <p class="para">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
        eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes
      </p>

      <div id="filters">
        <ul class="option-lists clearfix" data-option-key="filter">
                                <!-- <li><a href="#filter" data-option-value="*" class="selected">
                                    <i class="fa fa-list"></i><span class="filter-title">All</span>
                                  </a></li> -->
                                  <li><a href="#filter" data-option-value=".ins" class="selected">
                                    <i class="fa fa-university"></i><span class="filter-title">Featured Institutions</span>
                                  </a></li>
                                  <li><a href="#filter" data-option-value=".cou">
                                    <i class="fa fa-users"></i><span class="filter-title">Featured Consultants</span>
                                  </a></li>
                                </ul>
                                <!--.option-lists-->
                              </div>
                              <!--#filters-->

                            </div>
                          </div>
                          <div class="container">
                            <div class="row">
                              <!--Isotope Section-->
                              <div id="isotopes-container" class="col-sm-6 col-md-8">
                                <div class="col-sm-5 isotope-item ins">
                                  <section>
                                    <figure class="feature-logo">
                                      <img src="{{URL::to('/')}}/live/public/uploads/inst-logo.jpg" alt=""/>
                                    </figure>
                                    <!-- .feature-logo -->
                                    <div class="desc-part">
                                      <h3>Lorem ipsum dolor sit amet</h3>
                                      <p>Toronto Institute of Pharmaceutical Technology (TIPT®) is Canada’s premier pharmaceutical Institute of education, technology.
                                      </p>
                                    </div>
                                    <div class="hover-part">
                                      <div class="txt-holder">
                                        <span class="name">
                                          Petaling Jaya, Malaysia Language School
                                        </span>
                                        <span class="type">
                                          Funding Type : Private
                                        </span>
                                        <span class="btns">
                                          <a href="#" class="btn btn-5">apply</a>
                                          <a href="#" class="btn btn-5">contact</a>
                                        </span>
                                        <span class="profile-link">
                                          <a href="#" class="btn btn-more">
                                            view profile
                                          </a>
                                        </span>
                                      </div>
                                    </div>
                                    <!-- .hover-part -->
                                  </section>
                                </div>
                                <!--.isotope-item-->

                                <div class="col-sm-5 isotope-item cou">
                                  <section>
                                    <figure class="feature-logo">
                                      <img src="{{URL::to('/')}}/live/public/uploads/inst-logo.jpg" alt=""/>
                                    </figure>
                                    <!-- .feature-logo -->
                                    <div class="desc-part">
                                      <h3>Lorem ipsum dolor sit amet</h3>
                                      <p>Toronto Institute of Pharmaceutical Technology (TIPT®) is Canada’s premier pharmaceutical Institute of education, technology.
                                      </p>
                                    </div>
                                    <div class="hover-part">
                                      <div class="txt-holder">
                                        <span class="name">
                                          Petaling Jaya, Malaysia Language School
                                        </span>
                                        <span class="type">
                                          Funding Type : Private
                                        </span>
                                        <span class="profile-link">
                                          <a href="#" class="btn btn-more">
                                            view profile
                                          </a>
                                        </span>
                                      </div>
                                    </div>
                                    <!-- .hover-part -->
                                  </section>
                                </div>
                                <!--.isotope-item-->

                                <div class="col-sm-5 isotope-item ins">
                                  <section>
                                    <figure class="feature-logo">
                                      <img src="{{URL::to('/')}}/live/public/uploads/inst-logo.jpg" alt=""/>
                                    </figure>
                                    <!-- .feature-logo -->
                                    <div class="desc-part">
                                      <h3>Lorem ipsum dolor sit amet</h3>
                                      <p>Toronto Institute of Pharmaceutical Technology (TIPT®) is Canada’s premier pharmaceutical Institute of education, technology.
                                      </p>
                                    </div>
                                    <div class="hover-part">
                                      <div class="txt-holder">
                                        <span class="name">
                                          Petaling Jaya, Malaysia Language School
                                        </span>
                                        <span class="type">
                                          Funding Type : Private
                                        </span>
                                        <span class="btns">
                                          <a href="#" class="btn btn-5">apply</a>
                                          <a href="#" class="btn btn-5">contact</a>
                                        </span>
                                        <span class="profile-link">
                                          <a href="#" class="btn btn-more">
                                            view profile
                                          </a>
                                        </span>
                                      </div>
                                    </div>
                                    <!-- .hover-part -->
                                  </section>
                                </div>
                                <!--.isotope-item-->

                                <div class="col-sm-5 isotope-item ins">
                                  <section>
                                    <figure class="feature-logo">
                                      <img src="{{URL::to('/')}}/live/public/uploads/inst-logo.jpg" alt=""/>
                                    </figure>
                                    <!-- .feature-logo -->
                                    <div class="desc-part">
                                      <h3>Lorem ipsum dolor sit amet</h3>
                                      <p>Toronto Institute of Pharmaceutical Technology (TIPT®) is Canada’s premier pharmaceutical Institute of education, technology.
                                      </p>
                                    </div>
                                    <div class="hover-part">
                                      <div class="txt-holder">
                                        <span class="name">
                                          Petaling Jaya, Malaysia Language School
                                        </span>
                                        <span class="type">
                                          Funding Type : Private
                                        </span>
                                        <span class="btns">
                                          <a href="#" class="btn btn-5">apply</a>
                                          <a href="#" class="btn btn-5">contact</a>
                                        </span>
                                        <span class="profile-link">
                                          <a href="#" class="btn btn-more">
                                            view profile
                                          </a>
                                        </span>
                                      </div>
                                    </div>
                                    <!-- .hover-part -->
                                  </section>
                                </div>
                                <!--.isotope-item-->

                                <div class="col-sm-5 isotope-item cou">
                                  <section>
                                    <figure class="feature-logo">
                                      <img src="{{URL::to('/')}}/live/public/uploads/inst-logo.jpg" alt=""/>
                                    </figure>
                                    <!-- .feature-logo -->
                                    <div class="desc-part">
                                      <h3>Lorem ipsum dolor sit amet</h3>
                                      <p>Toronto Institute of Pharmaceutical Technology (TIPT®) is Canada’s premier pharmaceutical Institute of education, technology.
                                      </p>
                                    </div>
                                    <div class="hover-part">
                                      <div class="txt-holder">
                                        <span class="name">
                                          Petaling Jaya, Malaysia Language School
                                        </span>
                                        <span class="type">
                                          Funding Type : Private
                                        </span>
                                        <span class="profile-link">
                                          <a href="#" class="btn btn-more">
                                            view profile
                                          </a>
                                        </span>
                                      </div>
                                    </div>
                                    <!-- .hover-part -->
                                  </section>
                                </div>
                                <!--.isotope-item-->

                                <div class="col-sm-5 isotope-item ins">
                                  <section>
                                    <figure class="feature-logo">
                                      <img src="{{URL::to('/')}}/live/public/uploads/inst-logo.jpg" alt=""/>
                                    </figure>
                                    <!-- .feature-logo -->
                                    <div class="desc-part">
                                      <h3>Lorem ipsum dolor sit amet</h3>
                                      <p>Toronto Institute of Pharmaceutical Technology (TIPT®) is Canada’s premier pharmaceutical Institute of education, technology.
                                      </p>
                                    </div>
                                    <div class="hover-part">
                                      <div class="txt-holder">
                                        <span class="name">
                                          Petaling Jaya, Malaysia Language School
                                        </span>
                                        <span class="type">
                                          Funding Type : Private
                                        </span>
                                        <span class="btns">
                                          <a href="#" class="btn btn-5">apply</a>
                                          <a href="#" class="btn btn-5">contact</a>
                                        </span>
                                        <span class="profile-link">
                                          <a href="#" class="btn btn-more">
                                            view profile
                                          </a>
                                        </span>
                                      </div>
                                    </div>
                                    <!-- .hover-part -->
                                  </section>
                                </div>
                                <!--.isotope-item-->

                                <div class="cou col-sm-5 isotope-item">
                                  <section>
                                    <figure class="feature-logo">
                                      <img src="{{URL::to('/')}}/live/public/uploads/inst-logo.jpg" alt=""/>
                                    </figure>
                                    <!-- .feature-logo -->
                                    <div class="desc-part">
                                      <h3>Lorem ipsum dolor sit amet</h3>
                                      <p>Toronto Institute of Pharmaceutical Technology (TIPT®) is Canada’s premier pharmaceutical Institute of education, technology.
                                      </p>
                                    </div>
                                    <div class="hover-part">
                                      <div class="txt-holder">
                                        <span class="name">
                                          Petaling Jaya, Malaysia Language School
                                        </span>
                                        <span class="type">
                                          Funding Type : Private
                                        </span>
                                        <span class="profile-link">
                                          <a href="#" class="btn btn-more">
                                            view profile
                                          </a>
                                        </span>
                                      </div>
                                    </div>
                                    <!-- .hover-part -->
                                  </section>
                                </div>
                                <!--.isotope-item-->
                              </div>
                              <!-- end isotope content -->
                              <div class="col-sm-6 col-md-4">
                                <figure class="ad owl">
                                  <a href="#">
                                    <img src="{{URL::to('/')}}/live/public/uploads/ad.png" alt=""/>
                                  </a>
                                </figure>
                                <figure class="ad">
                                  <a href="#">
                                    <img src="{{URL::to('/')}}/live/public/uploads/ad1.png" alt=""/>
                                  </a>
                                </figure>
                                <figure class="ad">
                                  <a href="#">
                                    <img src="{{URL::to('/')}}/live/public/uploads/ad2.png" alt=""/>
                                  </a>
                                </figure>
                                <figure class="ad">
                                  <a href="#">
                                    <img src="{{URL::to('/')}}/live/public/uploads/ad3.jpg" alt=""/>
                                  </a>
                                </figure>
                              </div>
                            </div>
                          </div>
                        </div>
                      </section>
                      <!--#isotope-->


                      <section class="home-testimonial" style="background: #333; background-size: cover;">
                        <div class="container">
                          <h2>What our Students say about us?</h2>
                          <div id="testimonial-slider" class="owl-carousel owl-theme col-sm-8 padding-none">
                            @foreach($testimonial as $testimonials)
                            <div class="item">
                              <div class="content">
                                <p>
                              
                         
                                {{$testimonials->description}}
                              
                               
                                </p>
                                <span class="customer">
                                  <span class="name">
                                
                                {{$testimonials->fullname}}
                        
                                  </span>
                                  <span class="country">
                                                            {{$testimonials->address}}
                         
                                  </span>
                                </span>
                                <!-- .customer -->
                              </div>

                            </div>
                             @endforeach
                            <!--  -->

                          </div>
                        </section>
                        <!-- .home-testimonial -->

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
                            <a class="credit" href="#" target="_blank" style=" display:inline-block;">Website Designed and Developed By: <img src="{{URL::to('/')}}/live/public/images/logo.png"></a>
                          </div>
                        </div>

                      </footer>
                      <!-- Modal -->
                      <div class="modal fade" id="step1" role="dialog">
                        <div class="modal-dialog modal-lg">

                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Bridge the Global Marketing Gap</h4>
                            </div>
                            <div class="modal-body">
                              <p>Enhance your marketing efforts to create more customized, innovative</p>
                              <ul>
                                <li>Enhance your marketing efforts with more customized, relevant information.</li>
                                <li>Enhance your marketing efforts with more customized, relevant information.</li>
                                <li>Enhance your marketing efforts with more customized, relevant information.</li>
                                <li>Enhance your marketing efforts with more customized, relevant information.</li>
                                <li>Enhance your marketing efforts with more customized, relevant information.</li>
                              </ul>
                            </div>
                          </div>

                        </div>
                      </div>

                      <!-- Modal -->
                      <div class="modal fade" id="step2" role="dialog">
                        <div class="modal-dialog modal-lg">

                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Bridge the Global Marketing Gap</h4>
                            </div>
                            <div class="modal-body">
                              <p>Enhance your marketing efforts to create more customized, innovative</p>
                              <ul>
                                <li>Enhance your marketing efforts with more customized, relevant information.</li>
                                <li>Enhance your marketing efforts with more customized, relevant information.</li>
                                <li>Enhance your marketing efforts with more customized, relevant information.</li>
                                <li>Enhance your marketing efforts with more customized, relevant information.</li>
                                <li>Enhance your marketing efforts with more customized, relevant information.</li>
                              </ul>
                            </div>
                          </div>

                        </div>
                      </div>

                      <!-- Modal -->
                      <div class="modal fade" id="step3" role="dialog">
                        <div class="modal-dialog modal-lg">

                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Bridge the Global Marketing Gap</h4>
                            </div>
                            <div class="modal-body">
                              <p>Enhance your marketing efforts to create more customized, innovative</p>
                              <ul>
                                <li>Enhance your marketing efforts with more customized, relevant information.</li>
                                <li>Enhance your marketing efforts with more customized, relevant information.</li>
                                <li>Enhance your marketing efforts with more customized, relevant information.</li>
                                <li>Enhance your marketing efforts with more customized, relevant information.</li>
                                <li>Enhance your marketing efforts with more customized, relevant information.</li>
                              </ul>
                            </div>
                          </div>

                        </div>
                      </div>

                      <!-- Modal -->
                      <div class="modal fade" id="step4" role="dialog">
                        <div class="modal-dialog modal-lg">

                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Bridge the Global Marketing Gap</h4>
                            </div>
                            <div class="modal-body">
                              <p>Enhance your marketing efforts to create more customized, innovative</p>
                              <ul>
                                <li>Enhance your marketing efforts with more customized, relevant information.</li>
                                <li>Enhance your marketing efforts with more customized, relevant information.</li>
                                <li>Enhance your marketing efforts with more customized, relevant information.</li>
                                <li>Enhance your marketing efforts with more customized, relevant information.</li>
                                <li>Enhance your marketing efforts with more customized, relevant information.</li>
                              </ul>
                            </div>
                          </div>

                        </div>
                      </div>

                      <!-- Modal -->
                      <div class="modal fade" id="step5" role="dialog">
                        <div class="modal-dialog modal-lg">

                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Bridge the Global Marketing Gap</h4>
                            </div>
                            <div class="modal-body">
                              <p>Enhance your marketing efforts to create more customized, innovative</p>
                              <ul>
                                <li>Enhance your marketing efforts with more customized, relevant information.</li>
                                <li>Enhance your marketing efforts with more customized, relevant information.</li>
                                <li>Enhance your marketing efforts with more customized, relevant information.</li>
                                <li>Enhance your marketing efforts with more customized, relevant information.</li>
                                <li>Enhance your marketing efforts with more customized, relevant information.</li>
                              </ul>
                            </div>
                          </div>

                        </div>
                      </div>

                      <!-- Modal -->
                      <div class="modal fade" id="step6" role="dialog">
                        <div class="modal-dialog modal-lg">

                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Bridge the Global Marketing Gap</h4>
                            </div>
                            <div class="modal-body">
                              <p>Enhance your marketing efforts to create more customized, innovative</p>
                              <ul>
                                <li>Enhance your marketing efforts with more customized, relevant information.</li>
                                <li>Enhance your marketing efforts with more customized, relevant information.</li>
                                <li>Enhance your marketing efforts with more customized, relevant information.</li>
                                <li>Enhance your marketing efforts with more customized, relevant information.</li>
                                <li>Enhance your marketing efforts with more customized, relevant information.</li>
                              </ul>
                            </div>
                          </div>

                        </div>
                      </div>

                      <!-- Modal -->
                      <div class="modal fade" id="step7" role="dialog">
                        <div class="modal-dialog modal-lg">

                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Bridge the Global Marketing Gap</h4>
                            </div>
                            <div class="modal-body">
                              <p>Enhance your marketing efforts to create more customized, innovative</p>
                              <ul>
                                <li>Enhance your marketing efforts with more customized, relevant information.</li>
                                <li>Enhance your marketing efforts with more customized, relevant information.</li>
                                <li>Enhance your marketing efforts with more customized, relevant information.</li>
                                <li>Enhance your marketing efforts with more customized, relevant information.</li>
                                <li>Enhance your marketing efforts with more customized, relevant information.</li>
                              </ul>
                            </div>
                          </div>

                        </div>
                      </div>

                      <!-- Modal -->
                      <div class="modal fade" id="step8" role="dialog">
                        <div class="modal-dialog modal-lg">

                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Bridge the Global Marketing Gap</h4>
                            </div>
                            <div class="modal-body">
                              <p>Enhance your marketing efforts to create more customized, innovative</p>
                              <ul>
                                <li>Enhance your marketing efforts with more customized, relevant information.</li>
                                <li>Enhance your marketing efforts with more customized, relevant information.</li>
                                <li>Enhance your marketing efforts with more customized, relevant information.</li>
                                <li>Enhance your marketing efforts with more customized, relevant information.</li>
                                <li>Enhance your marketing efforts with more customized, relevant information.</li>
                              </ul>
                            </div>
                          </div>

                        </div>
                      </div>

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