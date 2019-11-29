
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../styles.css">
    <title></title>
  </head>
  <body>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">COMPANYNAME</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="../Admin/index.php">Are you an Admin</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="rules.html"><span class="glyphicon glyphicon-user"></span> RULES</a></li>

          </ul>
        </div>
      </div>
    </nav>
    <div class="parallax"></div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3">
          <div id="accordion">
            <div class="card">
              <div class="card-header">
                <a style="color:black;" class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                  <b>  HELLO</b>
                </a>
              </div>
              <div id="collapseTwo" class="collapse" data-parent="#accordion">
                <div class="card-body" style="font-size:16px;">
                  We will help you to dicide and difine your future take aptitude test
                  and find you future scope <br> <br> click on the GOOD TO GO button below
                  <br>

                </div>
              </div>
            </div>
            <br><br>
            <div class="card">
              <div class="card-header">
                <a style="color:black;" class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                  <b>  UPLOAD NEW QUESTION</b>
                </a>

              </div>
              <div id="collapseThree" class="collapse" data-parent="#accordion">
                <div class="card-body">
                  <form class="upload.php" action="upload.php" method="post">
                    <br>
                    <br>
                    <input type="submit" class = "btn btn-warning" name="submit" value="Let's Upload">
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
          <h1>WHY TO BE A CONTRIBUTOR ?</h1>
          <p style="font-size:25px;">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
          <h2 style="color:	#7bd666"> WHAT WE OFFER</h2>
          <p style="font-size:25px;">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </div>
       </div>
    </div>
    <div class="parallax"></div>
  </body>
</html>


<!--<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>
    <br><br>
    <div class="container">
      <div class = "main">
        <br><br>

          <form class="form-inline" action="index.php" method="post">
            <table class = "table table-striped table-bordered table-hover">

              <thread>
              <tr>
                <td>EMAIL           </td>
                <td><input type="email" name="email" value="" size = "30"> </td>
              </tr>
              </thread>
              <thread>
              <tr>
                <td>PASSWORD        </td>
                <td><input type="password" name="password" value="" size = "30"></td>
              </tr>
            </thread>
            <thread>
              <tr>
                <td>QUESTION        </td>
                    <td>
                      <div>
                        <textarea rows="10" cols="60" name="question" required></textarea>
                      </div>
                    </td>
              </tr>
            </thread>
            </table>
            <input type="submit" name="submit" class = "btn btn-lg btn-primary btn-block" value="SUBMIT">
          </form>

          <br><br>
      </div>
    </div>
  </body>
</html>
-->
