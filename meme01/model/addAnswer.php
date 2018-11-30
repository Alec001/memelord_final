<?php
	session_start();
	require('../controller/utility.php');

$qid = $_GET['qid'];
	$reply = $_POST['reply'];
	$uid = $_SESSION['uid'];
$url = $_GET['url'];

if(isset($_FILES['image'])) {
    $destination_path = '../view/images/' . $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'], $destination_path);
    $image_filename = $_FILES['image']['name'];
} else {
    $image_filename='';
}

	$sql = "INSERT INTO ANSWER(QUESTION_ID, ANS_DETAIL, D_TIME, USER_ID, image) VALUES('$qid', '$reply', NOW(), '$uid', '$image_filename')";
	$res = ExecuteSetQuery($sql);

	if($res){
		header('Location: ../view/questionview.php?qid='.$qid);
	} 

?>