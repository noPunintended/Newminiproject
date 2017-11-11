
<div class="container" style="padding-top:30px">


    <h1 class="text-center">Review</h1>
    <div class="row">
        <div class="col-sm-6">
            <div id="tb-testimonial" class="testimonial testimonial-default-filled">
                <div class="testimonial-section">
                    I think the film was good, but didn't really live up to expectations. I didn't find it that scary. Admittedly, one of the jump scares worked on me but otherwise I never felt any dread looming in the pit of my stomach. The film is gorier than the mini series. That's for sure. And I liked that updated aspect, but nothing particularly shocked me. There was quite a bit of special effects that just were not very good. And I think that's a big reason why I just wasn't very scared.
                </div>
                <div class="testimonial-desc">
                    <img src="images/god/1.jpg" alt="" />
                    <div class="testimonial-writer">
                        <div class="testimonial-writer-name">Zahed Kamal</div>
                        <div class="testimonial-writer-designation">Top Critic</div>
                        <b>Score: </b><a class="testimonial-writer-company">99</a>
                    </div>
                </div>
            </div>   
        </div>
        
       
 <!-- comment -->    
<?php

   

    if(isset($_POST['submitcom'])){
    $name = $_POST['name'];
    $score = $_POST['score'];
    $content = $_POST['commentContent'];
?>
         <div class="col-sm-6">
            <div id="tb-testimonial" class="testimonial testimonial-primary-filled">
                <div class="testimonial-section">
                    <?=$content?>
                </div>
                <div class="testimonial-desc">
                    <img src="https://placeholdit.imgix.net/~text?txtsize=9&txt=100%C3%97100&w=100&h=100" alt="" />
                    <div class="testimonial-writer">
                        <div class="testimonial-writer-name"><?=$name?></div>
                        <div class="testimonial-writer-designation">Top Critic</div>
                        <b>Score: </b><a href="#" class="testimonial-writer-company"><?=$score?></a>
                    </div>
                </div>
            </div>   
        </div>

<?php    }

?>



    </div>
</div>




<br>
<!-- comment box -->


<br>
<br>

<!-- Boostrap comment box -->
<link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">
<div class="container">
    <div class="row">
        <h3>Comment Box</h3>
    </div>
    
    <div class="row">

        <div class="col-md-6">

            <div class="widget-area no-padding blank">
                <div class="status-upload">

                    <form action="godfather.php" method="POST">
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

