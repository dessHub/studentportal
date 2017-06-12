<div id="navigation">
  <ul>
    <li class="first selected"><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ url('/forstudent') }}">Student</a></li>
      <li><a href="{{ url('/admin') }}">Admin</a></li>
        <li><a href="{{ url('/forparent') }}">Parent</a></li>
        <!-- Authentication Links -->
        @if (Auth::guest())
            <li><a href="{{ url('/login') }}">Login</a></li>

        @else
          @if (Auth::user()->role === 'Lecturer')
             <li><a href="{{ url('/viewresults') }}">View Results</a></li>
          @elseif (Auth::user()->role === 'Admin')
             <li><a href="{{ url('/viewresults') }}">View Results</a></li>
              <li><a href="{{ url('/lecturers')}}" ><span  style="color:blue;">Lecturers</span></a></li>

          @elseif (Auth::user()->role === 'Student')
          <li><a href="{{ url('/myresults') }}">View Results</a></li>

          @endif
              <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>


        @endif
  </ul>
</div>
<div id="search">
</div>
