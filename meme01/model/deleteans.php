<?php
	session_start();
	require('../controller/utility.php');

	$sql = "DELETE FROM ANSWER WHERE ANS_ID=$_GET[ansid] AND USER_ID=$_SESSION[uid]";
	$res = ExecuteSetQuery($sql);

	if($res){
		header("Location: ../view/ans.php");
	}
	else{
		header("Location: ../view/unauth.php");
	}
?>
