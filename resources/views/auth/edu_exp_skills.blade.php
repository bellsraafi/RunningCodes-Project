@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
           <div class="panel panel-default" style="margin-top: 20px;">
                <div class="panel-heading clearfix" style="background: url('/images/congruent_pentagon.png')">
                <h1 class="panel-title">Education, Experience, & Skillsets</h1>
                </div>
                <div class="panel-body" style="margin-top: 20px; margin-bottom: 5px;">
                    @if(Session::has('msg'))
                        <div class="alert alert-success alert-dismissable">{{Session::get('msg')}}</div>
                    @endif
                <div class="panel-body">
                    <div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-primary">
                            <div class="panel-heading" role="tab" id="headingOne1">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion2" href="#1" aria-expanded="true" aria-controls="collapseOne">
                                        EDUCATION
                                    </a>
                                </h4>
                            </div>
                            <div id="1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne1">
                                <div class="panel-body" style="background-color: #eee;color: #222;">
                                    <button class="btn btn-primary" id="show-edu-modal">Add Education</button>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-success">
                            <div class="panel-heading" role="tab" id="headingTwo2">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#2" aria-expanded="false" aria-controls="collapseTwo">
                                        WORK EXPERIENCE
                                    </a>
                                </h4>
                            </div>
                            <div id="2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo2">
                                <div class="panel-body" style="background-color: #eee;">
                                    <button class="btn btn-success" id="show-work-exp-modal">Add Work Experience</button>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-warning">
                            <div class="panel-heading" role="tab" id="headingThree3">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#3" aria-expanded="false" aria-controls="collapseThree">
                                        SKILLSETS
                                    </a>
                                </h4>
                            </div>
                            <div id="3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree3">
                                <div class="panel-body" style="background-color: #eee;">
                                    <button class="btn btn-warning" id="show-skillsets-modal">Add Skillset</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
            <div class="panel-footer" style="padding: 10px; height: 55px;">
                <div class="form-group">
                    <div class="col-md-8"></div>
                    <div class="col-md-4">
                        <a href="#" class="btn btn-danger" style="padding: 7px 30px;">Next >></a>

                    </div>
                </div>
            </div>
                <!-- Create Task modal-->
                @include('partials.add_edu_modal')
                @include('partials.add_work_exp_modal')
                @include('partials.add_skillsets_modal')
                
            </div>
        </div>
    </div>
</div>

@endsection