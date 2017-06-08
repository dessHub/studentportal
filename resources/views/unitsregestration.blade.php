@extends('layouts.app')

@section('content')
<div class="container"style="padding-top:20px;">
    <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default">
              <div class="panel-heading">Units Asignment Portal</div>
              <div class="panel-body">
                  <form class="form-horizontal" role="form" method="POST" action="{{ url('/saveunits') }}">
                      {{ csrf_field() }}
                    <div class="col-md-12">

                   <div class="col-md-3">
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-412 control-label">Name</label>

                        <div class="col-md-12">
                          <input class="form-control" type="text" id="name" name="name" required="true" value="{{Auth::user()->name}}" >

                        </div>
                    </div>
                  </div>

                 <div class="col-md-3">
                  <div class="form-group{{ $errors->has('regNo') ? ' has-error' : '' }}">
                      <label for="regNo" class="col-md-12 control-label">Registration:</label>

                      <div class="col-md-12">
                        <input class="form-control" type="text" id="regNo" name="regNo" required="true" value="{{Auth::user()->regNo}}" >

                      </div>
                  </div>
                </div>

                 <div class="col-md-3">
                  <div class="form-group{{ $errors->has('course') ? ' has-error' : '' }}">
                      <label for="course" class="col-md-12 control-label">Course:</label>

                      <div class="col-md-12">
                        <input class="form-control" type="text" id="course" name="course" required="true" value="{{Auth::user()->course}}" >

                      </div>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                      <label for="code" class="col-md-12 control-label">Code:</label>

                      <div class="col-md-12">
                        <input class="form-control" type="text" id="code" name="code" required="true" value="{{Auth::user()->code}}" >

                      </div>
                  </div>


                  </div>

                     <div class="col-md-12">
                       <div class="col-md-2">
                      <div class="form-group{{ $errors->has('semester') ? ' has-error' : '' }}">
                          <label for="semester" class="col-md-412 control-label">Semester</label>

                          <div class="col-md-12">
                               <select class="form-control" id="semester" name="semester" required="true" value="{{ $sem}}" style="background-color : inherit;">
                                   <option  value="{{ $sem}}">{{ $sem}}</option>

                               </select>
                          </div>
                      </div>
                    </div>

                   <div class="col-md-2">
                    <div class="form-group{{ $errors->has('session') ? ' has-error' : '' }}">
                        <label for="session" class="col-md-12 control-label">Session:</label>

                        <div class="col-md-12">
                             <select class="form-control" id="session" name="session" required="true" value="{{ $sess}}" style="background-color : inherit">
                                 <option  value="{{ $sess}}">{{ $sess}}</option>

                             </select>
                        </div>
                    </div>
                  </div>

                   <div class="col-md-2">
                    <div class="form-group{{ $errors->has('year') ? ' has-error' : '' }}">
                        <label for="year" class="col-md-12 control-label">Year:</label>

                        <div class="col-md-12">
                             <select class="form-control" id="year" name="year" required="true" value="{{ $yr}}" style="background-color : inherit">
                                 <option  value="{{ $yr}}">{{ $yr}}</option>

                             </select>
                        </div>
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="form-group{{ $errors->has('academic_year') ? ' has-error' : '' }}">
                        <label for="academic_year" class="col-md-12 control-label">Academic Year:</label>

                        <div class="col-md-12">
                             <select class="form-control" id="academic_year" name="academic_year" required="true" value="{{ $acd_yr}}" style="background-color : inherit">
                                 <option  value="{{ $acd_yr}}">{{ $acd_yr}}</option>

                             </select>
                        </div>
                    </div>

                        </div>

                         <div class="col-md-2">
                          <div class="form-group{{ $errors->has('year_of_study') ? ' has-error' : '' }}">
                              <label for="year_of_study" class="col-md-12 control-label">Year Of Study:</label>

                              <div class="col-md-12">
                                   <select class="form-control" id="year_of_study" name="year_of_study" required="true" value="{{ $yr_std}}" style="background-color : inherit">
                                       <option  value="{{ $yr_std}}">{{ $yr_std}}</option>

                                   </select>
                              </div>
                          </div>
                        </div>

                    <div class="col-md-1">
                      <div class="form-group">
                          <div class="col-md-12 " style="padding-top:25px;">

                              <button type="submit" class="btn btn-primary">
                                  <i class="fa fa-btn fa-refresh"></i>Units
                              </button>
                          </div>
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
                            <th>Code</th>
                            <th>Name</th>

                        </thead>
                        <tbody>
                          @foreach($units as $key)
                            <tr>
                              <td>{{ $key->code}}</td>
                              <td>{{ $key->course }}</td>

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
