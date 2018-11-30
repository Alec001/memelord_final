<?php
	session_start();
	require('header.php');
	require('checkUser.php');

	$sql = "SELECT * FROM ANSWER A, QUESTION Q WHERE A.QUESTION_ID=Q.QUESTION_ID AND A.ANS_ID=$_GET[ansid]";
	$res = ExecuteGetQuery($sql);
	$row = mysqli_fetch_array($res);

	echo "<body align='center'><h3>$row[HEADING]</h3><br>$row[QUESTION_DETAIL]<br><br>
		<form method='POST' action='../model/updateans.php' align = 'center'>
		<input type='hidden' name='ansid' value='$row[ANS_ID]'>
		<input type='text' name='ansdetail' value='$row[ANS_DETAIL]'><br><br>
		<input class='btn btn-primary' type='submit' value='Update'>
		</form>
		</body>";
require('footer.php');
?>


