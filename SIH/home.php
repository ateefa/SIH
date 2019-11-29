
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styles.css">

    <title></title>
  </head>
<body>
    <div class = "container-fluid">
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">CompanyName</a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
              <li class="active" id = "contributor"><a href="Contributor\index.php">Contribute</a></li>

              <li><a href="Admin/index.php">Are you an Admin</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="about.php"><span class="glyphicon glyphicon-user"></span> AboutUs</a></li>

            </ul>
          </div>
        </div>
      </nav>
      <div class="parallax"></div>
  <div class="row">
    <div class="col-sm-3">
        <div id="accordion">
          <div class="card">
            <div class="card-header">
              <a style="color:black;" class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                <b>  ARE YOU UNDECISIVE ?</b>
              </a>
            </div>
            <div id="collapseTwo" class="collapse" data-parent="#accordion">
              <div class="card-body" style="font-size:16px;">
                We will help you to dicide and difine your future take aptitude test
                and find you future scope <br> <br> click on the GOOD TO GO button below
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
                <b>  TESTS WE OFFER</b>
              </a>
            </div>
            <div id="collapseThree" class="collapse" data-parent="#accordion">
              <div class="card-body">
                <form class="form-inline" action="Tests/test.php" method="post">
                  <br>
                  <input type="radio" name="field" value="">
                  WEB DEVELOPMENT<br>
                  <input type="radio" name="field" value="">
                  ANDROID<br>
                  <input type="radio" name="field" value="">
                  BLAA<br>
                  <input type="radio" name="field" value="">
                  BLAA<br>
                  <input type="radio" name="field" value="">
                  BLAA<br>
                  <input type="radio" name="field" value="">
                  BLAA<br>
                  <input type="submit" class = "btn btn-warning" name="submit" value="READY">
                  <br>
                  <br>
                </form>
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
 </div>
 <div class="parallax"></div>
  </body>
</html>
