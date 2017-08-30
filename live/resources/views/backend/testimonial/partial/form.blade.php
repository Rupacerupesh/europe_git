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
            <label>Full Name</label>
            {{Form::text('fullname',null,['class'=>'form-control', 'placeholder'=>'Full Name'])}}
            @if ($errors->has('fullname'))
                <span class="text-danger"> {{$errors->first('fullname')}}</span>
            @endif
        </div>
    </div>
       
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
            <label>Publish</label>
            <label class="switch">
                {{Form::checkbox('status', null, null)}}
                <span class="slider round"></span>

            </label>
        </div>
    </div>
</div>
<div class="row">
 <div class="col-md-9">
        <div class="form-group">
            <label>Description</label>
            {{Form::textarea('description',null,['class'=>'form-control', 'placeholder'=>'Description'])}}
            @if ($errors->has('description'))
                <span class="text-danger"> {{$errors->first('description')}}</span>
            @endif
        </div>
        </div>


</div>