<div  id="add-work-exp-modal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="color: #222;">
      <div class="modal-header" style="background: url('/images/congruent_pentagon.png')">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="add-work-exp-title text-center">Add Work Experience</h3>
      </div>
      <div class="modal-body" id="add_work_exp-body" style="margin-top: 20px;">
          {!! Form::open(['url' => '/update_profile', 'class' => 'form-horizontal', 'role' => 'form']) !!}
          <div class="form-group{{ $errors->has('emp_name') ? ' has-error' : '' }}">

              <label for="emp_name" class="col-md-3 control-label">Employer Name</label>
              <div class="col-md-9">
                  {!! Form::text('emp_name', null , ['class' => 'form-control', 'id' =>'emp_name', 'required']) !!}
              </div>
          </div>
          <div class="form-group{{ $errors->has('emp_address') ? ' has-error' : '' }}">

              <label for="emp_address" class="col-md-3 control-label">Employer Address</label>
              <div class="col-md-9">
                  {!! Form::textarea('emp_address', null , ['class' => 'form-control', 'id' =>'emp_address', 'rows' =>2, 'required']) !!}
              </div>
          </div>
          <div class="form-group{{ $errors->has('position_held') ? ' has-error' : '' }}">

              <label for="position_held" class="col-md-3 control-label">Position Held</label>
              <div class="col-md-9">
                  {!! Form::text('position_held', null , ['class' => 'form-control', 'id' =>'position_held', 'required']) !!}
              </div>
          </div>
          <div class="form-group{{ $errors->has('duty') ? ' has-error' : '' }}">

              <label for="duty" class="col-md-3 control-label">Your Duty</label>
              <div class="col-md-9">
                  {!! Form::textarea('duty', null , ['class' => 'form-control', 'id' =>'duty', 'rows' => 3]) !!}
              </div>
          </div>
          <div class="form-group{{ $errors->has('duty') ? ' has-error' : '' }}">
            <label for="s_skul_name_from" class="col-md-3 control-label">Year</label>
            <div class="col-md-3"><span>Started: </span>{!! Form::date('s_skul_name', '2016' , ['class' => 'form-control datepicker', 'id' =>'s_skul_name_from', 'required']) !!}</div>
             <div class="col-md-3"><span>Ended: </span>{!! Form::date('s_skul_name_to', '2016' , ['class' => 'form-control datepicker', 'id' =>'s_skul_name_to', 'required']) !!}</div>
          </div>
          <div class="form-group">
            <div class="col-md-3"></div>
            <div class="col-md-9">
                <button type="button" class="col-md-5 btn btn-default" data-dismiss="modal" style="margin-right: 20px;">Close</button>
                {!! Form::submit('Add', array('class'=>'col-md-5 btn btn-success')) !!}

            </div>
          </div>
          {!! Form::token(); !!}

          {!! Form::close() !!}
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->