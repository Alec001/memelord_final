<?php
	require("../view/header.php");

	$uname = $_POST["uname"];
	$pwd = $_POST["pwd"];

	session_start();
$conn = mysqli_connect("localhost","root","","meme");
	
$message="";
if(!empty($_POST["uname"])) {
	$result = mysqli_query($conn,"SELECT * FROM USER WHERE USERNAME='" . $_POST["uname"] . "' AND PASSWORD = '". $_POST["pwd"]."'");
	$row  = mysqli_fetch_array($result);
	if(is_array($row)) {

			$_SESSION["uid"] = $row["USER_ID"];
			$_SESSION["name"] = $row["FULL_NAME"];

			if($row["USER_LEVEL"] == 1){
				header("Location: ../admin/home.php");

			}
			else{
				header("Location: ../view/userhome.php");

			}
    }
		else{
			header("Location: ../view/home.php?act=invalid");

		}
	}
	else{
		header("Location: ../view/home.php?act=invalid");

	}

?>
