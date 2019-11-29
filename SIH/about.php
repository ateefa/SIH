    <!DOCTYPE html>
    <html lang="en">
    <head>
      <title>Bootstrap Example</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="styles.css">
    </head>
    <body>
      <br>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href=".">WebSiteName</a>
        </div>
        <ul class="nav navbar-nav">
          <li><a href="home.html">Home</a></li>
          <li class="active"><a href="final.html">AboutUs</a></li>
          <li><a href="contact.html">ContactUs</a></li>
          <li><a href="ex2.html">More</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    <li><p><button type="button" class="btn btn-default">
             <span class="glyphicon glyphicon-search"></span>Search
            </button>
          </p></li>
        </ul>
      </div>
    </nav>
    <div class="parallax"></div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <center><img src="C:\xampp\htdocs\img\download.jpg" class="img-circle"  alt="Los Angeles" width="1146px" height="515px"><center>
        </div>

        <div class="item">
          <center><img src="C:\xampp\htdocs\img\image.jpg" class="img-circle" alt="Chicago" width="1146px" height="515px"><center>
        </div>

        <div class="item">
        <center><img src="C:\xampp\htdocs\img\hd1.jpg" class="img-circle" alt="New York" width="1146px" height="515px"></center>
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <br>
    <div class="row">
      <div class="col-sm-3">
          <div id="accordion">
            <div class="card">
              <div class="card-header">
                <a style="color:black;" class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                  <b>  INFO</b>
                </a>
              </div>
              <div id="collapseTwo" class="collapse" data-parent="#accordion">
                <div class="card-body" style="font-size:16px;">
                  It is a platform to explore and enhance skills. A small step made to eradicte
                    unemployment by guiding the user through various tests and recomended courses.
                   Here the aspirants/students can be accesed on different fields using this website.
                    Fields can be Reasoning,Aptitude ,Technical MCQ,coding ,etc.
                  <br>
                  <form class="" action="Tests/aptitude.php" method="post">
                    <br>
                    <input type="submit" class = "btn btn-warning" name="submit" value="GOOD TO GO">
                    <br>
                    <br>
                  </form>
                </div>
              </div>
            </div>
            <br><br>
            <div class="card">
              <div class="card-header">
                <a style="color:black;" class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                  <b>  KNOW US</b>
                </a>
              </div>
              <div id="collapseThree" class="collapse" data-parent="#accordion">
                <div class="card-body">
                  This is an online platform with questions at different levels(difficulty)
                  candidates would start an assessment with a medium difficulty questions and
                     depending on its response,the platform should decide the next level of questions
                      to be shown(level would increase or decrease as per response.)
                      Each questions would be assigned a waitage and time duration.
                </div>
              </div>
            </div>
            <br><br>
          </div>
        </div>
      <div class="col-sm-9">
        <h1>WHY US ?</h1>
        <p style="font-size:25px;">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <h2 > WHAT WE OFFER</h2>
        <p style="font-size:25px;">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>
     </div>
    <div class="parallax"></div>
    </body>
    </html>

  </body>
</html>
