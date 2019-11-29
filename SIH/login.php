
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
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
          <a class="navbar-brand" href="#">CompanyName</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>

            <li><a href="Contributor\index.php">Contributor</a></li>
            <li><a href="Admin/index.php">Admin</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="about.php"><span class="glyphicon glyphicon-user"></span> AboutUs</a></li>
            <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> REGISTER</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <br><br>
    <br><br>
    <div class="container">
      <div class = "main">
        <br><br>

          <form class="form-inline" action="home.php" method="post">
            <table class = "table table-striped table-bordered table-hover">
            <thread>
              <tr>
                <td>USERNAME        </td>
                <td><input type="text" name="username" value="" size = "30"></td>
              </tr>
              </thread>

              <thread>
              <tr>
                <td>PASSWORD        </td>
                <td><input type="password" name="password" value="" size = "30"></td>
              </tr>
            </thread>

            </table>
            <input type="submit" name="login" class = "btn btn-lg btn-primary btn-block" value="Login">
          </form>
          <br><br>
      </div>
    </div>
  </body>
</html>
