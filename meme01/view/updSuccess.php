<?php
	session_start();
	require('header.php');
	require('checkUser.php');
?>
<body align = "center">
	<div class="alert alert-success">
	<?php
		echo "<h1> SUCCESS! Your profile is updated. </h1> " ;
	?>
	</div>
</body>
<?php
  require('footer.php');
?>
