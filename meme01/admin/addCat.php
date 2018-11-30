<?php
	session_start();
	require('header.php');

	$sql = "INSERT INTO CATEGORY(CAT_NAME, CAT_DESCRIPTION) VALUES('$_POST[cat_name]', '$_POST[cat_description]')";
	$res = ExecuteSetQuery($sql);

	if($res){
		header('Location: success_cat.php');
	}
	else{
		header('Location: newcat.php');
	}
?>
