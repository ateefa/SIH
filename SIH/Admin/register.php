
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../style.css">
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
            <li class="active" id = "contributor"><a href="..\Contributor\index.php">Contribute</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../about.php"><span class="glyphicon glyphicon-user"></span> AboutUs</a></li>
            <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <br><br>
    <br><br>
    <div class="container">
      <div class = "main">
        <br><br>

          <form class="form-inline" action="index.php" method="post" onsubmit="return validation()">
            <table class = "table table-striped table-bordered table-hover">

                <thread>
              <tr>
                <td>USERNAME        </td>
                <td><input type="text" name="username" value="" size = "30"></td>
              </tr>
                </thread>
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
                <td>CONFORM-PASSWORD</td>
                <td><input type="password" name="confpassword" value="" size = "30"></td>
              </tr>
            </thread>
            <thread>
              <tr>
                <td>Authentication Key  </td>
                <td>
                   <input type="text" name="key" value="">
                </td>
              </tr>
            </thread>
            </table>

            <input type="submit" name="submit" class = "btn btn-lg btn-primary btn-block" value="REGISTER">
          </form>

          <br><br>
      </div>
    </div>
  </body>
</html>
