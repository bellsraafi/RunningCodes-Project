@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register as</div>
                <div class="panel-body">
                    <div role="tabpanel">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#tab9" role="tab" data-toggle="tab">TRAINEE</a></li>
                                <li role="presentation"><a href="#tab10" role="tab" data-toggle="tab">BENEFACTOR</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active fade in" id="tab9">
                                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                                        {{ csrf_field() }}

                                        <div class="form-group{{ $errors->has('fname') ? ' has-error' : '' }}">
                                            <label for="fname" class="col-md-4 control-label">First Name</label>

                                            <div class="col-md-6">
                                                <input id="fname" type="text" class="form-control" name="fname" value="{{ old('fname') }}" required autofocus>

                                                @if ($errors->has('fname'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('fname') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group{{ $errors->has('lname') ? ' has-error' : '' }}">
                                            <label for="lname" class="col-md-4 control-label">Last Name</label>

                                            <div class="col-md-6">
                                                <input id="lname" type="text" class="form-control" name="lname" value="{{ old('lname') }}" required>

                                                @if ($errors->has('lname'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('lname') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                            <div class="col-md-6">
                                                <div class="input-group m-b-sm">
                                                    <span class="input-group-addon" id="basic-addon1">@</span>
                                                    <input type="email"  id="email"class="form-control" name="email" value="{{ old('email') }}" placeholder="example@gmail.com" aria-describedby="basic-addon1" required>
                                                </div>

                                                @if ($errors->has('email'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                                
                                            </div>
                                        </div>
                                         <div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }}">
                                            <label for="dob" class="col-md-4 control-label">Date of Birth</label>
                                            <div class="col-md-6">
                                                <div class="input-group date dob" data-provide="datepicker">
                                                    <input type="text" class="form-control"  placeholder="dd/mm/yyyy" name="dob" value="{{ old('dob') }}" required>
                                                    <div class="input-group-addon">
                                                        <span class="glyphicon glyphicon-th"></span>
                                                    </div>
                                                </div>
                                                @if ($errors->has('dob'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('dob') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <label for="password" class="col-md-4 control-label">Password</label>

                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control" name="password" required>

                                                @if ($errors->has('password'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="password_confirmation" class="col-md-4 control-label">Confirm Password</label>

                                            <div class="col-md-6">
                                                <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
                                            </div>
                                        </div>
                                        <input type="hidden" name="user_type" value="trainee">
                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-4">
                                                <button type="submit" class="btn btn-primary">
                                                    Register
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                       
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="tab10">
                                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                                        {{ csrf_field() }}

                                        <div class="form-group{{ $errors->has('c_name') ? ' has-error' : '' }}">
                                            <label for="c_name" class="col-md-4 control-label">Company Name</label>

                                            <div class="col-md-6">
                                                <input id="c_name" type="text" class="form-control" name="c_name" value="{{ old('c_name') }}" required autofocus>

                                                @if ($errors->has('c_name'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('c_name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group{{ $errors->has('c_type') ? ' has-error' : '' }}">
                                            <label class="col-sm-4 control-label" for="c_type">Company Type</label>
                                            <div class="col-sm-6">
                                                <select class="select-group form-control">
                                                    <option value="0">select company type...</option>
                                                    <option value="govt">Government</option>
                                                    <option value="p_ngo">Private NGO</option>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                            <div class="col-md-6">
                                                <div class="input-group m-b-sm">
                                                    <span class="input-group-addon" id="basic-addon1">@</span>
                                                    <input type="email"  id="email"class="form-control" name="email" value="{{ old('email') }}" placeholder="example@gmail.com" aria-describedby="basic-addon1" required>
                                                </div>

                                                @if ($errors->has('email'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                                
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('bpassword') ? ' has-error' : '' }}">
                                            <label for="bpassword" class="col-md-4 control-label">Password</label>

                                            <div class="col-md-6">
                                                <input id="bpassword" type="password" class="form-control" name="bpassword" required>

                                                @if ($errors->has('bpassword'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('bpassword') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="bcpassword" class="col-md-4 control-label">Confirm Password</label>

                                            <div class="col-md-6">
                                                <input id="bcpassword" type="password" class="form-control" name="bcpassword" required>
                                            </div>
                                        </div>
                                        <input type="hidden" name="user_type" value="benefactor">
                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-4">
                                                <button type="submit" class="btn btn-primary">
                                                    Register
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
