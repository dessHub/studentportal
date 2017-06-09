@extends('layouts.app')

@section('content')
<div class="container"style="padding-top:20px;">
    <div class="row">
        <div class="col-md-12">
          @if(Auth::user()->role === "Lecturer")
            <div class="panel panel-default">
                <div class="panel-heading">Units Asignment Portal</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/asignments') }}">
                        {{ csrf_field() }}
                        <div class="col-md-12">
                       <div class="col-md-1">
                        <div class="form-group{{ $errors->has('semester') ? ' has-error' : '' }}">
                            <label for="semester" class="col-md-412 control-label">Semester</label>

                            <div class="col-md-12">
                                 <select class="form-control" id="semester" name="semester" required="true" value="{{ old('semester') }}" style="background-color : inherit; width:70px;">
                                     <option  value="">Select Semester</option>
                                     <option  value="I">I</option>
                                      <option  value="II">II</option>
                                       <option  value="III">III</option>

                                 </select>
                            </div>
                        </div>
                      </div>

                     <div class="col-md-2">
                      <div class="form-group{{ $errors->has('session') ? ' has-error' : '' }}">
                          <label for="session" class="col-md-12 control-label">Session:</label>

                          <div class="col-md-12">
                               <select class="form-control" id="session" name="session" required="true" value="{{ old('session') }}" style="background-color : inherit">
                                   <option  value="">Select Session</option>
                                   @foreach($sessions as $key)
                                   <option  value="{{$key->start}}-{{$key->end}}">{{$key->start}}-{{$key->end}}</option>
                                   @endforeach

                               </select>
                          </div>
                      </div>
                    </div>

                     <div class="col-md-2">
                      <div class="form-group{{ $errors->has('year') ? ' has-error' : '' }}">
                          <label for="year" class="col-md-12 control-label">Year:</label>

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
                            <div class="form-group{{ $errors->has('course') ? ' has-error' : '' }}">
                                <label for="course" class="col-md-12 control-label">Course Code:</label>

                                <div class="col-md-12">
                                     <select class="form-control" id="course" name="course" required="true" value="{{ old('course') }}" style="background-color : inherit">
                                         <option  value="">Select Course</option>
                                         @foreach($courses as $key)
                                         <option  value="{{$key->code}}">{{$key->code}}</option>
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
                        </div>
                       <div class="col-md-1">
                        <div class="form-group{{ $errors->has('year_of_study') ? ' has-error' : '' }}">
                            <label for="year_of_study" class="col-md-12 control-label">year_of_study</label>

                            <div class="col-md-12">
                                 <select class="form-control" id="year_of_study" name="year_of_study" required="true" value="{{ old('semester') }}" style="background-color : inherit; width:70px;">
                                     <option  value="">Select year_of_study</option>
                                     <option  value="I">I</option>
                                      <option  value="II">II</option>
                                       <option  value="III">III</option>
                                        <option  value="II">Iv</option>
                                         <option  value="III">v</option>

                                 </select>
                            </div>
                        </div>
                      </div>
                     <div class="col-md-9">

                      <div class="col-md-12">
                       <div class="form-group{{ $errors->has('asignment') ? ' has-error' : '' }}">
                           <label for="asignment" class="col-md-12 control-label">Asignment Section:</label>

                           <div class="col-md-12">
                                <textarea id="asignment" class="form-control ckeditor" name="asignment"></textarea>

                                @if ($errors->has('asignment'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('asignment') }}</strong>
                                    </span>
                                @endif
                           </div>
                       </div>
                     </div>

                     </div>
                      <div class="col-md-2">
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
        @else
          <div class="panel panel-default">
              <div class="panel-heading">Units Asignment Portal</div>
              <div class="panel-body">
                  <form class="form-horizontal" role="form" method="POST" action="{{ url('/viewasignments') }}">
                      {{ csrf_field() }}
                      <div class="col-md-12">
                     <div class="col-md-2">
                      <div class="form-group{{ $errors->has('semester') ? ' has-error' : '' }}">
                          <label for="semester" class="col-md-412 control-label">Semester</label>

                          <div class="col-md-12">
                               <select class="form-control" id="semester" name="semester" required="true" value="{{ old('semester') }}" style="background-color : inherit;">
                                   <option  value="">Select Semester</option>
                                   <option  value="I">I</option>
                                    <option  value="II">II</option>
                                     <option  value="III">III</option>

                               </select>
                          </div>
                      </div>
                    </div>

                   <div class="col-md-2">
                    <div class="form-group{{ $errors->has('session') ? ' has-error' : '' }}">
                        <label for="session" class="col-md-12 control-label">Session:</label>

                        <div class="col-md-12">
                             <select class="form-control" id="session" name="session" required="true" value="{{ old('session') }}" style="background-color : inherit">
                                 <option  value="">Select Session</option>
                                 @foreach($sessions as $key)
                                 <option  value="{{$key->start}}-{{$key->end}}">{{$key->start}}-{{$key->end}}</option>
                                 @endforeach

                             </select>
                        </div>
                    </div>
                  </div>

                   <div class="col-md-2">
                    <div class="form-group{{ $errors->has('year') ? ' has-error' : '' }}">
                        <label for="year" class="col-md-12 control-label">Year:</label>

                        <div class="col-md-12">
                             <select class="form-control" id="year" name="year" required="true" value="{{ old('year') }}" style="background-color : inherit">
                                 <option  value="">Select Year</option>
                                 <option  value="2017">2017</option>
                                  <option  value="2016">2016</option>

                             </select>
                        </div>
                    </div>
                  </div>

                  <div class="col-md-3">
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
                          <div class="form-group{{ $errors->has('course') ? ' has-error' : '' }}">
                              <label for="course" class="col-md-12 control-label">Course Code:</label>

                              <div class="col-md-12">
                                   <select class="form-control" id="course" name="course" required="true" value="{{ old('course') }}" style="background-color : inherit">
                                       <option  value="">Select Course</option>
                                       @foreach($courses as $key)
                                       <option  value="{{$key->code}}">{{$key->code}}</option>
                                       @endforeach

                                   </select>
                              </div>
                          </div>
                        </div>
                      </div>
                     <div class="col-md-4">
                      <div class="form-group{{ $errors->has('year_of_study') ? ' has-error' : '' }}">
                          <label for="year_of_study" class="col-md-12 control-label">year_of_study</label>

                          <div class="col-md-12">
                               <select class="form-control" id="year_of_study" name="year_of_study" required="true" value="{{ old('semester') }}" style="background-color : inherit; ">
                                   <option  value="">Select year_of_study</option>
                                   <option  value="I">I</option>
                                    <option  value="II">II</option>
                                     <option  value="III">III</option>
                                      <option  value="II">Iv</option>
                                       <option  value="III">v</option>

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
                      <div class="form-group">
                          <div class="col-md-12 " style="padding-top:25px;">
                              <button type="submit" class="btn btn-primary">
                                  <i class="fa fa-btn fa-search"></i> Asigments
                              </button>
                          </div>
                      </div>
                    </div>
                  </form>
              </div>
          </div>


        @endif

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
                            <th>Unit</th>
                            <th>Class</th>
                            <th>year</th>
                            <th>Asignment</th>
                            <th>Lecturer</th>

                        </thead>
                        <tbody>
                          @foreach($asignments as $key)
                            <tr>
                              <td>{{ $key->unit}}</td>
                              <td>{{ $key->course }}</td>
                              <td>{{ $key->year_of_study }}</td>
                              <td>{{ $key->asignment}}</td>
                              <td>{{ $key->lecturer}}</td>

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
