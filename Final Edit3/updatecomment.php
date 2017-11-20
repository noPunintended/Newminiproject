<?php
require_once('connect.php');

// PoST comes from Editprofile.php
$commentid = $_GET['cid'];
$movieid = $_GET['mid'];

$score = $_POST['score'];
$comment = $_POST['comment'];


$connect->query("UPDATE comment SET commenttext = '$comment' , 	commentscore = '$score' WHERE commentid ='$commentid'");
header('Location: moviedetail.php?movieid='.$movieid);

?>