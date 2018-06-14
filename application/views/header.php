<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
    <meta name="author" content="">
	<title>jadeosullivan.com</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("/assets/bootstrap/css/bootstrap.css"); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("/assets/bootstrap/css/bootstrap.min.css"); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("/assets/bootstrap/css/bootstrap-theme.min.css"); ?>">

   <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Droid+Sans" />

	 <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Arimo" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	 <script src="https://www.google.com/recaptcha/api.js"></script>
	 <!--<script src="assets/bootstrap/js/jquery-2.2.4.min.js"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>-->
	 <script src="assets/bootstrap/js/bootstrap.js"></script>

	 <script src="assets/bootstrap/js/bootstrap.min.js"></script>

	 <!--bootstrap-->


	
	 


<style>
p {
	font-family: "Droid Sans";
	font-size: 17px;
	font-style: normal;
	font-variant: normal;
	font-weight: 400;
	line-height: 20px;
}
#nav ul li.active {
    background-color: #FF0000;
}


</style>




<link rel="stylesheet" type="text/css" href="<?php echo base_url("/assets/bootstrap/css/main.css"); ?>" />
<style>
@media(max-width:33.9em) {
  .navbar .collapse {max-height:250px;width:100%;overflow-y:auto;overflow-x:hidden;}
  .navbar .navbar-brand {float:none;display: inline-block;}
  .navbar .navbar-nav>.nav-item { float: none; margin-left: .1rem;}
  .navbar .navbar-nav {float:none !important;}
  .nav-item{width:100%;text-align:left;}
  .navbar .collapse .dropdown-menu {
    position: relative;
    float: none;
    background:none;
    border:none;
  }
}
.collapse navbar-collapse li{
	list-style-type:none;
	}
.collapse navbar-collapse li a{
	text-decoration: none;
}
</style>
</head>

<body style="background-color: lightgrey;">




<nav class="navbar navbar-toggleable-md navbar-light bg-faded" style="background-color: grey;">

	<div class="navbar-header">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation" aria-controls="navbarTogglerDemo01">
		<span class="navbar-toggler-icon"></span>
	</button>
	</div>
	 
	<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
		<a class="navbar-brand" style="color:white;" href="#">Jade O'Sullivan</a>
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url("welcome"); ?>" style="color:white;">Home <span class="sr-only">(current)</span></a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url("work"); ?>" style="color:white;">Projects</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url("cv"); ?>" style="color:white;">CV</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url("contactform"); ?>" style="color:white;">Contact</a>
			</li>
		</ul>


	</div>
	</nav>	





</body>


</html>
