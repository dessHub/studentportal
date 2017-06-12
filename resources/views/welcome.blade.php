<!doctype html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>School</title>
  <!-- Fonts -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

<!-- Styles -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
{{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
{{-- <link href="{{ elixir('css/style.css') }}" rel="stylesheet"> --}}
  <link rel="stylesheet" href="./public/css/style.css" type="text/css" charset="utf-8" />
  <!--[if lte IE 7]>
    <link rel="stylesheet" href="css/ie.css" type="text/css" charset="utf-8" />
  <![endif]-->
</head>
<body>

<div class="wrapper">
   @include('partials.inheader')

    <div class="">

<div id="adbox">
  <div class="body row" style="margin-top:50px;">
    <div class="col-md-8">
      <img src="./public/images/images.jpg" alt="Img" class="thumbnail img-resposive" style="width:100%; height:200px;">

    </div>
    <div class="col-md-4">
      <p>
        <span>
          Welcome To Uber Campus Website.
        </span>
        Get the latest News about the campus.
      </p>
      <img src="./public/images/pic.jpg" alt="Img" class="thumbnail img-resposive" style="width:100%; height:150px;">
    </div>
  </div>
  <div class="footer">
    <ul>
      <li class="selected">
        <a href="#"><img src="./public/images/pic.jpg" alt="Img" style="width:60px; height:80px;"/></a>
        <p>
          <a href="#">Career Events Day</a><br/>
          On 10th Feb, 2017, Uber Media School hosted the Young Members Group of <a href="#">More</a>
        </p>
      </li>
      <li>
        <a href="#"><img src="./public/images/pic2.jpg" alt="Img" style="width:60px; height:80px;" /></a>
        <p>
          <a href="#">Campus Library</a><br/>
          Our library is rank no 3 modern library in Africa.
        </p>
      </li>
      <li>
        <a href="#"><img src="./public/images/pic3.jpg" alt="Img" style="width:60px; height:80px;" /></a>
        <p>
          <a href="#">School Administration Block</a><br/>
          With its ultra-modern physical infrastructure and state-of-the-art ICT facilities.
        </p>
      </li>
    </ul>
    <span class="bottom-shadow"></span>
  </div>
</div>


      </div>


</div>


</body>

</html>
