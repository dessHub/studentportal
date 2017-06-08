@extends('layouts.app')

@section('content')
<div class="container"style="padding-top:20px;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Update Marks</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/saveres') }}">
                        {{ csrf_field() }}

                     <div class="col-md-12">
                       <div class="col-md-2">
                        <div class="form-group{{ $errors->has('semester') ? ' has-error' : '' }}">
                            <label for="semester" class="col-md-12 control-label">Semester</label>

                            <div class="col-md-12">
                              <input class="form-control" type="text" id="semester" name="semester" required="true" value="{{$sem}}" >

                            </div>
                        </div>
                      </div>

                     <div class="col-md-3">
                      <div class="form-group{{ $errors->has('session') ? ' has-error' : '' }}">
                          <label for="session" class="col-md-12 control-label">Session:</label>

                          <div class="col-md-12">
                            <input class="form-control" type="text" id="session" name="session" required="true" value="{{$sess}}" >

                          </div>
                      </div>
                    </div>

                     <div class="col-md-2">
                      <div class="form-group{{ $errors->has('year') ? ' has-error' : '' }}">
                          <label for="year" class="col-md-12 control-label">Year:</label>

                          <div class="col-md-12">
                            <input class="form-control" type="text" id="year" name="year" required="true" value="{{$yr}}" >

                          </div>
                      </div>
                    </div>

                    <div class="col-md-3">
                      <div class="form-group{{ $errors->has('academic_year') ? ' has-error' : '' }}">
                          <label for="academic_year" class="col-md-12 control-label">Academic Year:</label>

                          <div class="col-md-12">
                            <input class="form-control" type="text" id="academic_year" name="academic_year" required="true" value="{{$acd_yr}}" >

                          </div>
                      </div>

                          </div>

                          <div class="col-md-2">
                            <div class="form-group{{ $errors->has('year_of_study') ? ' has-error' : '' }}">
                                <label for="year_of_study" class="col-md-12 control-label">Year Of Study:</label>

                                <div class="col-md-12">
                                  <input class="form-control" type="text" id="year_of_study" name="year_of_study" required="true" value="{{$yr_std}}" >

                                </div>
                            </div>

                                </div>
                        </div>

                          <div class="col-md-12">
                           <div class="col-md-2">
                            <div class="form-group{{ $errors->has('course') ? ' has-error' : '' }}">
                                <label for="course" class="col-md-12 control-label">Course Code:</label>

                                <div class="col-md-12">
                                     <input class="form-control" type="text" id="course" name="course" required="true" value="{{$crs}}" >

                                </div>
                            </div>
                          </div>

                          <div class="col-md-2">
                            <div class="form-group{{ $errors->has('test') ? ' has-error' : '' }}">
                                <label for="test" class="col-md-12 control-label">Test:</label>

                                <div class="col-md-12">
                                  <input class="form-control" type="text" id="test" name="test" required="true" value="{{$test}}" >

                                </div>
                            </div>

                                </div>

                                 <div class="col-md-3">
                                  <div class="form-group{{ $errors->has('regNo') ? ' has-error' : '' }}">
                                      <label for="regNo" class="col-md-12 control-label">Student:</label>

                                      <div class="col-md-12">
                                           <select class="form-control" id="regNo" name="regNo" required="true" value="{{ old('regNo') }}" style="background-color : inherit">
                                               <option  value="">Select Reg No</option>
                                               @foreach($students as $key)
                                               <option  value="{{$key->regNo}}">{{$key->regNo}}</option>
                                               @endforeach
                                           </select>
                                      </div>
                                  </div>
                                </div>

                                 <div class="col-md-2">
                                  <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                                      <label for="code" class="col-md-12 control-label">Units Code:</label>

                                      <div class="col-md-12">
                                           <select class="form-control" id="code" name="code" required="true" value="{{ old('code') }}" style="background-color : inherit">
                                               <option  value="">Select Unit</option>
                                               @foreach($units as $key)
                                               <option  value="{{$key->code}}">{{$key->code}}</option>
                                               @endforeach
                                           </select>
                                      </div>
                                  </div>
                                </div>

                           <div class="col-md-2">
                            <div class="form-group{{ $errors->has('marks') ? ' has-error' : '' }}">
                                <label for="marks" class="col-md-12 control-label">Marks:</label>

                                <div class="col-md-12">
                                     <input class="form-control" type="text" id="marks" name="marks" required="true" value="" >

                                     @if ($errors->has('marks'))
                                         <span class="help-block">
                                             <strong>{{ $errors->first('marks') }}</strong>
                                         </span>
                                     @endif

                                </div>
                            </div>
                          </div>

                      <div class="col-md-1">
                        <div class="form-group">
                            <div class="col-md-12 " style="padding-top:25px;">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Save
                                </button>
                            </div>
                        </div>
                      </div>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container"style="">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"></div>
                <div class="panel-body">
                  <div class="table-responsive">
                    <table class="table table-hover table-striped">

                        <thead>
                            <th>Registration</th>
                            <th>Test</th>
                            <th>Unit</th>
                            <th>Marks</th>

                        </thead>
                        <tbody>
                          @foreach($results as $key)
                            <tr>
                              <td>{{ $key->regNo}}</td>
                              <td>{{ $key->test }}</td>
                              <td>{{ $key->unit }}</td>
                              <td>{{ $key->marks }}</td>

                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
