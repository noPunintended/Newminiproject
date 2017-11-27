<!doctype html>
<html>
<head>
    <title>User profile</title>

    <link href="logincss.css" rel="stylesheet">

</head>
<body>

<?php
/*require_once('navbar.php');*/
require_once('connect.php');
$commentid = $_GET['cid'];
$movieid = $_GET['mid'];
$q = "SELECT * FROM comment where commentid = '$commentid'";
$row = $connect->query($q)->fetch_array();




?>
<div class="container">
    <h1 class="page-header">Edit Comment</h1>
    <div class="row">
        <!-- left column -->
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="text-center">
                <img src="images/logo.png" class="avatar img-circle img-thumbnail" alt="avatar">
                <!--<h6>Upload a different photo...</h6>
                <input type="file" class="text-center center-block well well-sm">-->
            </div>
        </div>
        <!-- edit form column -->
        <div class="col-md-8 col-sm-6 col-xs-12 personal-info">

            <h3>Comment info</h3>
            <form action="updatecomment.php?cid=<?=$commentid?>&mid=<?=$movieid?>" method="post" class="form-horizontal">
                <div class="form-group">
                    <label class="col-lg-3 control-label">Score:</label>
                    <div class="col-lg-8">
                        <input type= "number" min="0" max="10" name="score" value="<?= $row['commentscore'] ?>" required>
                    </div>
                </div>
              
          
                <div class="form-group">
                    <label class="col-md-3 control-label">Comment:</label>
                    <div class="col-md-8">
                        <input name="comment" value="<?= $row['commenttext'] ?>" class="form-control" required></input>
                               
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-md-3 control-label"></label>
                    <div class="col-md-8">
                        <input name="save" class="btn btn-primary" value="Save Changes" type="submit">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>

<script>
    $(document).ready(function () {
        $("#profileForm").submit(function (event) {
            // Stop form from submitting normally
            event.preventDefault();

            var form_data = new FormData(document.getElementById("profileForm"));

            $.ajax({
                url: "php-action/update-profile.php",
                type: "POST",
                data: form_data,
                processData: false,  // tell jQuery not to process the data
                contentType: false   // tell jQuery not to set contentType
            }).done(function (data) {
                if (data == "success")
                    swal(
                        'Updated!',
                        'Your account profile has been updated!',
                        'success'
                    ).then(function () {
                        location.reload();
                    });
                else {
                    swal(data);
                }
            });
        });

        $("input[name='name']").bind('keyup blur', function () {
                var node = $(this);
                node.val(node.val().replace(/[^A-Za-z\s]/g, ''));
            }
        );
    });
</script>