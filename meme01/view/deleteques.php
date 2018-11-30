<?php
	session_start();
	require('header.php');

	$sql = "DELETE FROM QUESTION WHERE QUESTION_ID=$_GET[qid]";
	$res = ExecuteSetQuery($sql);

	if($res){
		header("Location: ". $_SERVER['HTTP_REFERER']);
	}
	else{
		header("Location: home.php");
	}
?>
