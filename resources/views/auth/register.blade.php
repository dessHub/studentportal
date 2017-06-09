@extends('layouts.app')

@section('content')
<div class="container"style="padding-top:20px; background:inherit">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}
                       <div class="col-md-6">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-9">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phoneNo') ? ' has-error' : '' }}">
                            <label for="phoneNo" class="col-md-4 control-label">Mobile No:</label>

                            <div class="col-md-9">
                                <input id="phoneNo" type="text" class="form-control" name="phoneNo" value="{{ old('phoneNo') }}">

                                @if ($errors->has('phoneNo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phoneNo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                      <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                          <label for="gender" class="col-md-4 control-label">Gender:</label>

                          <div class="col-md-9">
                               <select class="form-control" id="gender" name="gender" required="true" value="{{ old('gender') }}" style="background-color : inherit">
                                   <option  value="">Select Gender</option>
                                   <option  value="Male">Male</option>
                                    <option  value="Female">Female</option>

                               </select>
                          </div>
                      </div>


                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-9">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                          </div>

                          <div class="col-md-6">

                          <div class="form-group{{ $errors->has('regNo') ? ' has-error' : '' }}">
                              <label for="regNo" class="col-md-4 control-label">Staff No:</label>

                              <div class="col-md-9">
                                  <input id="regNo" type="text" class="form-control" name="regNo" value="{{ old('regNo') }}">
                                  <input id="role" type="hidden" class="form-control" name="role" value="Lecturer">
                                  <input id="course" type="hidden" class="form-control" name="course" value="NA">
                                  <input id="cat" type="hidden" class="form-control" name="cat" value="Staff">

                                  @if ($errors->has('regNo'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('regNo') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                              <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                              <div class="col-md-9">
                                  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                  @if ($errors->has('email'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('email') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                        <div class="form-group{{ $errors->has('dept') ? ' has-error' : '' }}">
                            <label for="dept" class="col-md-4 control-label">Department:</label>

                            <div class="col-md-9">
                                 <select class="form-control" id="dept" name="dept" required="true" value="{{ old('dept') }}" style="background-color : inherit">
                                     <option  value="">Select Department</option>

                                      <option  value="Maths And Physics">Maths And Physics</option>

                                 </select>
                            </div>
                        </div>

                      <div class="form-group{{ $errors->has('notification') ? ' has-error' : '' }}">
                          <label for="notification" class="col-md-12 control-label">Mode of Notification:</label>

                          <div class="col-md-12">
                               <select class="form-control" id="notification" name="notification" required="true" value="{{ old('notification') }}" style="background-color : inherit">
                                   <option  value="">Select Notifiaction</option>
                                   <option  value="Text">Text</option>
                                    <option  value="Email">Email</option>

                               </select>
                          </div>
                      </div>

                          </div>

                 <div class="col-md-4">

                     <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                         <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                         <div class="col-md-9">
                             <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                             @if ($errors->has('password_confirmation'))
                                 <span class="help-block">
                                     <strong>{{ $errors->first('password_confirmation') }}</strong>
                                 </span>
                             @endif
                         </div>
                     </div>

                 </div>

                 <div class="col-md-6">
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4" style="padding-top:30px;">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Register
                                </button>
                            </div>
                        </div></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
