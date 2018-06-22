<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

  <link rel="stylesheet" href="css/space.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

  <script src="js/space.js"></script>
</head>
<body onload="getNews()">
<div class="jumbotron">

</div>

<nav class="navbar navbar-expand-md border-top" data-spy="affix" data-offset-top="0">
    <!-- Brand -->
    <a class="navbar-brand d-block d-sm-none d-none d-sm-block d-md-none" href="#">Beyond Us</a>
    <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler custom-toggler " type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="active nav-link border-right" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link border-right" href="/planetarium">Learn & Interact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link border-right" href="/stargaze">Stargaze</a>
        </li>
        <li class="nav-item">
          <a class="nav-link border-right" href="/Astronomy">Astronomy</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contact">About</a>
        </li>
      </ul>
    </div>
  </nav>


<div class="container-fluid">
  <div class="row">

    <!--Main div that holds all content-->
    <div class="col-lg-10 container-fluid galacticnest border-top shadow-sm">
      
      <div class="row nebmargin-top">

        <div class="col-md-3 container-fluid nebimg">
          <img class="text-md-center text-center shadow" src="images/spaceship.png" alt="Spaceship">
        </div>
        <div class="col-md-6 container-fluid border-left">
          <br>
          <br>
          <h1>Welcome</h1><br>
          <p style="text-align: justify; margin-right:10px;">Here you can enjoy the wonders of Astronomy. Learn and interact with a Planetarium to learn about the constellations and enjoy a short introduction to what Astronomy is and the amazing history of it.
            <br>
            <br>
            The website is free to use and a fun way to learn some interesting science.
          </p>
        </div>
        <div class="row"><hr></div>
        </div>
      <div class="row">
      

      </div>
      <div class="row">
        <div class="col-lg-11 nebartmargin container-fluid">
          <div class="page-header border-bottom"><p><h1>Daily Read</h1> From Nasa</p></div>
          <br>
          <div class="page-header border-bottom">
            <h2 id="newsTitle"></h2><p id="newscopyright"></p>
          </div>
          <div class="text-md-left text-left newsapi" style="margin-bottom: 60px;">
            <p id="newsContent"></p> 
          </div>
        </div>


      </div>
  </div>
</div>
</div>
<footer class="galacticfooter text-center">
    <p>Beyond Us © 2018</p>
    <a href="mailto:Astronomybeyondus@gmail.com"> <img src="images/env smol.png" style="padding:5px;" height="60px"></a> <a href="/Bibliography"><img src="images/info.png" style="padding:5px;" height="50px"></a> <a href="https://www.nasa.gov/"><img src="images/rocket-ship.png" style="padding:5px;" height="55px"></a>
  </footer>
</body>
</html> 