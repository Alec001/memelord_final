<?php
	session_start();
	require('header.php');
	require('checkUser.php');

	$sql = "DELETE FROM USER WHERE USER_ID=$_GET[userid]";
	$res = ExecuteSetQuery($sql);

	if($res){
		header("Location: myProfile.php");
	}
	else{
		header("Location: home.php");
	}
?>
