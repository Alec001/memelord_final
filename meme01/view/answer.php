<?php
	session_start();
	require('header.php');
	require('checkUser.php');

	$sql = "SELECT * FROM QUESTION WHERE QUESTION_ID=$_GET[qid]";
	$res = ExecuteGetQuery($sql);

	$row = mysqli_fetch_array($res);


?>
<div align="center">
<form method="POST" class="dropzone" id="fo" action="../model/addAnswer.php?qid=<?php echo "$_GET[qid]" ?>" enctype="multipart/form-data">
		<h3><?php echo "$row[HEADING]"; ?><br></h3>
		RE: <?php echo "$row[QUESTION_DETAIL]"; ?><br><br>
    <textarea id="reply" name="reply" class="ckeditor"></textarea><br><br>
    <p id="reply_error">Please fill in the reply field before submitting</p>
         <input type="file" name="image" id="image" accept="image/jpeg, image/png, image/gif"> <br>
		<input class="btn btn-primary" type="submit" value="Submit" id="submitt" >
</form>
</div>
<?php
require('footer.php');
?>
