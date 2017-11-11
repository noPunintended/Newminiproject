
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="Logincss.css">
</head>

<body>




<!-- login form -->

<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
          <h1 class="text-center">Welcome to Movie Review</h1>
        </div>
         <div class="modal-body">
             <form method="POST" action="mainpage.php" >
                 <input type="text" name="usernamein"  class="form-control input-lg" placeholder="Username"/>

                 <input type="password" name="passwd" class="form-control input-lg" placeholder="Password"/>
        <!--         <input type="button" name="logins" onclick="check(this.form)" class="btn btn-block btn-lg btn-primary"  value="Login"/>
                -->
                <input type="submit" name="logins" class="btn btn-block btn-lg btn-primary"  value="Login"/>
                 <span class="pull-right"><a href="#">Register</a></span>
                 <span><a href="mainpage.php">Homepage</a></span>
                 <span class="pull-right"><a href="#">Forgot Password&nbsp; &nbsp;</a></span>
              </form>
         </div>
    </div>
 </div>
<!--  <script language="javascript">
    function check(form)
    {
        if(form.usernamein.value == "pun" && form.passwd.value == "123")
        {
            window.open('mainpage.html')
            window.close('login.html')
        }
        else
        {
            alert("The username and password is incorrect!!")
        }

    }


 </script> -->
</body>

</html>