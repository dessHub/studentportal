@extends('layouts.app')

@section('content')
<div class="container"style="padding-top:20px;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Register Units</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/units') }}">
                        {{ csrf_field() }}
                       <div class="col-md-3">
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
                      </div>

                       <div class="col-md-3">
                        <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                            <label for="code" class="col-md-12 control-label">Code:</label>

                            <div class="col-md-12">
                                <input id="code" type="text" class="form-control" name="code" value="{{ old('code') }}">

                                @if ($errors->has('code'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('code') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                      </div>

                     <div class="col-md-3">
                      <div class="form-group{{ $errors->has('cat') ? ' has-error' : '' }}">
                          <label for="cat" class="col-md-12 control-label">Category:</label>

                          <div class="col-md-12">
                               <select class="form-control" id="cat" name="cat" required="true" value="{{ old('cat') }}" style="background-color : inherit">
                                   <option  value="">Select Category</option>
                                   @foreach($cats as $key)
                                   <option  value="{{ $key->name}}">{{ $key->name}}</option>
                                   @endforeach

                               </select>
                          </div>
                      </div>
                          </div>

                      <div class="col-md-3">
                        <div class="form-group">
                            <div class="col-md-12" style="padding-top:25px;">
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
                            <th>Category</th>
                            <th>Name</th>
                            <th>Code</th>

                        </thead>
                        <tbody>
                          @foreach($units as $key)
                            <tr>
                              <td>{{ $key->category}}</td>
                              <td>{{ $key->name }}</td>
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
