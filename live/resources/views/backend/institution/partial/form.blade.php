            <style type="text/css">
              #map{ width:500px; height: 500px; }
            </style>
            <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyB__qd-dGSVofxmpga8YBEFRsxgIMWH79Q"></script>
            <!-- <title>Save Marker Example</title> -->
              <!-- TinyMCE -->
              <script type="text/javascript" src="{{ URL::to('/') }}/backend/assets/tinymce_4/js/tinymce/tinymce.min.js"></script>
              <script type="text/javascript">

                  tinymce.init({
                      selector: "textarea",

                      // ===========================================
                      // INCLUDE THE PLUGIN
                      // ===========================================

                      plugins: [
                          "advlist autolink lists link image charmap print preview anchor",
                          "searchreplace visualblocks code fullscreen",
                          "insertdatetime media table contextmenu paste jbimages",
                          "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                          "searchreplace wordcount visualblocks visualchars code fullscreen",
                          "insertdatetime media nonbreaking save table contextmenu directionality",
                          "emoticons template paste textcolor colorpicker textpattern imagetools"
                      ],

                      // ===========================================
                      // PUT PLUGIN'S BUTTON on the toolbar
                      // ===========================================

                      toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link jbimages | image",
                      toolbar3: "print preview media | forecolor backcolor emoticons",

                      // ===========================================
                      // SET RELATIVE_URLS to FALSE (This is required for images to display properly)
                      // ===========================================
                      image_advtab: true,

                      relative_urls: false

                  });

              </script>
              <!-- /TinyMCE -->
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label>Title</label>
            {{Form::text('title',null,['class'=>'form-control', 'placeholder'=>'Institution Title'])}}
            @if ($errors->has('title'))
                <span class="text-danger"> {{$errors->first('title')}}</span>
            @endif
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label>Logo</label>
            {{Form::file('logo')}}
            @if( isset($institution) && file_exists('uploads/institution/logo/'.$institution->logo))
                <img src="{{URL::to('/').'/uploads/institution/logo/'.$institution->logo}}" alt="{{$institution->logo}}" width="100" height="100">
            @endif
            @if ($errors->has('logo'))
                <span class="text-danger"> {{$errors->first('logo')}}</span>
            @endif
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>Banner</label>
            {{Form::file('banner')}}
            @if( isset($institution) && file_exists('uploads/institution/banner/'.$institution->banner))
                <img src="{{URL::to('/').'/uploads/institution/banner/'.$institution->banner}}" alt="{{$institution->banner}}" width="100" height="100">
            @endif
            @if ($errors->has('banner'))
                <span class="text-danger"> {{$errors->first('banner')}}</span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label>Funding Type</label>
            {{Form::text('funding_type',null,['class'=>'form-control', 'placeholder'=>'Funding Type'])}}
            @if ($errors->has('funding_type'))
                <span class="text-danger"> {{$errors->first('funding_type')}}</span>
            @endif
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>Institution Type</label>
            {{Form::text('institution_type',null,['class'=>'form-control', 'placeholder'=>'Institution Type'])}}
            @if ($errors->has('institution_type'))
                <span class="text-danger"> {{$errors->first('institution_type')}}</span>
            @endif
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>Established Year</label>
            {{Form::text('estd_year',null,['class'=>'form-control', 'placeholder'=>'Established Year'])}}
            @if ($errors->has('estd_year'))
                <span class="text-danger"> {{$errors->first('estd_year')}}</span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label>Student Number</label>
            {{Form::text('student_no',null,['class'=>'form-control', 'placeholder'=>'Student Number'])}}
            @if ($errors->has('student_no'))
                <span class="text-danger"> {{$errors->first('student_no')}}</span>
            @endif
        </div>
    </div>
     <div class="col-md-4">
        <div class="form-group">
            <label>Established Year</label>
            {{Form::text('estd_year',null,['class'=>'form-control', 'placeholder'=>'Established Year'])}}
            @if ($errors->has('estd_year'))
                <span class="text-danger"> {{$errors->first('estd_year')}}</span>
            @endif
        </div>
    </div>
     <div class="col-md-4">
        <div class="form-group">
            <label>Schoolarship</label>
            {{Form::checkbox('schoolarship', 'value',null)}}
        </div>
    </div>
    
