<?php
	require('../controller/utility.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>MEMELORD</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.0.3.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="parsley.min.js"></script>
    <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.0.3.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link type="text/css" rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="ckeditor/ckeditor.js"></script>
    <script src="js/dropzone.js"></script>
    <script src="js/jquery-cookie/jquery.cookie.js"></script>
    <script src="js/jss.js" type="text/javascript"></script>
    <link rel="stylesheet" href="css/css.css" type="text/css">
</head>
<body>
	<!-- <div class="container-fluid no-padding">
		<img src="../images/header1.svg" class="img-rounded" alt="Header Image">
	</div> -->
	<h1 align="center">MEMELORD</h1>
	<?php if(isset($_SESSION["name"])){ ?>
	
    
     
     <div class="ham" onclick="myFunction(this)">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</div>
    
    
    
    <ul class='list-inline' id="nav">
		<li><a href='userhome.php'>Home</a></li>
		<li><a href='ques.php'>Questions</a></li>
		<li><a href='ans.php'>Answers</a></li>
		<li><a href='newtopic.php'>Add Topic</a></li>
	</ul>
    
    
	<?php }else{ ?>
    
    
        <div class="ham" onclick="myFunction(this)">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</div>
    
    
	<ul class='list-inline' id="nav">
		<li><a href='home.php'>Home</a></li>
		<li><a href='aboutus.php'>About Us</a></li>
		<li><a href='contactus.php'>Contact Us</a></li>
	</ul>
    
  
	<?php } ?>
</body>
</html>
