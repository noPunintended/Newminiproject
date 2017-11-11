
<?php

   

    if(isset($_POST['submitcom'])){
    $name = $_SESSION["usernamein"];
    $score = $_POST['score'];
    $content = $_POST['commentContent'];

    if($name&&$comment)
    {
        $q = "INSERT INTO comment (commenttext,commentofusername,movieid,commentscore
) VALUE ('$content','$name','$movieid','$score')";
        $result = $connect->query($q);
    }
    else
    {
        echo "Please fill out";
    }

}

?>
<div class="container" style="padding-top:30px">


    <h1 class="text-center">Reviews</h1>
    <div class="row">
<?php  
    $q = "select * from comment WHERE movieid = '$movieid'";
    $result = $connect->query($q);
    while ($row = $result->fetch_array()) {
?>

        <div class="col-sm-6">
            <div id="tb-testimonial" class="testimonial testimonial-default-filled">
                <div class="testimonial-section">
                    <?php echo $row['commenttext']; ?></a>
                </div>
                <div class="testimonial-desc">
                    <img src="images/god/1.jpg" alt="" />
                    <div class="testimonial-writer">
                        <div class="testimonial-writer-name"><?php echo $row['commentofusername']; ?></a></div>
                        <div class="testimonial-writer-designation">Top Critic</div>
                        <b>Score: </b><a class="testimonial-writer-company">99</a>
                    </div>
                </div>
            </div>   
        </div>
        
<?php
}
?>
 <!-- comment -->    




    </div>
</div>




<br>
<!-- comment box -->


<br>
<br>
<?php  
// <!-- Boostrap comment box -->
if (!isset($_SESSION["usernamein"]))
        {
            echo "login first!!";
        }
        else
        {
?>
            <link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">
            <div class="container">
                <div class="row">
                    <h3>Comment Box</h3>
                </div>
                
                <div class="row">

                    <div class="col-md-6">

                        <div class="widget-area no-padding blank">
                            <div class="status-upload">

                                <form action="comment.php?movieid=<?php echo '$movieid' ?>" method="POST">
                                    <b>Name:</b> <input  placeholder="Enter your name" type="text" name="name"><br>
                                    <b>Score:</b> &nbsp<input placeholder="Enter your score" type="text" name="score"><br>
                                    <textarea placeholder="How do you feel or what do you think about this movie?" name="commentContent"></textarea>
                                    
                                    <button type="submit" class="btn btn-success green" name="submitcom"><i class="fa fa-share"></i> Post</button><br>
                                    
                                </form>
                            </div><!-- Status Upload  -->
                        </div><!-- Widget Area -->
                    </div>
                    
                </div>
            </div>
            <!-- background -->
            <!-- <div id="picture"></div>
            <h1>Misty Background <br> Experiment</h1>
            <div id="layer2"></div>
            <div id="layer1"></div> -->
            <br>
    <?php
}
?>

