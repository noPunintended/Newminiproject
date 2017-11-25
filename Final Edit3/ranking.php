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

$q='SELECT * FROM `movies` ORDER BY `movies`.`c_moviescore` DESC';
$result=$connect->query($q);

// COUNT number of voter shown in line 92


?>

    <br>
    <br>
    <img src="images/logo.png" width="80" height="80"><font size="6"> &nbsp;Movies Ranking</font>
    </div>
    <h5><a href="rankingbyuser.php"> Order by Users </a> | Ordered by Critics </h5>
    <div id="blog" class="row">

   
<?php 
$i=1;
$j=$i+10;
        while ($row = $result->fetch_array()) {

            # code...
        $id = $row['movieid'];

        $r = "SELECT COUNT(commentid) AS count FROM comment,user WHERE comment.commentofusername = user.id AND user.usertype='User' AND comment.movieid=$id";
        $result2=$connect->query($r);
        $row2 = $result2->fetch_array();
        
       /* $c_score = round($row['c_moviescore']);
        $c_scores = ($c_score/10)*200;
        if ($c_score>=8) {
            # code...
            $title ="Great movie!";
        }
        elseif ($c_score>=5&&$c_score<8) {
            # code...
            $title ="Moderate!";
        }
        else{
            $title ="Terribly!";
        }*/


 ?>
        <div class="col-md-10 blogShort">
            <br>
            <h3><?=$i?>&nbsp;.<?=$row['moviename']?></h3>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <img src="<?=$row['moviepic']?>" alt="post img"
                         class="pull-left img-responsive thumb margin10 img-thumbnail">
                </div>
                <div class="col-md-3">
                    <b><p>CRITICS (scores: <?=$row['c_moviescore']?> )</p></b>

                 <!--    NUMBER OF VOTER -->
                    <b><p>From <?=$row2['count']?> critics </p></b>
                    
                    <style type="text/css">
                    .outter<?php echo $i ?>{
                        height:25px;
                        width:200px;
                        border:solid 1px #000;

                    }
                    .inner<?php echo $i ?>{
                        height:23px;
                        width:<?php echo $c_scores ?>px;
                        border-right:solid 1px #000;
                    /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#d0e4f7+0,73b1e7+24,0a77d5+50,539fe1+79,87bcea+100;Blue+Pipe+%231 */
                    background: rgb(208,228,247); /* Old browsers */
                    background: -moz-linear-gradient(top, rgba(208,228,247,1) 0%, rgba(115,177,231,1) 24%, rgba(10,119,213,1) 50%, rgba(83,159,225,1) 79%, rgba(135,188,234,1) 100%); /* FF3.6-15 */
                    background: -webkit-linear-gradient(top, rgba(208,228,247,1) 0%,rgba(115,177,231,1) 24%,rgba(10,119,213,1) 50%,rgba(83,159,225,1) 79%,rgba(135,188,234,1) 100%); /* Chrome10-25,Safari5.1-6 */
                    background: linear-gradient(to bottom, rgba(208,228,247,1) 0%,rgba(115,177,231,1) 24%,rgba(10,119,213,1) 50%,rgba(83,159,225,1) 79%,rgba(135,188,234,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
                    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#d0e4f7', endColorstr='#87bcea',GradientType=0 ); /* IE6-9 */
                    }
                    </style>
                    <div class="outter<?php echo $i ?>">
                        <div class="inner<?php echo $i ?>">
                        </div>
                    </div>
                </div>
               


            </div>

            <!-- <article><p><h5>" <?=$title?> "</h5></p></article> -->
            <p id="rank"></p>
             <script type="text/javascript">
        //Determine the rank based on critical score
        var cScore = <?=$row['c_moviescore']?>;
        var rate="";

        if(cScore == 10){
            rate = "Masterpiece";}
        else if(cScore>= 9){
            rate = "Amazing";}
        else if(cScore>= 8){
            rate = "Great";}
        else if(cScore>= 6.5){
            rate = "Good";}
        else if(cScore>= 4){
            rate = "Mediocre";}
        else if(cScore>= 3){
            rate = "Poor";}
        else{
            rate = "Dogshit";}


        document.getElementById("rank").innerHTML = rate;
        </script>
            <a class="btn btn-blog pull-right marginBottom10" href="moviedetail.php?movieid=<?=$row['movieid']?>">READ
                MORE</a>
        </div>
    </div>

<?php 
$i++;
$j++;

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