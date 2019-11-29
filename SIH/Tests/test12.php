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
<body>   <div class="parallax"></div>
   <div class="container-fluid">
      <br><br><br>
      <div class="row">
        <div class="col-sm-3">
            <div id="accordion">
              <div class="card">
                <div class="card-header">
                  <a style="color:black;" class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                    <b>  CURRENT SCORE</b>
                  </a>
                </div>
                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                  <div class="card-body" style="font-size:16px;">

                  </div>
                </div>
              </div>
              <br><br>
              <div class="card">
                <div class="card-header">
                  <a style="color:black;" class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                    <b>  NUMBER OF QUESTION REMAINING</b>
                  </a>
                </div>
                <div id="collapseThree" class="collapse" data-parent="#accordion">
                  <div class="card-body">

                  </div>
                </div>
              </div>
              <br><br>
            </div>
          </div>
        <div class="col-sm-9">
          <h1>QUESTION ?</h1>
          <p style="font-size:25px;">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
          <h2 style="color:	#7bd666"> CHOOSE FROM</h2>
          <p style="font-size:25px;">
            <form action="test13.php" method="post">
              <br>
              <input type="radio" name="ans" value="a">
              option A
              <br>
              <input type="radio" name="ans" value="b">
              option B
              <br>
              <input type="radio" name="ans" value="c">
              option C
              <br>
              <input type="radio" name="ans" value="d">
              option D
              <br>
              <br>
              <br>
              <p>MOVE TO NEXT QUESTION</p>
              <input type="submit" class="btn btn-success" name="submit" value="Done">
              <br>
            </form>
          </p>
        </div>
       </div>
    </div>
    <div class="parallax"></div>
  </body>
</html>
