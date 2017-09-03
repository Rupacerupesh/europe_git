@extends('frontend.master')
@section('content')
<main id="content">
<section class="contact">
<div class="container">
	<h2>Contact Us</h2>

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
    </main>
</section>
    <script type="text/javascript">
    //Will contain map object.

    //Function called to initialize / create the map.
    //This is called when the page has loaded.
     function initMap() {
        var map;    
        var centerpoint = {lat: 27.1, lng: 85.1};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: centerpoint
        }); 
        var marker = new google.maps.Marker({
          position: centerpoint,
          map: map
        });
      }


    //Load the map when the page has finished loading.
    // google.maps.event.addDomListener(window, 'load', initMap);

</script>
    @stop