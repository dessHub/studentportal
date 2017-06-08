@extends('layouts.app')

@section('content')
<div class="container"style="padding-top:20px;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Register Session</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/session') }}">
                        {{ csrf_field() }}
                       <div class="col-md-2">
                        <div class="form-group{{ $errors->has('semester') ? ' has-error' : '' }}">
                            <label for="semester" class="col-md-4 control-label">Semester</label>

                            <div class="col-md-12">
                                 <select class="form-control" id="semester" name="semester" required="true" value="{{ old('semester') }}" style="background-color : inherit">
                                     <option  value="">Select Semester</option>
                                     <option  value="I">I</option>
                                      <option  value="II">II</option>
                                       <option  value="III">III</option>

                                 </select>
                            </div>
                        </div>
                      </div>

                     <div class="col-md-2">
                      <div class="form-group{{ $errors->has('start') ? ' has-error' : '' }}">
                          <label for="start" class="col-md-4 control-label">Start:</label>

                          <div class="col-md-12">
                               <select class="form-control" id="start" name="start" required="true" value="{{ old('start') }}" style="background-color : inherit">
                                   <option  value="">Select Month</option>
                                   <option  value="Jan">Jan</option>
                                    <option  value="Feb">Feb</option>
                                    <option  value="March">March</option>
                                     <option  value="April">April</option>
                                     <option  value="May">May</option>
                                      <option  value="June">June</option>
                                      <option  value="July">July</option>
                                       <option  value="Aug">Aug</option>
                                       <option  value="Sept">Sept</option>
                                        <option  value="Oct">Oct</option>
                                        <option  value="Nov">Nov</option>
                                         <option  value="Dec">Dec</option>

                               </select>
                          </div>
                      </div>
                    </div>

                     <div class="col-md-2">
                      <div class="form-group{{ $errors->has('end') ? ' has-error' : '' }}">
                          <label for="end" class="col-md-4 control-label">End:</label>

                          <div class="col-md-12">
                               <select class="form-control" id="end" name="end" required="true" value="{{ old('end') }}" style="background-color : inherit">
                                   <option  value="">Select Month</option>
                                   <option  value="Jan">Jan</option>
                                    <option  value="Feb">Feb</option>
                                    <option  value="March">March</option>
                                     <option  value="April">April</option>
                                     <option  value="May">May</option>
                                      <option  value="June">June</option>
                                      <option  value="July">July</option>
                                       <option  value="Aug">Aug</option>
                                       <option  value="Sept">Sept</option>
                                        <option  value="Oct">Oct</option>
                                        <option  value="Nov">Nov</option>
                                         <option  value="Dec">Dec</option>

                               </select>
                          </div>
                      </div>
                    </div>

                     <div class="col-md-2">
                      <div class="form-group{{ $errors->has('year') ? ' has-error' : '' }}">
                          <label for="year" class="col-md-4 control-label">Year:</label>

                          <div class="col-md-12">
                               <select class="form-control" id="year" name="year" required="true" value="{{ old('year') }}" style="background-color : inherit">
                                   <option  value="">Select Year</option>
                                   <option  value="2017">2017</option>
                                    <option  value="2016">2016</option>

                               </select>
                          </div>
                      </div>
                    </div>

                    <div class="col-md-2">
                      <div class="form-group{{ $errors->has('academic_year') ? ' has-error' : '' }}">
                          <label for="academic_year" class="col-md-12 control-label">Academic Year:</label>

                          <div class="col-md-12">
                               <select class="form-control" id="academic_year" name="academic_year" required="true" value="{{ old('academic_year') }}" style="background-color : inherit">
                                   <option  value="">Select Academic Year</option>
                                   <option  value="2017-2017">2017-2017</option>
                                    <option  value="2016-2017">2016-2017</option>
                                    <option  value="2016-2016">2016-2016</option>
                                     <option  value="2015-2016">2015-2016</option>
                                      <option  value="2015-2015">2015-2015</option>

                               </select>
                          </div>
                      </div>

                          </div>

                      <div class="col-md-2">
                        <div class="form-group">
                            <div class="col-md-12 " style="padding-top:25px;">
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

<div class="container"style="">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"></div>
                <div class="panel-body">
                  <div class="table-responsive">
                    <table class="table table-hover table-striped">

                        <thead>
                            <th>Semester</th>
                            <th>Start</th>
                            <th>End</th>
                            <th>Year</th>
                            <th>academic_year</th>

                        </thead>
                        <tbody>
                          @foreach($sessions as $key)
                            <tr>
                              <td>{{ $key->semester}}</td>
                              <td>{{ $key->start }}</td>
                              <td>{{ $key->end }}</td>
                              <td>{{ $key->year }}</td>
                              <td>{{ $key->academic_year }}</td>

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
