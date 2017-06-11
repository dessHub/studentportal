@extends('layouts.app')

@section('content')
<div id="contents">
  <div class="background">
    <div id="blogs">

      <div class="section">
        <h3><span>.</span></h3>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Pending Access Reguests.</div>
                    <div class="panel-body">
                      <div class="table-responsive">
                        <table class="table table-hover table-striped">

                            <thead>
                                <th>Id</th>
                                <th>Reg No</th>
                                <th>Name</th>
                                <th>Mobile No</th>
                                <th>Email</th>
                                <th>Department</th>
                                <th>Action</th>

                            </thead>
                            <tbody>
                              @foreach($staff as $key)
                                <tr>
                                  <td>{{ $key->id }}</td>
                                  <td>{{ $key->regNo}}</td>
                                  <td>{{ $key->name }}</td>
                                  <td>{{ $key->phoneNo}}</td>
                                  <td>{{ $key->email }}</td>
                                  <td>{{ $key->department }}</td>
                                          <td>
                                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/role') }}">
                                                {{ csrf_field() }}
                                                <input class="form-control" type="hidden" name="user_id" id="user_id" value="{{ $key->id}}"/>

                                                <button type="submit" class="btn btn-info">
                                                    <i class="fa fa-btn fa-plus"></i> Grant Access
                                                </button>

                                                </form>
                                          </td>
                                        </tr>

                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                      </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Registered Lecturers.</div>
                    <div class="panel-body">
                      <div class="table-responsive">
                        <table class="table table-hover table-striped">

                            <thead>
                                <th>Id</th>
                                <th>Reg No</th>
                                <th>Name</th>
                                <th>Mobile No</th>
                                <th>Email</th>
                                <th>Department</th>
                                <th>Role</th>

                            </thead>
                            <tbody>
                              @foreach($lecturers as $key)
                                <tr>
                                  <td>{{ $key->id }}</td>
                                  <td>{{ $key->regNo}}</td>
                                  <td>{{ $key->name }}</td>
                                  <td>{{ $key->phoneNo}}</td>
                                  <td>{{ $key->email }}</td>
                                  <td>{{ $key->department }}</td>
                                  <td>{{ $key->role }}</td>

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
    </div>
  </div>
</div> <!-- /#contents -->
@endsection
