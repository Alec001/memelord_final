<?php
	session_start();
	require('header.php');

	$qid = $_GET['qid'];
	$reply = $_POST['reply'];
	$uid = $_SESSION['uid'];
    $image = $_POST['image'];
	$sql = "INSERT INTO DISCUSSION(QUESTION_ID, ANS_DETAIL, D_TIME, USER_ID, image) VALUES('$qid', '$reply', NOW(), '$uid', '$image')";
	$res = ExecuteSetQuery($sql);

	if($res){
		header('location : questionview.php?qid='.$qid);
	}
?>
