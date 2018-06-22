<!DOCTYPE html>
<html lang="en">
<head>
  <title>Star Maps</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

  <link rel="stylesheet" href="../css/space.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

  <script src="../js/space.js"></script>
  <script src="../js/planetarium.js"></script>

  <!--[if lt IE 9]><script src="excanvas.min.js"></script><![endif]-->
  <script src="../js/VirtualSky/jquery-1.10.0.min.js"></script>
<script src="../js/VirtualSky/virtualsky.min.js" type="text/javascript"></script>

</head>
<body>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

    
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
          <a class="nav-link border-right" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="active nav-link border-right" href="#">Learn & Interact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link border-right" href="/stargaze">Stargaze</a>
        </li>
        <li class="nav-item">
          <a class="nav-link border-right" href="/Astronomy">Astronomy</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/contact">About</a>
        </li>
      </ul>
    </div>
  </nav>


  <div class="container-fluid">
    <div class="row">

      <!--Main div that holds all content-->
      <div class="col-lg-10 container-fluid galacticnest border-top shadow-sm">
        <div class="row nebmargin-top">

        </div>
        <div class="row">

          <div class="col-lg-4 i container-fluid planetariumoptions">


            <p>Change the coordinates by clicking the top left corner of the planetarium!
              <br>
              <br>
            </p>
            <div class="hidesmol">
              <p>With your mouse hovering over the planetarium, use your keyboard to change it.</p>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Key</th>
                    <th scope="col">Description</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">
                      <</th>
                        <td>Show Ecliptic Path</td>
                  </tr>
                  <tr>
                    <th scope="row">C</th>
                    <td>Hide Constellation Lines</td>
                  </tr>
                  <tr>
                    <th scope="row">H</th>
                    <td>Change Projection</td>
                  </tr>
                  <tr>
                    <th scope="row">J</th>
                    <td>Make live (if pressed repeatedly it will go in reverse)</td>
                  </tr>
                  <tr>
                    <th scope="row">M</th>
                    <td>Show Galactic Gridlines</td>
                  </tr>
                  <tr>
                    <th scope="row">O</th>
                    <td>Show Orbits</td>
                  </tr>
                  <tr>
                    <th scope="row">U</th>
                    <td>Hide Planet Labels</td>
                  </tr>
                  <tr>
                    <th scope="row">V</th>
                    <td>Show Cosntellation Labels</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="col-md-6 container-fluid planetarium">
            <div id="starmap" style="width:100%;height:500px;margin-top:35px;"></div>
          </div>

          <div class="container-fluid">
            <p>
              <center>There are 88 constellations officially recognized, below are 28 of some of the most popular ones.</center>
            </p>
          </div>
        </div>
        <div class="container col-lg-12" style="margin-bottom: 50px;">
          <div id="accordion">
            <div class="card">
              <div class="card-header">
                <a class="card-link" data-toggle="collapse" href="#andromeda">
                  <h4>Andromeda</h4>
                </a>
              </div>
              <div id="andromeda" class="collapse show" data-parent="#accordion">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-5 container-fluid constellationtext">
                      <h4>"The Chained Maiden"</h4>
                      <p>
                        <h5>Location:</h5> Northern Hemisphere
                        <br>
                        <h5>Visible:</h5> Best seen in November
                        <br>
                        <br>
                        <h5>About:</h5>This constellation is also known as "The Princess." It gets its name from the galaxy contained
                        in it, which also happens to be the closest galaxy to the Milky Way.
                      </p>
                    </div>
                    <div class="col-md-4 container-fluid constellation text-md-center text-center">
                      <a title="By IAU and Sky &amp; Telescope magazine (Roger Sinnott &amp; Rick Fienberg) (GIF image
                            download page
                            about) [CC BY 3.0 (https://creativecommons.org/licenses/by/3.0)], via Wikimedia Commons" href="https://commons.wikimedia.org/wiki/File:Andromeda_IAU.svg">
                        <img width="412" alt="Andromeda IAU" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/Andromeda_IAU.svg/512px-Andromeda_IAU.svg.png">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#aquarius">
                  <h4>Aquarius</h4>
                </a>
              </div>
              <div id="aquarius" class="collapse" data-parent="#accordion">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-5 container-fluid constellationtext">
                      <h4>"The Water Bearer"</h4>
                      <p>
                        <h5>Location:</h5> Southern Hemisphere
                        <br>
                        <h5>Visible:</h5> October
                        <br>
                        <br>
                        <h5>About:</h5>The area Aquarius sits in is often referred to as the "water" section, due to the amount
                        of water-related constellations in the area.
                        <br>Eta Aquarid meteor shower originates here, and occurs mid-April and through May.
                      </p>
                    </div>
                    <div class="col-md-4 container-fluid constellation">
                      <a title="By IAU and Sky &amp; Telescope magazine (Roger Sinnott &amp; Rick Fienberg) (image
                          download page
                          about) [CC BY 3.0 (https://creativecommons.org/licenses/by/3.0)], via Wikimedia Commons" href="https://commons.wikimedia.org/wiki/File:Aquarius_IAU.svg">
                        <img width="412" alt="Aquarius IAU" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9c/Aquarius_IAU.svg/512px-Aquarius_IAU.svg.png">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#aquila">
                  <h4>Aquila</h4>
                </a>
              </div>
              <div id="aquila" class="collapse" data-parent="#accordion">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-5 container-fluid constellationtext">
                      <h4>"The Eagle"</h4>
                      <p>
                        <h5>Location:</h5> Equatorial
                        <br>
                        <h5>Visible:</h5> September
                        <br>
                        <br>
                        <h5>About:</h5>In 1999, this was the source of a nova great enough to be seen with the naked eye. The
                        xplosion was frm a white dwarf star 13,000 light years away. Aquila takes part in the Summer Triangle
                      </p>
                    </div>
                    <div class="col-md-4 container-fluid constellation">
                      <a title="By IAU and Sky &amp; Telescope magazine (Roger Sinnott &amp; Rick Fienberg) (GIF image
                    download page
                    about) [CC BY 3.0 (https://creativecommons.org/licenses/by/3.0)], via Wikimedia Commons" href="https://commons.wikimedia.org/wiki/File:Aquila_IAU.svg">
                        <img width="412" alt="Aquila IAU" src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fb/Aquila_IAU.svg/512px-Aquila_IAU.svg.png">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#aries">
                  <h4>Aries</h4>
                </a>
              </div>
              <div id="aries" class="collapse" data-parent="#accordion">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-5 container-fluid constellationtext">
                      <h4>"The Ram"</h4>
                      <p>
                        <h5>Location:</h5> Northern Hemisphere
                        <br>
                        <h5>Visible:</h5> Best seen in December
                        <br>
                        <br>
                        <h5>About:</h5>One of the twelve zodiac constellations. The constellation doesn't have many significant
                        nebulae or galaxies, but the galaxies it does have are scientifically interesting spiral, elliptical
                        and interacting galaxies.
                      </p>
                    </div>
                    <div class="col-md-4 container-fluid constellation">
                      <a title="By IAU and Sky &amp; Telescope magazine (Roger Sinnott &amp; Rick Fienberg) (IAU site) [CC BY 3.0 (https://creativecommons.org/licenses/by/3.0)], via Wikimedia Commons"
                        href="https://commons.wikimedia.org/wiki/File:Aries_IAU.svg">
                        <img width="412" alt="Aries IAU" src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fc/Aries_IAU.svg/512px-Aries_IAU.svg.png">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#asterism">
                  <h4>Asterisms</h4>
                </a>
              </div>
              <div id="asterism" class="collapse" data-parent="#accordion">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-5 container-fluid constellationtext">
                      <p>
                        <br> An asterism is a noticeable pattern of stars in the sky.It is typically smaller than a constellation.
                      </p>

                      <h4>Winter Hexagon</h4>
                      <p>
                        Consists of Aldebaran, Capella (from Auriga), Sirius (from Canis Major), Procyon (from Canis Minor), Pollux (from Gemini),
                        and Rigel (from Orion).
                      </p>
                      <br>
                      <br>
                      <h4>Summer Triangle</h4>
                      <p>
                        A small asterism consisting of three stars: Vega, Deneb, and Altair.
                      </p>
                      <br>
                      <br>
                      <h4>Winter Triangle</h4>
                      <p>
                        An almost perfectly equilateral triangle consisting of Procyon, Sirius, and Betelgeuse.
                      </p>
                    </div>

                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#auriga">
                  <h4>Auriga</h4>
                </a>
              </div>
              <div id="auriga" class="collapse" data-parent="#accordion">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-5 container-fluid constellationtext">
                      <h4>"The Charioteer"</h4>
                      <p>
                        <h5>Location:</h5> Northern Hemisphere
                        <br>
                        <h5>Visible:</h5>February
                        <br>
                        <br>
                        <h5>About:</h5>To the naked eye, Capella, the brightest star in Auriga, appears as a single object. Capella
                        is actually a star system consisting of two sets of binary star systems. Capella makes Auriga part
                        of the Winter Hexagon.
                      </p>
                    </div>
                    <div class="col-md-4 container-fluid constellation">
                      <a title="By IAU and Sky &amp; Telescope magazine (Roger Sinnott &amp; Rick Fienberg) (GIF image
                    download page
                    about) [CC BY 3.0 (https://creativecommons.org/licenses/by/3.0)], via Wikimedia Commons" href="https://commons.wikimedia.org/wiki/File:Auriga_IAU.svg">
                        <img width="412" alt="Auriga IAU" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/92/Auriga_IAU.svg/512px-Auriga_IAU.svg.png">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#bootes">
                  <h4>Boötes</h4>
                </a>
              </div>
              <div id="bootes" class="collapse" data-parent="#accordion">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-5 container-fluid constellationtext">
                      <h4>"The Herdsman"</h4>
                      <p>
                        <h5>Location:</h5> Northern Hemisphere
                        <br>
                        <h5>Visible:</h5> Best seen in June
                        <br>
                        <br>
                        <h5>About:</h5>A large constellation. Boötes is the radiant point of the Quadrantids meteor shower, which
                        occurs during the last week of December and the beginning of January. The Quadrantids are also sometimes
                        called the Boötids.
                      </p>
                    </div>
                    <div class="col-md-4 container-fluid constellation">
                      <a title="By IAU and Sky &amp; Telescope magazine (Roger Sinnott &amp; Rick Fienberg) (GIF image
                    download page
                    about) [CC BY 3.0 (https://creativecommons.org/licenses/by/3.0)], via Wikimedia Commons" href="https://commons.wikimedia.org/wiki/File:Bo%C3%B6tes_IAU.svg">
                        <img width="412" height="412" alt="Boötes IAU" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/47/Bo%C3%B6tes_IAU.svg/512px-Bo%C3%B6tes_IAU.svg.png">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#cancer">
                  <h4>Cancer</h4>
                </a>
              </div>
              <div id="cancer" class="collapse" data-parent="#accordion">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-5 container-fluid constellationtext">
                      <h4>"The Crab"</h4>
                      <p>
                        <h5>Location:</h5> Northern Hemisphere
                        <br>
                        <h5>Visible:</h5> Best seen in March
                        <br>
                        <br>
                        <h5>About:</h5>One of the twelve zodiac constellations. Relatively Dim, only slightly brighter than Capricornus.
                      </p>
                    </div>
                    <div class="col-md-4 container-fluid constellation">
                      <a title="By IAU and Sky &amp; Telescope magazine (Roger Sinnott &amp; Rick Fienberg) ([1]) [CC BY 3.0 (https://creativecommons.org/licenses/by/3.0)], via Wikimedia Commons"
                        href="https://commons.wikimedia.org/wiki/File:Cancer_IAU.svg">
                        <img width="412" alt="Cancer IAU" src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cb/Cancer_IAU.svg/512px-Cancer_IAU.svg.png">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#canisMj">
                  <h4>Canis Major</h4>
                </a>
              </div>
              <div id="canisMj" class="collapse" data-parent="#accordion">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-5 container-fluid constellationtext">
                      <h4>"The Great Dog"</h4>
                      <p>
                        <h5>Location:</h5> Southern Hemisphere
                        <br>
                        <h5>Visible:</h5> Best seen in February
                        <br>
                        <br>
                        <h5>About:</h5>Its luminary, Sirius, is the brightest star in the sky, and almost the brightest object
                        in the sky. Sometimes Sirius is referred to as the Dog Star. Just like Canis Minor, Canis Major is
                        in both the Winter Triangle and the Winter Hexagon.
                      </p>
                    </div>
                    <div class="col-md-4 container-fluid constellation">
                      <a title="By IAU and Sky &amp; Telescope magazine (Roger Sinnott &amp; Rick Fienberg) (GIF image
                    download page
                    about) [CC BY 3.0 (https://creativecommons.org/licenses/by/3.0)], via Wikimedia Commons" href="https://commons.wikimedia.org/wiki/File:Canis_Major_IAU.svg">
                        <img width="412" height="412" alt="Canis Major IAU" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/be/Canis_Major_IAU.svg/512px-Canis_Major_IAU.svg.png">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#canisMr">
                  <h4>Canis Minor</h4>
                </a>
              </div>
              <div id="canisMr" class="collapse" data-parent="#accordion">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-5 container-fluid constellationtext">
                      <h4>"The Lesser Dog"</h4>
                      <p>
                        <h5>Location:</h5> Northern Hemisphere
                        <br>
                        <h5>Visible:</h5> Best seen in March
                        <br>
                        <br>
                        <h5>About:</h5>A small constellation that takes part in the Winter Triangle and the Winter Hexagon.
                      </p>
                    </div>
                    <div class="col-md-4 container-fluid constellation">
                      <a title="By IAU and Sky &amp; Telescope magazine (Roger Sinnott &amp; Rick Fienberg) (GIF image
                    download page
                    about) [CC BY 3.0 (https://creativecommons.org/licenses/by/3.0)], via Wikimedia Commons" href="https://commons.wikimedia.org/wiki/File:Canis_Minor_IAU.svg">
                        <img width="412" height="412" alt="Canis Minor IAU" src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c9/Canis_Minor_IAU.svg/512px-Canis_Minor_IAU.svg.png">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#capri">
                  <h4>Capricornus</h4>
                </a>
              </div>
              <div id="capri" class="collapse" data-parent="#accordion">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-5 container-fluid constellationtext">
                      <h4>"The Sea Goat"</h4>
                      <p>
                        <h5>Location:</h5> Southern Hemisphere
                        <br>
                        <h5>Visible:</h5> Best seen in September
                        <br>
                        <br>
                        <h5>About:</h5>One of the twelve zodiac constellations. One of the dimmest constellations, with no star
                        above third magnitude.
                      </p>
                    </div>
                    <div class="col-md-4 container-fluid constellation">
                      <a title="By IAU and Sky &amp; Telescope magazine (Roger Sinnott &amp; Rick Fienberg) ([1]) [CC BY 3.0 (https://creativecommons.org/licenses/by/3.0)], via Wikimedia Commons"
                        href="https://commons.wikimedia.org/wiki/File:Capricornus_IAU.svg">
                        <img width="412" alt="Capricornus IAU" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Capricornus_IAU.svg/512px-Capricornus_IAU.svg.png">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#cassio">
                  <h4>Cassiopiea</h4>
                </a>
              </div>
              <div id="cassio" class="collapse" data-parent="#accordion">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-5 container-fluid constellationtext">
                      <h4>"The Seated Queen"</h4>
                      <p>
                        <h5>Location:</h5> Northern Hemisphere
                        <br>
                        <h5>Visible:</h5> Best seen in November
                        <br>
                        <br>
                        <h5>About:</h5>The location for two great supernovae. The first supernova was Observed and documented
                        in November of 1572 by a Danish astronomer, Tycho Brahe. He named the star Stella Nova (New Star)
                        since it was not visible before the supernova. For two weeks, during the day the star was still visible,
                        and for the following 16 months it was visible to the naked eye.
                        <br> The second supernova was around 1680 and formed Cassiopeia A, and it has been the source of the
                        strongest radio signal (besides our solar system) once detected in 1947.
                      </p>
                    </div>
                    <div class="col-md-4 container-fluid constellation">
                      <a title="By IAU and Sky &amp; Telescope magazine (Roger Sinnott &amp; Rick Fienberg) (GIF image
              download page
              about) [CC BY 3.0 (https://creativecommons.org/licenses/by/3.0)], via Wikimedia Commons" href="https://commons.wikimedia.org/wiki/File:Cassiopeia_IAU.svg">
                        <img width="412" height="412" alt="Cassiopiea IAU" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Cassiopeia_IAU.svg/512px-Cassiopeia_IAU.svg.png">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#crux">
                  <h4>Crux</h4>
                </a>
              </div>
              <div id="crux" class="collapse" data-parent="#accordion">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-5 container-fluid constellationtext">
                      <h4>"The Southern Cross"</h4>
                      <p>
                        <h5>Location:</h5> Southern Hemisphere
                        <br>
                        <h5>Visible:</h5> Best seen in May
                        <br>
                        <br>
                        <h5>About:</h5>The smallest constellation, but also one of the most distinctive. Crux was frequently
                        used by sailors to determine where the South Pole was.
                      </p>
                    </div>
                    <div class="col-md-4 container-fluid constellation">
                      <a title="By IAU and Sky &amp; Telescope magazine (Roger Sinnott &amp; Rick Fienberg) (GIF image
              download page
              about) [CC BY 3.0 (https://creativecommons.org/licenses/by/3.0)], via Wikimedia Commons" href="https://commons.wikimedia.org/wiki/File:Crux_IAU.svg">
                        <img width="412" height="412" alt="Crux IAU" src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cf/Crux_IAU.svg/512px-Crux_IAU.svg.png">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#cygnus">
                  <h4>Cygnus</h4>
                </a>
              </div>
              <div id="cygnus" class="collapse" data-parent="#accordion">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-5 container-fluid constellationtext">
                      <h4>"The Swan"</h4>
                      <p>
                        <h5>Location:</h5> Northern Hemisphere
                        <br>
                        <h5>Visible:</h5> Best seen in September
                        <br>
                        <br>
                        <h5>About:</h5>Distinctive constellation, also known as the Northern Cross, due to its shape. It is also
                        part of the Summer Triangle.
                      </p>
                    </div>
                    <div class="col-md-4 container-fluid constellation">
                      <a title="By IAU and Sky &amp; Telescope magazine (Roger Sinnott &amp; Rick Fienberg) (GIF image
              download page
              about) [CC BY 3.0 (https://creativecommons.org/licenses/by/3.0)], via Wikimedia Commons" href="https://commons.wikimedia.org/wiki/File:Cygnus_IAU.svg">
                        <img width="412" height="412" alt="Cygnus IAU" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/Cygnus_IAU.svg/512px-Cygnus_IAU.svg.png">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#draco">
                  <h4>Draco</h4>
                </a>
              </div>
              <div id="draco" class="collapse" data-parent="#accordion">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-5 container-fluid constellationtext">
                      <h4>"The Dragon"</h4>
                      <p>
                        <h5>Location:</h5> Northern Hemisphere
                        <br>
                        <h5>Visible:</h5> Best seen in July
                        <br>
                        <br>
                        <h5>About:</h5>Eighth-large constellation that is circumpolar, never going below the horizon. It is the
                        origin of the Draconid meteor shower, which occurs in October.
                      </p>
                    </div>
                    <div class="col-md-4 container-fluid constellation">
                      <a title="By IAU and Sky &amp; Telescope magazine (Roger Sinnott &amp; Rick Fienberg) (GIF image
              download page
              about) [CC BY 3.0 (https://creativecommons.org/licenses/by/3.0)], via Wikimedia Commons" href="https://commons.wikimedia.org/wiki/File:Draco_IAU.svg">
                        <img width="412" height="412" alt="Draco IAU" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Draco_IAU.svg/512px-Draco_IAU.svg.png">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#gemini">
                  <h4>Gemini</h4>
                </a>
              </div>
              <div id="gemini" class="collapse" data-parent="#accordion">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-5 container-fluid constellationtext">
                      <h4>"The Twins"</h4>
                      <p>
                        <h5>Location:</h5> Northern Hemisphere
                        <br>
                        <h5>Visible:</h5> February
                        <br>
                        <br>
                        <h5>About:</h5>One of the twelve zodiac constellations. Contains the 2 brightest stars in the night sky,
                        Castor and Pollux. The constellation is also a part of the Winter Hexagon. Origin for the Geminid
                        meteor shower, which occurs in December. The Geminids are not made from a comet, instead they are
                        from an asteroid obiting the sun, 3200 Phaethon.
                      </p>
                    </div>
                    <div class="col-md-4 container-fluid constellation">
                      <a title="By IAU and Sky &amp; Telescope magazine (Roger Sinnott &amp; Rick Fienberg) ([1]) [CC BY 3.0 (https://creativecommons.org/licenses/by/3.0)], via Wikimedia Commons"
                        href="https://commons.wikimedia.org/wiki/File:Gemini_IAU.svg">
                        <img width="412" alt="Gemini IAU" src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Gemini_IAU.svg/512px-Gemini_IAU.svg.png">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#leo">
                  <h4>Leo</h4>
                </a>
              </div>
              <div id="leo" class="collapse" data-parent="#accordion">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-5 container-fluid constellationtext">
                      <h4>"The Lion"</h4>
                      <p>
                        <h5>Location:</h5> Northern Hemisphere
                        <br>
                        <h5>Visible:</h5> Best seen in April
                        <br>
                        <br>
                        <h5>About:</h5>One of the twelve zodiac constellations. Home to the Leonid meteor shower and one of the
                        larger constellations. A star inside the constellation is Wolf 359, which is the fifth closest star
                        to Earth.
                      </p>
                    </div>
                    <div class="col-md-4 container-fluid constellation">
                      <a title="By IAU and Sky &amp; Telescope magazine (Roger Sinnott &amp; Rick Fienberg) ([1]) [CC BY 3.0 (https://creativecommons.org/licenses/by/3.0)], via Wikimedia Commons"
                        href="https://commons.wikimedia.org/wiki/File:Leo_IAU.svg">
                        <img width="412" height="412" alt="Leo IAU" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Leo_IAU.svg/512px-Leo_IAU.svg.png">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#libra">
                  <h4>Libra</h4>
                </a>
              </div>
              <div id="libra" class="collapse" data-parent="#accordion">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-5 container-fluid constellationtext">
                      <h4>"The Scales"</h4>
                      <p>
                        <h5>Location:</h5> Southern Hemisphere
                        <br>
                        <h5>Visible:</h5> Best seen in June
                        <br>
                        <br>
                        <h5>About:</h5>One of the twelve zodiac constellations. It contains the the location of the planetery
                        system, Gliese 581. Gliese 581 has three planets orbiting a red drawf.
                      </p>
                    </div>
                    <div class="col-md-4 container-fluid constellation">
                      <a title="By IAU and Sky &amp; Telescope magazine (Roger Sinnott &amp; Rick Fienberg) ([1]) [CC BY 3.0 (https://creativecommons.org/licenses/by/3.0)], via Wikimedia Commons"
                        href="https://commons.wikimedia.org/wiki/File:Libra_IAU.svg">
                        <img width="412" alt="Libra IAU" src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/76/Libra_IAU.svg/512px-Libra_IAU.svg.png">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#lyra">
                  <h4>Lyra</h4>
                </a>
              </div>
              <div id="lyra" class="collapse" data-parent="#accordion">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-5 container-fluid constellationtext">
                      <h4>"The Lyre"</h4>
                      <p>Location: Northern Hemisphere
                        <br> Visible: Best seen in August
                        <br>
                        <br>
                        <h5>About:</h5> Vega, its brightest star, is the fifth brightest star in the sky and makes the Lyra part
                        of the Summer Triangle. This constellation is the source of the Lyrid Meteor shower that occurs in
                        April.
                        <br> Lyra contains a quadruple star system called "double double," that appears as a singular light source
                        to the naked eye.
                      </p>
                    </div>
                    <div class="col-md-4 container-fluid constellation">
                      <a title="By IAU and Sky &amp; Telescope magazine (Roger Sinnott &amp; Rick Fienberg) ([1]) [CC BY 3.0 (https://creativecommons.org/licenses/by/3.0)], via Wikimedia Commons"
                        href="https://commons.wikimedia.org/wiki/File:Lyra_IAU.svg">
                        <img width="412" alt="Lyra IAU" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5b/Lyra_IAU.svg/512px-Lyra_IAU.svg.png">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#orion">
                  <h4>Orion</h4>
                </a>
              </div>
              <div id="orion" class="collapse" data-parent="#accordion">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-5 container-fluid constellationtext">
                      <h4>"The Hunter"</h4>
                      <p>
                        <h5>Location:</h5> Equatorial
                        <br>
                        <h5>Visible:</h5> Best seen in January
                        <br>
                        <br>
                        <h5>About:</h5> One of the most well known constellations. It is easiest to spot Orion's belt to figure
                        out where the whole constellation is. It also contains some of the brightest stars and is also part
                        of the Winter Hexagon.
                      </p>
                    </div>
                    <div class="col-md-4 container-fluid constellation">
                      <a title="By IAU and Sky &amp; Telescope magazine (Roger Sinnott &amp; Rick Fienberg) ([1]) [CC BY 3.0 (https://creativecommons.org/licenses/by/3.0)], via Wikimedia Commons"
                        href="https://commons.wikimedia.org/wiki/File:Orion_IAU.svg">
                        <img width="412" height="412" alt="Orion IAU" src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/ff/Orion_IAU.svg/512px-Orion_IAU.svg.png">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#pegasus">
                  <h4>Pegasus</h4>
                </a>
              </div>
              <div id="pegasus" class="collapse" data-parent="#accordion">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-5 container-fluid constellationtext">
                      <h4>"The Winged Horse"</h4>
                      <p>
                        <h5>Location:</h5> Northern Hemisphere
                        <br>
                        <h5> Visible:</h5> Best seen in October
                        <br>
                        <br>
                        <h5>About:</h5> Seventh largest constellation. It hard to see at first, most don't know that the Pegasus
                        is oriented upside down and it is only the front half of the body.
                      </p>
                    </div>
                    <div class="col-md-4 container-fluid constellation">
                      <a title="By IAU and Sky &amp; Telescope magazine (Roger Sinnott &amp; Rick Fienberg) ([1]) [CC BY 3.0 (https://creativecommons.org/licenses/by/3.0)], via Wikimedia Commons"
                        href="https://commons.wikimedia.org/wiki/File:Pegasus_IAU.svg">
                        <img width="412" alt="Pegasus IAU" src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f4/Pegasus_IAU.svg/512px-Pegasus_IAU.svg.png">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#pisces">
                  <h4>Pisces</h4>
                </a>
              </div>
              <div id="pisces" class="collapse" data-parent="#accordion">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-5 container-fluid constellationtext">
                      <h4>"The Fishes"</h4>
                      <p>
                        <h5>Location:</h5> Northern Hemisphere
                        <br>
                        <h5>Visible:</h5> Best seen in November
                        <br>
                        <br>
                        <h5>About:</h5> One of the twelve zodiac constellations. It is a fairly large constellation, but still
                        hard to see with the naked eye due to how faint its stars are. It is notable in containing the March
                        Equinox.
                      </p>
                    </div>
                    <div class="col-md-4 container-fluid constellation">
                      <a title="By IAU and Sky &amp; Telescope magazine (Roger Sinnott &amp; Rick Fienberg) ([1]) [CC BY 3.0 (https://creativecommons.org/licenses/by/3.0)], via Wikimedia Commons"
                        href="https://commons.wikimedia.org/wiki/File:Pisces_IAU.svg">
                        <img width="412" alt="Pisces IAU" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/21/Pisces_IAU.svg/512px-Pisces_IAU.svg.png">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#sagittarius">
                  <h4>Sagittarius</h4>
                </a>
              </div>
              <div id="sagittarius" class="collapse" data-parent="#accordion">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-5 container-fluid constellationtext">
                      <h4>"The Archer"</h4>
                      <p>
                        <h5>Location:</h5> Southern Hemisphere
                        <br>
                        <h5>Visible:</h5> Best seen in August
                        <br>
                        <br>
                        <h5>About:</h5> One of the twelve zodiac constellations. A Large constellation that makes a distinct
                        teapot shape with eight of its brightest stars. The center of the Milky Way is close to Sagittarius.
                      </p>
                    </div>
                    <div class="col-md-4 container-fluid constellation">
                      <a title="By IAU and Sky &amp; Telescope magazine (Roger Sinnott &amp; Rick Fienberg) ([1]) [CC BY 3.0 (https://creativecommons.org/licenses/by/3.0)], via Wikimedia Commons"
                        href="https://commons.wikimedia.org/wiki/File:Sagittarius_IAU.svg">
                        <img width="412" height="412" alt="Sagittarius IAU" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/54/Sagittarius_IAU.svg/512px-Sagittarius_IAU.svg.png">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#scorpius">
                  <h4>Scorpius</h4>
                </a>
              </div>
              <div id="scorpius" class="collapse" data-parent="#accordion">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-5 container-fluid constellationtext">
                      <h4>"The Scorpion"</h4>
                      <p>
                        <h5>Location:</h5> Northern Hemisphere
                        <br>
                        <h5>Visible:</h5> January
                        <br>
                        <br>
                        <h5>About:</h5> One of the twelve zodiac constellations; recognized by its curved "fish hook" shape.
                      </p>
                    </div>
                    <div class="col-md-4 container-fluid constellation">
                      <a title="By IAU and Sky &amp; Telescope magazine (Roger Sinnott &amp; Rick Fienberg) ([1]) [CC BY 3.0 (https://creativecommons.org/licenses/by/3.0)], via Wikimedia Commons"
                        href="https://commons.wikimedia.org/wiki/File:Scorpius_IAU.svg">
                        <img width="412" height="412" alt="Scorpius IAU" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/38/Scorpius_IAU.svg/512px-Scorpius_IAU.svg.png">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#taurus">
                  <h4>Taurus</h4>
                </a>
              </div>
              <div id="taurus" class="collapse" data-parent="#accordion">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-5 container-fluid constellationtext">
                      <h4>"The Bull"</h4>
                      <p>
                        <h5>Location:</h5> Northern Hemisphere
                        <br>
                        <h5>Visible:</h5> January
                        <br>
                        <br>
                        <h5>About:</h5> One of the twelve zodiac constellations. Fairly large constellation that is part of the
                        Winter Hexagon.
                      </p>
                    </div>
                    <div class="col-md-4 container-fluid constellation">
                      <a title="By IAU and Sky &amp; Telescope magazine (Roger Sinnott &amp; Rick Fienberg) ([1]) [CC BY 3.0 (https://creativecommons.org/licenses/by/3.0)], via Wikimedia Commons"
                        href="https://commons.wikimedia.org/wiki/File:Taurus_IAU.svg">
                        <img width="412" alt="Taurus IAU" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e9/Taurus_IAU.svg/512px-Taurus_IAU.svg.png">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#ursaMj">
                  <h4>Ursa Major</h4>
                </a>
              </div>
              <div id="ursaMj" class="collapse" data-parent="#accordion">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-5 container-fluid constellationtext">
                      <h4>"The Great Bear"</h4>
                      <p>
                        <h5>Location:</h5> Northern Hemisphere
                        <br>
                        <h5>Visible:</h5> Visible year round
                        <br>
                        <br>
                        <h5>About:</h5> The third-largest constellation in the sky, and one of the most recognizeable. The body
                        and tail of the Ursa is known as the "Big Dipper."
                        <br> The Big Dipper gained its own significance when it was used as guide for slaves escaping to North
                        before and during the American Civil War. The Ursa Major is circumpolar, it never sets below the
                        horizon, so it was a reliable guide.
                    </div>
                    <div class="col-md-4 container-fluid constellation">
                      <a title="By IAU and Sky &amp; Telescope magazine (Roger Sinnott &amp; Rick Fienberg) [CC BY 3.0 (https://creativecommons.org/licenses/by/3.0)], via Wikimedia Commons"
                        href="https://commons.wikimedia.org/wiki/File:Ursa_Major_IAU.svg">
                        <img width="412" alt="Ursa Major IAU" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/13/Ursa_Major_IAU.svg/512px-Ursa_Major_IAU.svg.png">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#ursaMr">
                  <h4>Ursa Minor</h4>
                </a>
              </div>
              <div id="ursaMr" class="collapse" data-parent="#accordion">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-5 container-fluid constellationtext">
                      <h4>"The Little Bear"</h4>
                      <p>
                        <h5>Location:</h5> Northern Hemisphere
                        <br>
                        <h5>Visible:</h5> Visible year round
                        <br>
                        <br>
                        <h5>About:</h5> Small constellation containing the North star, Polaris, the closest star to the northern
                        celestial pole.
                        <br> Ursa Minor is the source for a reoccuring meteor shower, Ursid, that occurs in late December.
                      </p>
                    </div>
                    <div class="col-md-4 container-fluid constellation">
                      <a title="By IAU and Sky &amp; Telescope magazine (Roger Sinnott &amp; Rick Fienberg) ([1]) [CC BY 3.0 (https://creativecommons.org/licenses/by/3.0)], via Wikimedia Commons"
                        href="https://commons.wikimedia.org/wiki/File:Ursa_Minor_IAU.svg">
                        <img width="412" height="412" alt="Ursa Minor IAU" src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cb/Ursa_Minor_IAU.svg/512px-Ursa_Minor_IAU.svg.png">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#virgo">
                  <h4>Virgo</h4>
                </a>
              </div>
              <div id="virgo" class="collapse" data-parent="#accordion">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-5 container-fluid constellationtext">
                      <h4>"The Maiden"</h4>
                      <p>
                        <h5>Location:</h5> Both Hemispheres
                        <br>
                        <h5>Visible:</h5> Spring and Summer for North Hemisphere | Autumn and Winter for the Southern Hemisphere
                        <br>
                        <br>
                        <h5>About:</h5> One of the twelve zodiac constellations and the second largest constellation.
                        <br> The constellation itself is considered congested, with many known exoplanets in it, but is still
                        fairly dim. Its brightest star, Spica, is what makes it more distiguishable.
                      </p>
                    </div>
                    <div class="col-md-4 container-fluid constellation">
                      <a title="By IAU and Sky &amp; Telescope magazine (Roger Sinnott &amp; Rick Fienberg) ([1]) [CC BY 3.0 (https://creativecommons.org/licenses/by/3.0)], via Wikimedia Commons"
                        href="https://commons.wikimedia.org/wiki/File:Virgo_IAU.svg">
                        <img width="412" alt="Virgo IAU" src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f5/Virgo_IAU.svg/512px-Virgo_IAU.svg.png">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>


          </div>
        </div>

      </div>
    </div>
  </div>
  <footer class="galacticfooter text-center">
    <p>Beyond Us © 2018</p>
    <a href="mailto:Astronomybeyondus@gmail.com">
      <img src="../images/env smol.png" style="padding:5px;" height="60px">
    </a>
    <a href="/Bibliography">
      <img src="../images/info.png" style="padding:5px;" height="50px">
    </a>
    <a href="https://www.nasa.gov/" target="_blank">
      <img src="../images/rocket-ship.png" style="padding:5px;" height="55px">
    </a>
  </footer>
  <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
        document.getElementById("myBtn").style.display = "block";
      } else {
        document.getElementById("myBtn").style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
</body>

</html>