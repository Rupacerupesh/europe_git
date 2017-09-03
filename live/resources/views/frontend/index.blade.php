
@extends('frontend.master')
@section('content')

  <main id="content">
    <section class="banner-section">
      <div id="home-banner" class="owl-carousel owl-theme">
        @foreach($banner as $banners)
        <div class="item">
          <figure>
           <img src="<?php echo asset('/uploads/banners_resize/'.$banners->image) ?>">
         </figure>
       </div>
       @endforeach

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
                                    <i class="fa fa-users"></i><span class="filter-title">Featured Courses</span>
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
                        @foreach($institution_front as $institution)
                        @if($institution->featured==1)
                            <div class="col-sm-5 isotope-item ins">
                                <section>
                                  <figure class="feature-logo">
                                    <img src="{{URL::to('/')}}/uploads/institution/logo_resize/{{$institution->logo}}" alt=""/>
                                  </figure>
                                  <!-- .feature-logo -->
                                  <div class="desc-part">
                                    <h3>{{$institution->title}}</h3>
                                    <p>{!!$institution->short_intro!!}
                                    </p>
                                  </div>
                                  <div class="hover-part">
                                    <div class="txt-holder">
                                      <span class="name">
                                      {{$institution->address}}
                                      </span>
                                      <span class="type">
                                        Funding Type : {{$institution->funding_type}}
                                      </span>
                                      <span class="btns">
                                        <a href="{{URL::to('/').'/apply?institution='.$institution->id}}" class="btn btn-5">apply</a>
                                        <a href="{{URL::to('/')}}/institution/{{$institution->slug}}#inst-tab3" class="btn btn-5">contact</a>
                                      </span>
                                      <span class="profile-link">
                                        <a href="{{URL::to('/')}}/institution/{{$institution->slug}}" class="btn btn-more">
                                          view profile
                                        </a>
                                      </span>
                                    </div>
                                  </div>
                                  <!-- .hover-part -->
                                </section>
                            </div>
                            <!--.isotope-item-->
                            @endif
                            @if($institution->featured==2)
                            <div class="col-sm-5 isotope-item cou">
                                <section>
                                  <figure class="feature-logo">
                                    <img src="{{URL::to('/')}}/uploads/institution/logo_resize/{{$institution->logo}}" alt=""/>
                                  </figure>
                                  <!-- .feature-logo -->
                                  <div class="desc-part">
                                    <h3>{{$institution->title}}</h3>
                                    <p>{!!$institution->short_intro!!}
                                    </p>
                                  </div>
                                  <div class="hover-part">
                                    <div class="txt-holder">
                                      <span class="name">
                                      <span class="profile-link">
                                        <a href="{{URL::to('/')}}/institution/{{$institution->slug}}#inst-tab2" class="btn btn-more">
                                          view course
                                        </a>
                                      </span>
                                    </div>
                                  </div>
                                  <!-- .hover-part -->
                                </section>
                            </div>
                            <!--.isotope-item-->
                            @endif
                            @endforeach
                            
                        </div>
                        <!-- end isotope content -->
                        <div class="col-sm-6 col-md-4">
                                @foreach($advertisement as $advertisements)
                                <figure class="ad owl">
                                  <a href="#" target="_blank">
                                   <!--  <img src="{{URL::to('/')}}/live/public/uploads/ad.png" alt=""/> -->

                                   <!-- <img src="{{URL::to('/').'/live/public/uploads/advertisements_resize/'.$advertisements->image}}" alt="{{$advertisements->image}}" > -->
                                   <!-- {{ Html::image('/uploads/advertisements_resize/'.$advertisements->image)}} -->
                                   <img src="<?php echo asset('/uploads/advertisements_resize/'.$advertisements->image) ?>"> </img>
                                 </a>
                               </figure>
                               @endforeach
                            <!--     <figure class="ad">
                                  <a href="#">
                                    <img src="{{URL::to('/')}}/live/public/uploads/ad1.png" alt=""/>
                                  </a>
                                </figure> -->
                            <!--     <figure class="ad">
                                  <a href="#">
                                    <img src="{{URL::to('/')}}/live/public/uploads/ad2.png" alt=""/>
                                  </a>
                                </figure>
                                <figure class="ad">
                                  <a href="#">
                                    <img src="{{URL::to('/')}}/live/public/uploads/ad3.jpg" alt=""/>
                                  </a>
                                </figure> -->
                              </div>
                  </div>
                </div>
            </div>
        </section>
        <!--#isotope-->


@if($testimonial->count()>0)
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
                        @endif
                        <!-- .home-testimonial -->

                      </main>
                      <!-- #content -->
                      @stop
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

                      