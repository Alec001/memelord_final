<?php
	function ExecuteGetQuery($sql){
		$conn = mysqli_connect ("localhost","root","","meme");
		// mysql_select_db ("mydb",$con);

		$rows = mysqli_query($conn, $sql) or die ("Query fail: ".mysqli_error($conn));

		mysqli_close($conn);

		return $rows;
	}

	function ExecuteSetQuery($sql){
		$conn = mysqli_connect ("localhost", "root","","meme");
		// mysql_select_db ("mydb",$con);

		$result = mysqli_query($conn, $sql) or die ("Query fail: ".mysqli_error($conn));
		mysqli_close($conn);

		return $result;
	}

	function test_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>