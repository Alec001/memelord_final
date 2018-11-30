<?php
	if(!isset($_SESSION["name"])){
		header("Location: home.php");
	}
?>

<span id="user">
	Welcome <a href="adminEdit.php"><?php echo "$_SESSION[name]";?></a>, [ <a href="logout.php">log-out</a> ]
</span>
