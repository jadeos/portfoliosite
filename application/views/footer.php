<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="utf-8">
	<title>jadeosullivan.com</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("/assets/bootstrap/css/bootstrap.css"); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("/assets/bootstrap/css/bootstrap.min.css"); ?>">
   <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Droid+Sans" />
	 <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Arimo" />
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

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
<body>
	<p class="footer" style="font-size: 13.0px; text-align:center; line-height: 0.8; padding-top:25px;">This Page has been rendered in  <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?><br/>
	</p>




<!--
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>-->
</body>


</html>
