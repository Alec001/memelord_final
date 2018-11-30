<?php

	if(!isset($_SESSION["name"])){
		header("Location: ../view/home.php");
	}
?>

<span id="user">
	Welcome <a href=" userEdit.php"><?php echo "$_SESSION[name]";?></a>, [ <a href="logout.php">log-out</a> ]
</span>
