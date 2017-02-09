<div  id="add-edu-modal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="color: #222;">
      <div class="modal-header" style="background: url('/images/congruent_pentagon.png')">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="add-edu-title text-center">Education</h3>
      </div>
      <div class="modal-body" id="add_edu-body" style="margin-top: 20px;height: auto;">
          {!! Form::open(['url' => '/educations_experience_skills', 'class' => 'form-vertical', 'role' => 'form', 'files'=>true]) !!}
          <ol>
          
              <h3><li>Primary Education</li></h3>
                  <div class="form-group{{ $errors->has('p_skul_name') ? ' has-error' : '' }} clearfix">

                      <h5 for="p_skul_name" class="col-md-3 control-label">School Name</h5>
                      <div class="col-md-9">
                          {!! Form::text('p_skul_name', null , ['class' => 'form-control', 'id' =>'p_skul_name', 'required']) !!}
                      </div>
                  </div>
                  <div class="clearfix form-group{{ $errors->has('date') ? ' has-error' : '' }}">

                      <h5 for="p_skul_name_from" class="col-md-3 control-label">Year:</h5>
                      <div class="col-md-4"><span>From: </span>{!! Form::number('p_skul_name_from', '2016' , ['class' => 'form-control datepicker', 'id' =>'p_skul_name_from', 'required']) !!}</div>
                       <div class="col-md-4"><span>To: </span>{!! Form::number('p_skul_name_to', '2016' , ['class' => 'form-control datepicker', 'id' =>'p_skul_name_to', 'required']) !!}</div>
                  </div>
                  <hr>
              <h3><li>Secondary Education</li></h3>
                  <div class="form-group{{ $errors->has('s_skul_name') ? ' has-error' : '' }} clearfix">

                      <h5 for="p_skul_name" class="col-md-3 control-label">School Name</h5>
                      <div class="col-md-9">
                          {!! Form::text('s_skul_name', null , ['class' => 'form-control', 'id' =>'s_skul_name', 'required']) !!}
                      </div>
                  </div>
                  <div class="clearfix form-group">

                      <h5 for="s_skul_name_from" class="col-md-3 control-label">Year:</h5>
                      <div class="col-md-4"><span>From: </span>{!! Form::number('s_skul_name_from', '2016' , ['class' => 'form-control date datepicker', 'id' =>'s_skul_name_from', 'required']) !!}</div>
                       <div class="col-md-4"><span>To: </span>{!! Form::number('s_skul_name_to', '2016' , ['class' => 'form-control date datepicker', 'id' =>'s_skul_name_to', 'required']) !!}</div>
                  </div>
                  <hr>
              <h3><li>Tertiary Education</li></h3>
                  <div class="form-group{{ $errors->has('t_skul_name') ? ' has-error' : '' }} clearfix">

                      <h5 for="t_skul_name" class="col-md-3 control-label">School Name</h5>
                      <div class="col-md-9">
                          {!! Form::text('t_skul_name', null , ['class' => 'form-control', 'id' =>'t_skul_name']) !!}
                      </div>
                  </div>
                  <div class="form-group{{ $errors->has('t_skul_name') ? ' has-error' : '' }} clearfix">

                      <h5 for="t_cos_study" class="col-md-3 control-label">Course of Study</h5>
                      <div class="col-md-6">
                          {!! Form::text('t_cos_study', null , ['class' => 'form-control', 'id' =>'t_skul_name']) !!}
                      </div>
                      <div class="col-md-3">{!! Form::number('t_cos_level', '100' , ['class' => 'col-md-6 form-control datepicker', 'id' =>'t_cos_level', 'placeholder' => 'level']) !!}</div>
                  </div>
                  <div class="clearfix form-group">

                      <h5 for="t_skul_name_from" class="col-md-3 control-label">Year:</h5>
                      <div class="col-md-4"><span>From: </span>{!! Form::number('t_skul_name_from', '2016' , ['class' => 'form-control datepicker', 'id' =>'t_skul_name_from']) !!}</div>
                       <div class="col-md-4"><span>To: </span>{!! Form::number('t_skul_name_to', '2016' , ['class' => 'form-control datepicker', 'id' =>'t_skul_name_to']) !!}</div>
                  </div>
          </ol>
          <div class="form-group">
              <div class="col-md-4"></div>
              <div class="col-md-8">
                  {!! Form::submit('Save', array('class'=>'btn btn-primary', 'style' => 'padding:7px 100px;text-align:center;margin-bottom:20px;')) !!}

              </div>
          </div>
          <script type="text/javascript">
              $(function() {
                  $( ".datepicker" ).datepicker({dateFormat: 'yy'});
              });​
          </script>
          {!! Form::token(); !!}

          {!! Form::close() !!}
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->