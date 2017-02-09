<div  id="add-skillsets-modal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="color: #222;">
      <div class="modal-header" style="background: url('/images/congruent_pentagon.png')">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="add-work-exp-title text-center">Add Skillset</h3>
      </div>
      <div class="modal-body" id="add_work_exp-body" style="margin-top: 20px;">
          {!! Form::open(['url' => '/update_profile', 'class' => 'form-horizontal', 'role' => 'form']) !!}
          <div class="form-group{{ $errors->has('skill') ? ' has-error' : '' }}">

              <label for="skill" class="col-md-3 control-label">Skill</label>
              <div class="col-md-9">
                  {!! Form::text('skill', null , ['class' => 'form-control', 'id' =>'skill', 'required']) !!}
              </div>
          </div>
          <div class="form-group">
            <div class="col-md-3"></div>
            <div class="col-md-9">
                <button type="button" class="col-md-5 btn btn-default" data-dismiss="modal" style="margin-right: 20px;">Close</button>
                {!! Form::submit('Add', array('class'=>'col-md-5 btn btn-warning')) !!}

            </div>
          </div>
          {!! Form::token(); !!}

          {!! Form::close() !!}
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->