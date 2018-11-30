<?php
	require('header.php');
?>
<body>
	<form method="post" action="sendEmail.php"  align="center" onclick="forgot()">
		<br><br>
		<div class="form-group">
		Username: <input type="text" id="forg" name="uname" class="form-group"><br>
		</div>
		<input type="submit" value="Send Email" class="btn btn-primary">
		<br><br>
		<?php
			if(isset($_GET["act"]))
				if($_GET["act"] == "invalid"){
					echo '<div class="alert alert-danger" align="center">';
					echo "Username doesnot exist.";
					echo "</div>";
				}
				else if($_GET["act"] == "notsent"){
					echo '<div class="alert alert-danger" align="center">';
					echo "Unable to send email. Please try again.";
					echo "</div>";
				}
		 ?>
	</form>
   
</body>
<?php
require('footer.php');
?>
