

<?php
	session_start();
	require('header.php');

	echo "<h3 align='center'>This is Contact Us page.</h3>"
?>




<form method="post" class="form-inline" action="enquiry.php" align="center" name="contact" id="contact">
    <label for="name">Name</label>
	 <input type="text" id="name1" pattern="[a-zA-Z\s]{2,30}">
    <br>
    <label for="email">Email</label>
	<input type="text" name="email" id="email1" >
    <br>
    <label for="msg">Message</label>
	<input type="text" name="msg" id="msg" pattern="[a-zA-Z0-9\s]{6,255}">
    <br>
	<input type="submit" name="Submit" id="contsub" class="btn btn-primary">
</form>
<?php
        require('footer.php');
?>

