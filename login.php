<?php include_once("functions.php");?>

<?php
  if (!isset($_GET['mes'])) {
      $message=null;
      $color="";
  }else{
      $signupCheck = $_GET['mes'];
      if ($signupCheck == "err") {
        $message='Username or Password incorrect! ';
        $color="red";
      }elseif ($signupCheck == "regsuccess") {
        $message='Successfully Registerd! Login To Continue ';
        $color="green";
      }elseif ($signupCheck == "search") {
        $message='Please Login To Start Searching For That Special Someone';
        $color="yellow";
      }elseif ($signupCheck == "contact") {
        $message='Please Login To Get In Touch With Us';
        $color="blue";
      }
      else{
        $message=null;
        $color="";
      }
  }
?>

<!DOCTYPE HTML>
<html>
<head>
<title>KAPU Dating</title>
<script type="text/javascript">
  window.history.forward();
  function noback(){
     window.history.forward();
  }
</script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Fade-in animation -->
<link rel="stylesheet" href="css/animate.css">
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!--font-Awesome-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--font-Awesome-->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<style> 
  .cc{
    background-image: url(images/background/right-shape.png);
    width: 100%;
  }
</style>
</head>
<body>
<!-- Navigation Start -->
<?php include_once("includes/navigation.php");?>
<!-- Navigation End-->
<div class="grid_3 cc">
  <div class="container  fadeInUp animated">
    <div class="breadcrumb1">
      <ul>
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Login</li>
      </ul>
    </div>
    <div class="services  fadeInUp animated">
   	  <div class="col-sm-6 login_left">
  	    <form action="auth/auth.php?user=1" method="post">
    	    <div class="form-item form-type-textfield form-item-name">
            <!--Error message-->

          <?php
            if($message){
              if ($color=="red") {
                echo '  <div style="text-align: center;" class="alert alert-danger" role="alert">'.$message.'<br>
                  </div>';
              }elseif ($color=="green") {
                echo '  <div style="text-align: center;" class="alert alert-success" role="alert">
              '.$message.'<br>
                  </div>';
              }elseif ($color=="yellow") {
                echo '  <div style="text-align: center;" class="alert alert-info" role="alert">
              '.$message.'<br>
                  </div>';
              }elseif ($color=="blue") {
                echo '  <div style="text-align: center;" class="alert alert-info" role="alert">
              '.$message.'<br>
                  </div>';
              }

              
                }
                ?>
  	      <label for="edit-name">Username <span class="form-required" title="This field is required.">*</span></label>
  	      <input type="text" id="edit-name" name="username" value="" size="60" maxlength="20" class="form-text required" required>
  	      </div>
    	    <div class="form-item form-type-password form-item-pass">
    	      <label for="edit-pass">Password <span class="form-required" title="This field is required.">*</span></label>
    	      <input type="password" id="edit-pass" name="password" size="60" maxlength="20" class="form-text required" required>
    	    </div>
    	    <div class="form-actions"><br>
    	    	<input style="width: 100%;" type="submit" id="edit-submit" name="op" value="Log in" class="btn_1 submit">
    	    </div>
  	    </form><br>

        <div style="text-align: center;" class="row">
          <p>Not a Member Yet? <a style="text-decoration: none;" href="register.php">Register For Free</a></p>
        </div><br>

        <ul class="sharing"><br>
        <div class="row">
          <div class="col-sm-6">
            <li><a href="#" class="facebook" title="Facebook"><i class="fa fa-boxed fa-fw fa-facebook"></i>Find Kapu on Facebook</a></li>
          </div>
          <div class="col-sm-6">
            <li><a href="#" class="twitter" title="Twitter"><i class="fa fa-boxed fa-fw fa-twitter"></i>Find Kapu on Twitter</a></li>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <li><a href="#" class="google" title="Google"><i class="fa fa-boxed fa-fw fa-google-plus"></i> Share on Google+</a></li>
          </div>
          <div class="col-sm-6">
            <li><a href="#" class="linkedin" title="Linkedin"><i class="fa fa-boxed fa-fw fa-linkedin"></i> Share on LinkedIn</a></li>
          </div>
        </div>
      </ul>
	    </div>
  	  <div style="text-align: center;" class="col-sm-6">
        <img style="width: 90%" src="images/background/illutration.png">
  	  </div>
  	  <div class="clearfix"> </div>
    </div>
  </div>
</div>


<?php include_once("footer.php");?>

