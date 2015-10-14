
<?php

?>
<!DOCTYPE html>

<html>

<head>
  <title>Welcome To The Wine Seller</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="/css/wineseller.css">
  <meta charset="utf-8">

</head>

<body>
  <main class="container-fluid">
    
  <div class = "top">
    <div row>
      <div class = "col-md-4">
        <img class = "logoWineseller image" src="http:/img/logoWineseller.png">
      </div>

      <div class = "col-md-8">
        <h1>Welcome To Wine Seller</h1>
      </div>
    </div>
  </div>

    
<nav class="navbar navbar-default">
  <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        
          <ul class="nav navbar-nav">
            <li><a href="../index.php">Home</a></li>
            <li><a href="../winePage.php">Wine</a></li>
            <li><a href="../glasswarePage.php">Glassware</a></li>
            <li><a href="../wineAccessoriesPage.php">Accessories</a></li>
                     
        <li role="separator" class="divider"></li>
    
          </ul>

        <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>
                <button type="submit" class="btn btn-default">Search The Cellar</button>
        </form>

        <ul class="nav navbar-nav navbar-right">
            <li><a href="auth.login.php">Login</a></li>
            <li><a href="users.create.php">Create Profile</a></li>
        </ul>
  </div><!-- /.container-fluid -->
</nav>
    
<div class = "row linkBoxes clearfix">

   {{--  <div class="row topRow"> --}}
        <p></p>
        <div class="col-md-4"><a href="../adsWineseller.index.php"><img class = "displayed cellarImage" src="../img/visitWineCellar.jpg"><h4 class = "show Cellar">Visit the Cellar</h4></img></a></div>
        <p></p>
        <div class="col-md-4"><a href="../adsWineseller.create.php"><img class = "displayed" src="../img/stockCellarPic.jpg"><h4 class = "stock Cellar">Stock the Cellar</h4></img></a></div>
        <p></p>
        <div class="col-md-4"><a href="../users.create.php"><img class = "displayed" src="../img/join.png"><h4 class = "join Cellar">Join the Cellar</h4></img></a></div>


   {{--  <div class="row bottomRow"> --}}
       <div class="col-md-4"><a href="winePage.php"><img class = "displayed wineImage" src="../img/wines2.jpg"><h4 class = "wine Box">Wine</h4></img></a></div>

       <div class="col-md-4"><a href="glasswarePage.php"><img class = "displayed" src="../img/glassesDecanter.jpg"><h4 class = "glassware Box">Glassware</h4></img></a></div>

       <div class="col-md-4"><a href="wineAccessoriesPage.php"><img class = "displayed" src="../img/wineAccessories.jpg"><h4 class = "accessories Box">Accessories</h4></img></a></div>
    </div>
</div>

<footer class="footer">
  <div class = "row" "col-md-10">
      <div class="container footertext">
      <a href="wineseller.dev">Home |</a>
      <a href="aboutUsPage.php">About Us |</a>
      <a href="contactUs.php">Contact Us |</a>
      <a href="PrivacyPolicy.php">Privacy Policy</a>
      </div>
  </div>
</main>
</body>

</html>
