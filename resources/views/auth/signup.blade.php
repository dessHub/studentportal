@extends('layouts.app')

@section('content')
<div id="contents">
  <div class="background">
    <div id="blogs">
      <div class="sidebar">
        <div class="posts">
          <h3>Quick Links</h3>
          <ul style="color:blue;">
            <li><a href="{{ url('/signup')}}" ><span  style="color:blue;">Register As Student</span></a></li>
            <li><a href="{{ url('/login')}}"><span  style="color:blue;">Login</span> </a></li>
            <li><a href="{{ url('/regunits')}}"><span  style="color:blue;">Register Units</span> </a></li>
            <li><a href="{{ url('/myresults')}}"><span  style="color:blue;">Check Results</span></a></li>
            <li><a href="{{ url('/')}}"><span  style="color:blue;">About Us</span></a></li>
          </ul>
        </div>
        <div class="archives">
          <h3>Departments</h3>

            @foreach($departments as $key)
            <ul><li><a href="">{{ $key->name}}</a></li></ul>
            @endforeach

        </div>
      </div>
      <div class="section">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}
                       <div class="col-md-6">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-12 control-label">Name</label>

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phoneNo') ? ' has-error' : '' }}">
                            <label for="phoneNo" class="col-md-12 control-label">Mobile No:</label>

                            <div class="col-md-12">
                                <input id="phoneNo" type="text" class="form-control" name="phoneNo" value="{{ old('phoneNo') }}">

                                @if ($errors->has('phoneNo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phoneNo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                      <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                          <label for="gender" class="col-md-12 control-label">Gender:</label>

                          <div class="col-md-12">
                               <select class="form-control" id="gender" name="gender" required="true" value="{{ old('gender') }}" style="background-color : inherit">
                                   <option  value="">Select Gender</option>
                                   <option  value="Male">Male</option>
                                    <option  value="Female">Female</option>

                               </select>
                          </div>
                      </div>

                    <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                        <label for="code" class="col-md-12 control-label">Course Code:</label>

                        <div class="col-md-12">
                             <select class="form-control" id="course" name="code" required="true" value="{{ old('code') }}" style="background-color : inherit">
                                 <option  value="">Select Course</option>
                                   @foreach($courses as $key)
                                  <option  value="{{ $key->code }}">{{ $key->code }}</option>
                                  @endforeach

                             </select>
                        </div>
                    </div>


                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-12 control-label">Password</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
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

                          <div class="col-md-6">

                          <div class="form-group{{ $errors->has('regNo') ? ' has-error' : '' }}">
                              <label for="regNo" class="col-md-12 control-label">Registration No:</label>

                              <div class="col-md-12">
                                  <input id="regNo" type="text" class="form-control" name="regNo" value="{{ old('regNo') }}">
                                  <input id="role" type="hidden" class="form-control" name="role" value="Student">

                                  @if ($errors->has('regNo'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('regNo') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group{{ $errors->has('prnt') ? ' has-error' : '' }}">
                              <label for="prnt" class="col-md-12 control-label">Parent ID No:</label>

                              <div class="col-md-12">
                                  <input id="prnt" type="text" class="form-control" name="prnt" value="{{ old('prnt') }}">

                                  @if ($errors->has('prnt'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('prnt') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                              <label for="email" class="col-md-12 control-label">E-Mail Address</label>

                              <div class="col-md-12">
                                  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                  @if ($errors->has('email'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('email') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                        <div class="form-group{{ $errors->has('dept') ? ' has-error' : '' }}">
                            <label for="dept" class="col-md-12 control-label">Department:</label>

                            <div class="col-md-12">
                                 <select class="form-control" id="dept" name="dept" required="true" value="{{ old('dept') }}" style="background-color : inherit">
                                     <option  value="">Select Department</option>
                                       @foreach($departments as $key)
                                      <option  value="{{ $key->name }}">{{ $key->name }}</option>
                                      @endforeach

                                 </select>
                            </div>
                        </div>

                      <div class="form-group{{ $errors->has('cat') ? ' has-error' : '' }}">
                          <label for="cat" class="col-md-12 control-label">Category:</label>

                          <div class="col-md-12">
                               <select class="form-control" id="cat" name="cat" required="true" value="{{ old('cat') }}" style="background-color : inherit">
                                   <option  value="">Select Category</option>
                                     @foreach($cats as $key)
                                    <option  value="{{ $key->name }}">{{ $key->name }}</option>
                                    @endforeach

                               </select>
                          </div>
                      </div>


                          <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                              <label for="password-confirm" class="col-md-12 control-label">Confirm Password</label>

                              <div class="col-md-12">
                                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                  @if ($errors->has('password_confirmation'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('password_confirmation') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                        <div class="form-group">
                            <div class="col-md-6 " style="padding-top:30px;">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Register
                                </button>
                            </div>
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
</div> <!-- /#contents -->

@endsection
