@extends('layouts.app')

@section('content')
<link href="/plugins/dropzone/dropzone.min.css" rel="stylesheet" type="text/css"/>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" style="margin-top: 20px;">
                <div class="panel-heading" style="background: url('/images/congruent_pentagon.png')">Profile Update</div>
                <div class="panel-body" style="margin-top: 50px; color: #222;">
                    @if(Session::has('msg'))
                        <div class="alert alert-success alert-dismissable">{{Session::get('msg')}}</div>
                    @endif
                     {!! Form::open(['url' => '/update_profile', 'class' => 'form-horizontal', 'role' => 'form', 'files'=>true]) !!}
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">

                                <label for="login_id" class="col-md-4 control-label">Username</label>
                                <div class="col-md-8">
                                    {!! Form::text('username', null , ['class' => 'form-control', 'id' =>'username', 'required']) !!}
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">

                                <label for="login_id" class="col-md-4 control-label">Gender</label>
                                <div class="col-md-8">
                                {!! Form::select('gender', ['male' => 'Male', 'female' => 'Female'], null, ['placeholder' => 'Select gender...', 'class' => 'form-control']); !!}
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">

                                <label for="login_id" class="col-md-4 control-label">State of Origin</label>
                                <div class="col-md-8">
                                {!! Form::select('stateid',App\State::pluck( 'statename' , 'stateid' ), ['abj' => 'Abuja', 'lag' => 'Lagos'], ['placeholder' => 'Select State of Origin...', 'class' => 'form-control']); !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-4"></div>
                                <div class="col-md-8">
                                    
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <!-- Upload Profile Pic -->
                            <div class="col-md-8 col-sm-4 col-sm-offset-4 col-xs-6 col-xs-offset-3 col-md-offset-1" style="border: 1px solid #ddd; height: 160px; margin-bottom: 10px;padding: 3px;" id="display_ppic"><img src="images/12/Generic_profile_M-180x180.jpg" width="100%" height="100%"></div>
                            <div class="col-md-10">
                                <input type="file" name="ppic" class="form-control inputfile" id="ppic" required />
                               
                            </div>
                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
                            <script>
                                $(document).ready(function() {
                                    $("#ppic").on('change', function() {
                                      //Get count of selected files
                                      var countFiles = $(this)[0].files.length;
                                      var imgPath = $(this)[0].value;
                                      var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
                                      var image_holder = $("#display_ppic");
                                      image_holder.empty();
                                      if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
                                        if (typeof(FileReader) != "undefined") {
                                          //loop for each file selected for uploaded.
                                          for (var i = 0; i < countFiles; i++) 
                                          {
                                            var reader = new FileReader();
                                            reader.onload = function(e) {
                                              $("<img />", {
                                                "src": e.target.result,
                                                "class": "ppic",
                                                "width":"100%",
                                                "height":"100%"
                                              }).appendTo(image_holder);
                                            }
                                            image_holder.show();
                                            reader.readAsDataURL($(this)[0].files[i]);
                                          }
                                        } else {
                                          alert("This browser does not support FileReader.");
                                        }
                                      } else {
                                        alert("Pls select only images");
                                      }
                                    });
                                  });
                            </script>
                        </div>
                        <div class="col-md-12 clearfix" style="text-align: center;">
                          {!! Form::submit('Update Profile', array('class'=>'btn btn-primary', 'style' => 'margin-top:30px;', 'name'=> 'profile')) !!}

                        </div>
                    </div>
                </div>
                <div class="panel-footer" style="padding: 10px; height: 55px;">
                    <div class="form-group">
                        <div class="col-md-8"></div>
                        <div class="col-md-4">
                            
                            {!! Form::submit('Next >>', array('class'=>'btn btn-danger', 'style' => 'padding: 7px 30px;', 'name'=> 'profile')) !!}

                        </div>
                    </div>
                </div>
                {!! Form::token(); !!}

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>


@endsection