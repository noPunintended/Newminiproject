<!-- <?php

// if (isset($_GET['fid']))
//     echo $_GET['fid'];
?>
 -->
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Thai Food Delivery</title>
    <link rel="stylesheet" type="text/css" href="vendor/css/food.css">
    <link rel="stylesheet" type="text/css" href="vendor/css/comment.css">
</head>
<body>
    <?php
require_once('menu.php');

    $editid = $_GET['fid'];
    $q = "SELECT * FROM foods WHERE food_id = '$editid'";
    $result = $connect->query($q);
    if(!$result){
        echo "Cannot get current record<br>".$q;
        exit();
    }
    $row = mysqli_fetch_array($result);

    // $name = $_GET['name'];
    // $comment = $_GET['comment'];
    // $submit = $_GET['submit'];

//     if ($connect->query($sql) === TRUE) {
//     echo "New record created successfully";
// }   else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }
//     $insert = mysql_query("INSERT INTO comment (com_name,com_comment) VALUE ('name','comment')");


?>



<div class="container" style="width:60%;">

    <h1><?php echo $row["name"]; ?>
    <span class="price-new text-danger">฿<?php echo $row["price"]; ?></span>
    </h1>
                                    <br>
    <img src="<?php echo $row["image"]; ?>" class="img-responsive"
                                 alt="Product Image"
                                 style="width:50%; text-align: center" />
                                 <br>
     <h4>&emsp;<?php echo $row["description"]; ?></h4>
     <br>
<?php 
require_once('comment.php')
 ?>




<!--     <div class="warpper">
        <div class="comment-wrapper">
            <form action="food-info.php" method="POST">
                <table>
                    <tr>
                        <td>Name: </td>
                        <td><input type="text" name="name"/></td>
                    </tr>
                    <tr><td colspan="2">Comment: </td></tr>
                    <tr><td colspan="2"><textarea name="comment"></textarea></td></tr>
                    <tr><td colspan="2"><input type="submit" name="submit" value="comment"></input></td></tr>
                </table>
            </form>
        </div>
    </div>
 -->
 



</div>




</body>
</html>


