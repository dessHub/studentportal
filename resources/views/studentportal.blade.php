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
            <li><a href="{{ url('/signup')}}" ><span  style="color:blue;">Register As Student</span></a></li>
            <li><a href="{{ url('/login')}}"><span  style="color:blue;">Login</span> </a></li>
            @else
              @if (Auth::user()->role === 'Student')

                  <li><a href="{{ url('/regunits')}}"><span  style="color:blue;">Register Units</span> </a></li>
                    <li><a href="{{ url('/myresults')}}"><span  style="color:blue;">Check Results</span></a></li>
                   <li><a href="{{ url('/viewasignments') }}"><span  style="color:blue;">Asignments</span></a></li>

              @endif
             <li><a href="{{ url('/logout')}}"><span  style="color:blue;">Logout</span> </a></li>
            @endif
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
        <h3><span>Welcome to the Uber Campus Student Portal. Sign Up with your Student Credentials.</span></h3>
        <p>With student account , you can be able to register units and view results.</p>
        <p>If you're having problems navigating the website portal, then don't hesitate to ask for help on the School IT Desk</a>.</p>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"></div>
                    <div class="panel-body">
                      <div class="table-responsive">
                        <table class="table table-hover table-striped">

                            <thead>
                                <th>Id</th>
                                <th>Registration No</th>
                                <th>Name</th>
                                <th>Email</th>

                            </thead>
                            <tbody>
                              @foreach($courses as $key)
                                <tr>
                                  <td>{{ $key->code }}</td>
                                  <td>{{ $key->name}}</td>
                                  <td>{{ $key->department }}</td>
                                  <td>{{ $key->category}}</td>

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
