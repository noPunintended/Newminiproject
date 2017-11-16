<?php
$did = $_GET['delid'];
$lo = $_GET['fid'];
require('connect.php');

$q = "DELETE FROM comment WHERE commentid ='$did'";
$result = $connect->query($q);

if(!$result){
	echo "Delete not success";
}
else{
	header("Location: moviedetail.php?movieid=$lo");
}

?>