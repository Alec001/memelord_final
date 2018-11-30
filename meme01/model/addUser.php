<?php
	require("../view/header.php");
$conn = mysqli_connect ("localhost","root","","meme");
	$uname = $pass = $name = $email = $gender = "";

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$uname = $_POST['username'];
		$pass = $_POST['pass'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$gender = $_POST['gender'];
	}

	$sql = "INSERT INTO USER(USERNAME, PASSWORD, FULL_NAME, EMAIL, GENDER) VALUES('$uname', '$pass', '$name', '$email', '$gender')";

	 $stmt = $conn->prepare($sql);
	$result = $stmt->execute();

	if($result){
		header('Location: ../view/success.php');
	}
	else{
		header('Location: ../view/signup.php?act=invalid');
	}


?>
