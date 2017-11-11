<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Movie Reviews</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Custom styles for this template -->
  <link href="css/heroic-features.css" rel="stylesheet">
  <!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet"> -->

</head>

<body>


  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="mainpage.php">Movie Reviews</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="input-group">
        <input class="form-control" placeholder="Search" id="movieSearch" data-provide="typeahead"
        autocomplete="off">
        <div class="input-group-btn">
          <button id="searchButton" class="btn btn-default"><!-- <i
            class=" glyphicon glyphicon-search"></i></button> -->
            <img src="https://image.ibb.co/dxU5KQ/698956_icon_111_search_128.png" class="img-circle" alt="Cinque Terre" width="20" height="20">

          </div>
        </div>


      



        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="mainpage.php">Home

                <span class="sr-only">(current)</span>
              </a>


            </li>
              <li class="nav-item active">
              <a class="nav-link" href="ranking.php">Rankings
              </a>
            </li>
            <li class="nav-item">
<?php
                    session_start();
                    if (isset($_POST['logout'])) {
                      # code...
                      unset($_SESSION['usernamein']);
                    }
                    if (isset($_POST['usernamein']))
                        $_SESSION['usernamein'] = $_POST['usernamein'];

                    if (!isset($_SESSION['usernamein'])) {
                        ?>
                        <a class="nav-link" href="login.php">Login</a>
                        <span class="sr-only">(current)</span>

                        <?php
                    } else {
                        ?>
                        
                        <a class="nav-link" href="login.php"><?= $_SESSION['usernamein']; ?></a>
                        <li class="nav-item active">
                        <form action="ranking.php" method="POST" class="nav-link">
                          <input type="submit" name="logout"  value="Logout">

                        </form>
                      </li>
                        <?php
                        
                    }
?>


              </li>
            </ul>
          </div>
        </div>
      </nav>









      <!-- Page Content -->
      <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron my-4">
          <h1 class="display-3">Movies Reviews and Ratings!</h1>
          <p class="lead">Current movie reviews and ratings from critics and user on all of the latest movies. Movie discussions, analysis, and much more details.</p>
          <a href="#" class="btn btn-primary btn-lg">News!</a>
        </header>

        <!-- Page Features -->
        <div class="row text-center">

          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
              <!-- Poster It Stephen King-->
              <img class="card-img-top" src="https://image.ibb.co/hdEmUF/It.png" alt="">
              <div class="card-body">
                <h4 class="card-title">IT</h4>
                <p class="card-text">The latest adaptation of Stephen King's classic horror novel privileges CGI scares over dread and nuance.</p>
              </div>
              <div class="card-footer">
                <a href="#" class="btn btn-primary">Find Out More!</a>
              </div>
            </div>
          </div>
          <!--Spiderman poster-->
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
              <img class="card-img-top" src="https://image.ibb.co/id35pF/spiderman_homecoming.jpg" alt="">
              <div class="card-body">
                <h4 class="card-title">Spider-Man: Homecoming</h4>
                <p class="card-text">A young Peter Parker/Spider-Man begins to navigate his newfound identity as the web-slinging superhero.</p>
              </div>
              <div class="card-footer">
                <a href="#" class="btn btn-primary">Find Out More!</a>
              </div>
            </div>
          </div>
          <!--God of Egypt-->
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
              <img class="card-img-top" src="https://image.ibb.co/dCpd9F/God_of_Egypt.jpg" alt="">
              <div class="card-body">
                <h4 class="card-title">Gods of Egypt</h4>
                <p class="card-text">An Egyptian god battles his vengeful uncle with the aid of a mortal in Alex Proyas' fantasy-adventure film.</p>
              </div>
              <div class="card-footer">
                <a href="#" class="btn btn-primary">Find Out More!</a>
              </div>
            </div>
          </div>
          <!--The Godfather -->
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
              <img class="card-img-top" src="https://image.ibb.co/nLL1gv/The_Godfather.png" alt="">
              <div class="card-body">
                <h4 class="card-title">The Godfather</h4>
                <p class="card-text">The aging patriarch of an organized crime dynasty transfers control of his clandestine. </p>
              </div>
              <div class="card-footer">
                <a href="godfather.php" class="btn btn-primary">Find Out More!</a>
              </div>
            </div>
          </div>

        </div>
        <!-- /.row -->

      </div>
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Movie Reviews</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>

  </html>
