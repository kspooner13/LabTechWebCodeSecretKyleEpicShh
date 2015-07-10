<?php 

///login.php


include('../classes/Login.php');
include('../config/dbconnect.php');

$login = new Login();

if (isset($_REQUEST['logout'])) {
	
	$login->doLogout();
	
}
// create a login object. when this object is created, it will do all login/logout stuff automatically
// so this single line handles the entire login process. in consequence, you can simply ...
//$login = new Login();

if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo $error;
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo $message;
        }
    }
}

// ... ask if we are logged in here:
if ($login->isUserLoggedIn() == true) {

// let us go back home!

header( 'location: ../index.php');

}


?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?php echo APP_TITLE; ?></title>

  <link rel='stylesheet' type='text/css' href='../plugins/bootstrap/bootstrap.css'>
  <link rel='stylesheet' type='text/css' href='../css/font-awesome.min.css'>
  <link rel="stylesheet" type="text/css" href="../css/style.min.css">
  <link rel="stylesheet" type="text/css" href="../css/responsive.css">
  <link rel="stylesheet" type="text/css" href="../css/animate.css">

  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Lato:400,300,700,700italic,900,100' rel='stylesheet' type='text/css'>

  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->


</head>


<body class="login-page">

<section class="content login-page">

  <div class="content-liquid">
    <div class="container">

      <div class="row">

        <div class="login-page-container">

          <div class="boxed animated flipInY">
            <div class="inner">
<form method='post' action='<?php echo $_SERVER['PHP_SELF']; ?>'>
              <div class="login-title text-center">
                <h4>Login to your account</h4>
                
              </div>

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" placeholder="Username" name="username" />
              </div>

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="password" class="form-control" placeholder="Password" name="password" />
              </div>

              <input type="submit" class="btn btn-lg btn-success" value="Login to your account" name="login" id="submit" />

              <p class="footer">Please see your LabTech Adminstrator<br/>for any account issues.</p>

            </div>
          </div>

        </div>

      </div>
      
    </div>
  </div>

</section>

<!-- Javascript -->
<script src="../plugins/jquery/jquery-2.1.0.min.js"></script>
<script src="../plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="../plugins/flippy/jquery.flippy.min.js"></script>


<script type="text/javascript">
  jQuery(document).ready(function($){

    var min_height = jQuery(window).height();
    jQuery('div.login-page-container').css('min-height', min_height);
    jQuery('div.login-page-container').css('line-height', min_height + 'px');

    //$(".inner", ".boxed").fadeIn(500);
  });
</script>
</body>