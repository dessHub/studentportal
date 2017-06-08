@extends('layouts.app')

@section('content')
<div class="container"style="padding-top:20px;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Units Asignment Portal</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/asignunits') }}">
                        {{ csrf_field() }}

                       <div class="col-md-1">
                        <div class="form-group{{ $errors->has('semester') ? ' has-error' : '' }}">
                            <label for="semester" class="col-md-412 control-label">Semester</label>

                            <div class="col-md-12">
                              <input class="form-control" type="text" id="semester" name="semester" required="true" value="{{$semester}}" >

                            </div>
                        </div>
                      </div>

                     <div class="col-md-2">
                      <div class="form-group{{ $errors->has('session') ? ' has-error' : '' }}">
                          <label for="session" class="col-md-12 control-label">Session:</label>

                          <div class="col-md-12">
                            <input class="form-control" type="text" id="session" name="session" required="true" value="{{$session}}" >

                          </div>
                      </div>
                    </div>

                     <div class="col-md-2">
                      <div class="form-group{{ $errors->has('year') ? ' has-error' : '' }}">
                          <label for="year" class="col-md-12 control-label">Year:</label>

                          <div class="col-md-12">
                            <input class="form-control" type="text" id="year" name="year" required="true" value="{{$year}}" >

                          </div>
                      </div>
                    </div>

                    <div class="col-md-2">
                      <div class="form-group{{ $errors->has('academic_year') ? ' has-error' : '' }}">
                          <label for="academic_year" class="col-md-12 control-label">Academic Year:</label>

                          <div class="col-md-12">
                            <input class="form-control" type="text" id="academic_year" name="academic_year" required="true" value="{{$academic_year}}" >

                          </div>
                      </div>

                          </div>

                           <div class="col-md-2">
                            <div class="form-group{{ $errors->has('course') ? ' has-error' : '' }}">
                                <label for="course" class="col-md-12 control-label">Course Code:</label>

                                <div class="col-md-12">
                                     <input class="form-control" type="text" id="course" name="course" required="true" value="{{$course}}" >

                                </div>
                            </div>
                          </div>

                           <div class="col-md-2">
                            <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                                <label for="code" class="col-md-12 control-label">Units Code:</label>

                                <div class="col-md-12">
                                     <select class="form-control" id="code" name="code" required="true" value="{{ old('code') }}" style="background-color : inherit">
                                         <option  value="">Select Unit</option>
                                         @foreach($codes as $key)
                                         <option  value="{{$key->code}}">{{$key->code}}</option>
                                         @endforeach
                                     </select>
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
                            <th>Course</th>
                            <th>year</th>
                            <th>Academic Year</th>
                            <th>Semester</th>
                            <th>Session</th>
                            <th>Code</th>

                        </thead>
                        <tbody>
                          @foreach($units as $key)
                            <tr>
                              <td>{{ $key->course}}</td>
                              <td>{{ $key->year }}</td>
                              <td>{{ $key->academic_year }}</td>
                              <td>{{ $key->semester}}</td>
                              <td>{{ $key->session }}</td>
                              <td>{{ $key->code }}</td>

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
