<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact and About</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="../css/space.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

<script src="../js/space.js"></script>


</head>
<body>

    
<nav class="navbar navbar-expand-md border-top" data-spy="affix" data-offset-top="0">
    <!-- Brand -->
    <a class="navbar-brand d-block d-sm-none d-none d-sm-block d-md-none" href="/">Beyond Us</a>
    <!-- Toggler/collapsibe Button -->
<button class="navbar-toggler custom-toggler " type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav mx-auto">
        <li class="nav-item">
        <a class="nav-link border-right" href="/">Home</a>
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
        <a class="active nav-link " href="#">About</a>
        </li>
    </ul>
    </div>
</nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 container-fluid galacticnest border-top shadow-sm">
                <div class="row nebmargin-top">
                    <h1 style="margin-left:20px;">About this Website</h1>
                    <p class="quest">
                        This website is just a way for anyone to freely learn a little Astronomy. After learning some of it myself, I have become a little passionate about it. This is the first website I have publicly published and made completely on my own. I hope you enjoy it and share it with anyone you think would be interested.
                        <br>
                        <br>
                        I accept any feedback, please let me know if you have any astronomy related questions, or if there is any misinformation.
                    </p>
                    <!-- @if (Session::has('flash_message'))
                        <div class="alert alert-success">{{ Session::get('flas_message') }}</div>
                    @endif
                    <form method="POST" action="{{ route('contact.store') }}">
                        {{ csrf_field() }}
                        <h3><center>More Questions?</center></h3>
                        <center><small>Send me an email and I'll get back to you as soon as I can!</small></center>
                            <div class="name form-group">
                                <input name="name" id="name" type="text" class="feedback-input form-control" placeholder="Name" required/>
                            </div>  
                            <div class="email form-group">
                                <input name="email" id="email" type="email" class="feedback-input form-control" placeholder="Email" required/>
                            </div>
                            <textarea name="text" id="message" class="feedback-input form-control" placeholder="Message" required></textarea>
                            <center><button type="submit">
                                <img src="../images/continuous-line-envelope.png" height="50px">
                            </button></center>
                    </form> -->
                </div>

            </div>
            <div class="col-lg-3 container-fluid text-center profileNest border-top shadow-sm">
                <img src="../images/milkysq.jpg" alt="..." class="img-thumbnail" style="margin-top:15px;" width="200" height="300">
                <h4>Taylor Sessions</h4>
                <p>
                    <mark>Full-Stack Web Developer</mark><br>  Passionate about Astronomy<br><br>
                    For questions related to my site, contact me at <a href="mailto:Astronomybeyondus@gmail.com">Astronomybeyondus@gmail.com</a><br>or<br>For business contact me at <a href="mailto:Sessions.Tay@gmail.com">Sessions.Tay@gmail.com</a>
                    <br><br>
                    <img src="../images/Space-Icons-by-GoodStuffNoNonsense_com/color-sticker/PNG/space-observatory-128x128.png" alt="Space Observatory">
                </p>
            </div>
        </div>
    </div>

    <footer class="galacticfooter text-center">
        <p>Beyond Us © 2018</p>
        <a href="mailto:Astronomybeyondus@gmail.com"> <img src="../images/env smol.png" style="padding:5px;" height="60px"></a> <a href="/Bibliography"><img src="../images/info.png" style="padding:5px;" height="50px"></a> <a href="https://www.nasa.gov/"><img src="../images/rocket-ship.png" style="padding:5px;" height="55px"></a>
    </footer>
</body>

</html>