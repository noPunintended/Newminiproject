<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Movie Reviews</title>

    <!-- Bootstrap core CSS -->
    <link href="rankings/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="rankings/csscss.css">

    <!-- Custom styles for this template -->
    <style>
        body {
            padding-top: 54px;
        }

        @media (min-width: 992px) {
            body {
                padding-top: 56px;
            }
        }

    </style>

</head>

<body>

<?php 
require_once('navbar.php');
require('connect.php');

$q='SELECT * FROM `movies` ORDER BY `movies`.`moviescore` DESC';
$result=$connect->query($q);

?>


<!-- Page Content -->

<div class="container">
    <div id="blog" class="row">

        <!-- GODFATHER -->
<?php 
        while ($row = $result->fetch_array()) {
            # code...
        $score = round($row['moviescore']);
        /*echo $score;*/
        $scores = ($score/100)*300;
        /*echo $scores;*/
        if ($score>=90) {
            # code...
            $title ="ดูเถอะไอ่เหี้ย";
        }
        elseif ($score>=50&&$score<90) {
            # code...
            $title ="พอดูได้อยู่ไอ่สัส";
        }
        else{
            $title ="มึงอย่าดูเลย";
        }

 ?>
        <div class="col-md-10 blogShort">
            <br>
            <h1><?=$row['moviename']?></h1>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <img src="https://image.ibb.co/hyPAyk/The_Godfather_Poster_scale_down.jpg" alt="post img"
                         class="pull-left img-responsive thumb margin10 img-thumbnail">
                </div>
                <div class="col-md-3">
                    <b><p>CRITICS (<?=$row['moviescore']?>)</p></b>
                    <style type="text/css">
                    .outter{
                        height:25px;
                        width:300px;
                        border:solid 1px #000;

                    }
                    .inner{
                        height:23px;
                        width:<?php echo $scores  ?>px;
                        border-right:solid 1px #000;
                    /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#d0e4f7+0,73b1e7+24,0a77d5+50,539fe1+79,87bcea+100;Blue+Pipe+%231 */
                    background: rgb(208,228,247); /* Old browsers */
                    background: -moz-linear-gradient(top, rgba(208,228,247,1) 0%, rgba(115,177,231,1) 24%, rgba(10,119,213,1) 50%, rgba(83,159,225,1) 79%, rgba(135,188,234,1) 100%); /* FF3.6-15 */
                    background: -webkit-linear-gradient(top, rgba(208,228,247,1) 0%,rgba(115,177,231,1) 24%,rgba(10,119,213,1) 50%,rgba(83,159,225,1) 79%,rgba(135,188,234,1) 100%); /* Chrome10-25,Safari5.1-6 */
                    background: linear-gradient(to bottom, rgba(208,228,247,1) 0%,rgba(115,177,231,1) 24%,rgba(10,119,213,1) 50%,rgba(83,159,225,1) 79%,rgba(135,188,234,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
                    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#d0e4f7', endColorstr='#87bcea',GradientType=0 ); /* IE6-9 */

                    }
                    </style>
                    <div class="outter">
                        <div class="inner">
                        </div>
                    </div>
                </div>


            </div>

            <article><p><h5>" <?=$title?> "</h5></p></article>
            <a class="btn btn-blog pull-right marginBottom10" href="godfather.php">READ
                MORE</a>
        </div>
    </div>

<?php 
}
 ?>

    <!-- I don't know what it is -->
    <div class="col-md-12 gap10"></div>
</div>


<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/popper/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>