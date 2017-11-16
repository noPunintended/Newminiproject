<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Movie Review</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/portfolio-item.css" rel="stylesheet">
    <link href="css/heroic-features.css" rel="stylesheet">

</head>

<body bgcolor="#E6E6FA">

    <!--Navigation Bar -->

<?php
  require_once('navbar.php');
  require_once('connect.php');
  $movieid = $_GET['movieid'];
    $q = "SELECT * FROM movies WHERE movieid = '$movieid'";
    $result = $connect->query($q);
    if(!$result){
        echo "Cannot get current record<br>".$q;
        exit();
    }
    $row = mysqli_fetch_array($result);


?>






<!-- Page Content -->
<div class="container">

  <!-- Portfolio Item Heading -->
   
  <h1 class="my-4"><a> <?php echo $row['moviename']; ?></a>

</h1>

<!-- Portfolio Item Row -->
<div class="row">



    <div class="col-md-8">
      <img class="img-fluid" src="<?php echo $row['moviepic']; ?>" alt="" >
  </div>

  <div class="col-md-4">

    <!-- Score Bar -->
  
        <h1>Score!!
        <h2>Top Critic: [<?=$row['c_moviescore']?>]
        <br>
        <h2>User: [<?=$row['u_moviescore']?>]


        <h3 class="my-3">Storyline</h3>
        <?php echo $row['moviedetail']; ?>





    </div>

</div>
<!-- /.row -->
<br>



<!-- x Row -->
<h1 class="my-4">Related Movie</h1>


<div class="row text-center">

<?php
$s="SELECT * FROM movies";
$results=$connect->query($s);
    while ($rows = $results->fetch_array()) { ?>
    <div class="col-lg-3 col-md-6 mb-4">
      <div class="card">
        <!-- Poster It Stephen King-->
        <img class="card-img-top" src="<?=$rows['Movie_spic']?>">
        <div class="card-body">
          <h4 class="card-title"><?=$rows['moviename']?></h4>
          <p class="card-text"><?=$rows['Movie-intro']?></p>
        </div>
        <div class="card-footer">
          <a href="moviedetail.php?movieid=<?=$rows['movieid']?>" class="btn btn-primary">Find Out More!</a>
        </div>
      </div>
    </div>
    <?php 
    }
     ?>

</div>






<!-- /.row -->


<!-- /.container -->
<br>

<?php
require_once('comment.php');
?>





<!-- Bootstrap core JavaScript -->
<script src="http://code.jquery.com/jquery-1.9.0rc1.js"></script>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/popper/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>



</body>

</html>