</div>



    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label>Short Information</label>
                {!! Form::textarea('short_intro', null, ['class' => 'form-control', 'placeholder'=>'Short Introduction of Institution']) !!}
                @if ($errors->has('short_intro'))
                <span class="text-danger"> {{$errors->first('short_intro')}}</span>
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label>Information</label>
                {!! Form::textarea('information', null, ['class' => 'form-control', 'placeholder'=>'Information of Institution']) !!}
                @if ($errors->has('information'))
                    <span class="text-danger"> {{$errors->first('information')}}</span>
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label>Address</label>
                {{Form::text('address',null,['class'=>'form-control', 'placeholder'=>'Address'])}}
                @if ($errors->has('address'))
                    <span class="text-danger"> {{$errors->first('address')}}</span>
                @endif
            </div>
        </div>
         <div class="col-md-4">
            <div class="form-group">
                <label>Latitude</label>
                {{Form::text('latitude',null,['class'=>'form-control', 'placeholder'=>'Institution latitude','id'=>'lat'])}}
                @if ($errors->has('latitude'))
                <span class="text-danger"> {{$errors->first('latitude')}}</span>
                @endif
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Longitude</label>
                {{Form::text('longitude',null,['class'=>'form-control', 'placeholder'=>'Institution longitude','id'=>'lng'])}}
                @if ($errors->has('longitude'))
                <span class="text-danger"> {{$errors->first('longitude')}}</span>
                @endif
            </div>
        </div>
    </div>
<div class="row">
<label>Click the location on the given map</label>
    <div id="dvMap" style="width: 100%; height: 500px">
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
                <label>Featured Profile</label>
                     <label class="switch">
                    <input name="featured" type="checkbox" value="1"  
                    @if(isset($institution->featured))
                    @if($institution->featured==1)checked 
                    @endif
                    @endif>
                    
                    <span class="slider round"></span>
                </label>
           
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>Featured Course</label>
            <label class="switch">
                <input name="featured" type="checkbox" value="2" 
                @if(isset($institution->featured))
                @if($institution->featured==2)checked 
                @endif
                @endif>
                <span class="slider round"></span>
           </label>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>Publish</label>
            <label class="switch">
                {{Form::checkbox('status', null, null)}}
                <span class="slider round"></span>
            </label>
        </div>
    </div>
</div>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyB__qd-dGSVofxmpga8YBEFRsxgIMWH79Q"></script>


    

    <script>
    //map.js

    //Set up some of our variables.
    var map; //Will contain map object.
    var marker = false; ////Has the user plotted their location marker?

    //Function called to initialize / create the map.
    //This is called when the page has loaded.
    function initMap() {

        //The center location of our map.
        var centerOfMap = new google.maps.LatLng(27.706147, 85.315097);
        if(document.getElementById('lat').value!='' && document.getElementById('lng').value!=''){
           var centerOfMap = new google.maps.LatLng(document.getElementById('lat').value, document.getElementById('lng').value); 
        }

        //Map options.
        var options = {
          center: centerOfMap, //Set center.
          zoom: 15 //The zoom value.
        };

        //Create the map object.
        map = new google.maps.Map(document.getElementById('dvMap'), options);

        var marker2 = new google.maps.Marker({
            position: centerOfMap,
            title:"Set marker to your location!",
           
        });

            // To add the marker to the map, call setMap();
            marker2.setMap(map);

        //Listen for any clicks on the map.
        google.maps.event.addListener(map, 'click', function(event) {
            marker2.setMap(null);
            //Get the location that the user clicked.
            var clickedLocation = event.latLng;
            //If the marker hasn't been added.
            if(marker === false){
                //Create the marker.
                marker = new google.maps.Marker({
                    position: clickedLocation,
                    map: map,
                    draggable: true //make it draggable
                });
                //Listen for drag events!
                google.maps.event.addListener(marker, 'dragend', function(event){
                    markerLocation();
                });
            } else{
                //Marker has already been added, so just change its location.
                marker.setPosition(clickedLocation);
            }
            //Get the marker's location.
            markerLocation();
        });
    }

    //This function will get the marker's current location and then add the lat/long
    //values to our textfields so that we can save the location.
    function markerLocation(){
        //Get location.
        var currentLocation = marker.getPosition();
        //Add lat and lng values to a field that we can save.
        document.getElementById('lat').value = currentLocation.lat(); //latitude
        document.getElementById('lng').value = currentLocation.lng(); //longitude
    }


    //Load the map when the page has finished loading.
    google.maps.event.addDomListener(window, 'load', initMap);
    </script>