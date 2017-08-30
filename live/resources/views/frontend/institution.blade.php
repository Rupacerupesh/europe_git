@extends('frontend.master')
@section('content')

<main id="content">
    <section class="banner-inner">
    <h1 class="insitution-logo">
        <img src="{{URL::to('/live/public/uploads/inst-logo.jpg')}}" alt=""/>
    </h1>
        <figure class="banner-img">
            <img src="{{URL::to('/live/public/uploads/slider.png')}}" class="img-responsive" height="400" alt=""/>
        <figcaption>Group of Russian State Universities - RACUS</figcaption>
        </figure>
        <!-- .banner-img -->
    </section>
    <!-- .banner-inner -->

    <section class="details-section">
        <div class="container">
            <div class="row">
                <div id="inst-tab" class="tables col-sm-12 tab-section">
            <ul class="resp-tabs-list table-cells ver_1">
                <li>Home</li>
                <li>Course</li>
                <li>Contact</li>
            </ul>
            <div class="resp-tabs-container table-cells ver_1">
                <div class="tab-content">
                    <div class="tables">
                        <div class="table-rows">
                            <div class="table-cells">
                                <span class="head"> Location </span> Saint-Petersburg,  
                            </div>       
                            <div class="table-cells">
                                <span class="head">Facilities</span> <i class="fa fa-book"></i><i class="fa fa-building"></i><i class="fa fa-users"></i><i class="fa fa-spotify"></i><i class="fa fa-wifi"></i>
                            </div>
                        </div>
                        <!-- .table-rows -->

                        <div class="table-rows">
                            <div class="table-cells">
                                <span class="head"> Funding Type </span> private  
                            </div>       
                            <div class="table-cells">
                                <span class="head">No. of Students</span> 200
                            </div>
                        </div>
                        <!-- .table-rows -->

                        <div class="table-rows">
                            <div class="table-cells">
                                <span class="head"> Type </span> University  
                            </div>       
                            <div class="table-cells">
                                <span class="head">Scholarship</span> <i class="fa fa-mortar-board"></i>
                            </div>
                        </div>
                        <!-- .table-rows -->

                        <div class="table-rows">
                            <div class="table-cells">
                                <span class="head"> Year of Establishment </span> 1995  
                            </div>       
                            <div class="table-cells">
                                <span class="head">Marketing Material</span> <i class="fa fa-file-pdf-o"></i>
                            </div>
                        </div>
                        <!-- .table-rows -->
                    </div>
                    <!-- .tables -->
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor. Integer laoreet placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur nibh quis urna gravida mollis.</p>
                </div>
                <div class="tab-content">
                    <div class="course-listing clearfix">
                        <div class="col-sm-4 col-xs-6">
                            <div class="course">
                                <h4>Banking And Audit</h4>
                                <span class="head"><strong>Fees:</strong>Rs.1200</span>
                                <a href="#" class="btn btn-5">apply online</a>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-6">
                           <div class="course">
                                <h4>Economics Audit</h4>
                                <span class="head"><strong>Fees:</strong>Rs.10</span>
                                <a href="#" class="btn btn-5">apply online</a>
                            </div> 
                        </div>
                        
                         <div class="col-sm-4 col-xs-6">
                             <div class="course">
                                <h4>Economics Nepal</h4>
                                <span class="head"><strong>Fees:</strong>Rs.10</span>
                                <a href="#" class="btn btn-5">apply online</a>
                            </div>
                         </div>
                         <div class="col-sm-4 col-xs-6">
                           <div class="course">
                                <h4>Economics Audit</h4>
                                <span class="head"><strong>Fees:</strong>Rs.10</span>
                                <a href="#" class="btn btn-5">apply online</a>
                            </div> 
                        </div>
                        
                         <div class="col-sm-4 col-xs-6">
                             <div class="course">
                                <h4>Economics Nepal</h4>
                                <span class="head"><strong>Fees:</strong>Rs.10</span>
                                <a href="#" class="btn btn-5">apply online</a>
                            </div>
                         </div>
                         <div class="col-sm-4 col-xs-6">
                           <div class="course">
                                <h4>Economics Audit</h4>
                                <span class="head"><strong>Fees:</strong>Rs.10</span>
                                <a href="#" class="btn btn-5">apply online</a>
                            </div> 
                        </div>
                        
                         <div class="col-sm-4 col-xs-6">
                             <div class="course">
                                <h4>Economics Nepal</h4>
                                <span class="head"><strong>Fees:</strong>Rs.10</span>
                                <a href="#" class="btn btn-5">apply online</a>
                            </div>
                         </div>
                    </div>
                    <!-- .course-listing -->
                </div>
                <div class="tab-content">
                    <div id="map" style="width: 100%; height: 400px;">
                    </div>
                    <div class="form-contact">
                        <h3>Leave your details below for registration request and enquiry.</h3>
                        <form action="" class="common-form eq-half-form">
                            <div class="form-group-wrapper clearfix">
                                <div class="form-group">
                                    <label for="txt">Full Name:</label>
                                    <input type="text" class="form-control" id="txt" name="full_name" value="">
                                 </div>
                                 <div class="form-group">
                                    <label for="txt2">Email:</label>
                                    <input type="email" class="form-control" id="txt2" name="email_address" value="">
                                 </div>
                                 <div class="form-group">
                                    <label for="txt3">Contact Number:</label>
                                    <input type="text" class="form-control" id="txt3" name="contact_number" value="">
                                 </div>
                                  <div class="form-group">
                                    <label for="txt4">Country Name:</label>
                                    <input type="text" class="form-control" id="txt4" name="country" value="">
                                 </div>
                                 <div class="form-group">
                                    <label for="text5">Course of Interest:</label>
                                    <input type="text" class="form-control" id="text5" name="interest" value="">
                                 </div>
                                 <div class="form-group">
                                    <label for="text6">Expected Date of Joining:</label>
                                    <input type="text" class="form-control" id="text6" name="date" value="">
                                 </div>
                                 <div class="form-group">
                                    <label for="text6">Message:</label>
                                    <textarea class="form-control" id="text6"></textarea>
                                 </div>
                            </div>
                            <div class="input-submit">
                                 <a href="#" class="btn btn-5">Submit</a>
                             </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
            </div>
        </div>
    </section>
    <!-- .details-section -->

</main>
<!-- #content -->

@stop

