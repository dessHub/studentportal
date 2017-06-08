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
            <li><a href="{{ url('/asignunits') }}">Asign Units</a></li>
            <li><a href="{{ url('/viewresults') }}">View Results</a></li>
            <li><a href="{{ url('/getres') }}">Update Results</a></li>
            <li><a href="{{ url('/asignments') }}">Asignments</a></li>
          @elseif (Auth::user()->role === 'Student')
          <li><a href="{{ url('/regunits') }}">Register Units</a></li>
          <li><a href="{{ url('/myresults') }}">View Results</a></li>
          <li><a href="{{ url('/viewasignments') }}">Asignments</a></li>

          @endif
              <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>


        @endif
  </ul>
</div>
<div id="search">
  <form action="" method="">
    <input type="text" value="Search" class="txtfield" onblur="javascript:if(this.value==''){this.value=this.defaultValue;}" onfocus="javascript:if(this.value==this.defaultValue){this.value='';}" />
    <input type="submit" value="" class="button" />
  </form>
</div>
