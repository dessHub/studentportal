@extends('layouts.app')

@section('content')
<div id="contents">
  <div class="background">
    <div id="blogs">
      <div class="sidebar">
        <div class="posts">
          <h3>Quick Links</h3>
          <ul style="color:blue;">
            @if (Auth::guest())
            <li><a href="{{ url('/psignup')}}" ><span  style="color:blue;">Register As A Parent</span></a></li>
            <li><a href="{{ url('/login')}}"><span  style="color:blue;">Login</span> </a></li>
            @else

            <li><a href="{{ url('/dept')}}" ><span  style="color:blue;">Departments</span></a></li>
            <li><a href="{{ url('/courses')}}"><span  style="color:blue;">Courses</span> </a></li>
            <li><a href="{{ url('/units')}}"><span  style="color:blue;">Units</span> </a></li>
            <li><a href="{{ url('/session') }}">Session</a></li>
            <li><a href="{{ url('/test') }}">Test</a></li>
            <li><a href="{{ url('/cat')}}"><span  style="color:blue;">Study Categories</span></a></li>
            <li><a href="{{ url('/')}}"><span  style="color:blue;">About Us</span></a></li>

               <li><a href="{{ url('/logout')}}"><span  style="color:blue;">Logout</span> </a></li>

            @endif
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
        <h3><span>Welcome to the Uber Campus Staff Portal. Sign Up with your Staff Credentials.</span></h3>
        <p>With Parent account , you can be able to view your student results and receive constant updates about your son/daugters progress at school.</p>
        <p>If you're having problems navigating the website portal, then don't hesitate to ask for help on the School IT Desk</a>.</p>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Courses Offered</div>
                    <div class="panel-body">
                      <div class="table-responsive">
                        <table class="table table-hover table-striped">

                            <thead>
                                <th>Id</th>
                                <th>Code</th>
                                <th>Name</th>
                                <th>Department</th>

                            </thead>
                            <tbody>
                              @foreach($courses as $key)
                                <tr>
                                  <td>{{ $key->id }}</td>
                                  <td>{{ $key->code}}</td>
                                  <td>{{ $key->name }}</td>
                                  <td>{{ $key->department }}</td>

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