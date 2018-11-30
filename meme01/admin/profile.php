<?php
	session_start();
header('Content-Type: application/json');
require('../controller/utility.php');
$conn = mysqli_connect ("localhost","root","","meme");

	if(isset($_GET['getData'])) {
        if($_GET['getData'] == 'user') {
            
           $mysqli = new mysqli('localhost','root','','meme');
$myArray = array();
if ($result = $mysqli->query("SELECT * FROM USER")) {

    while($row = $result->fetch_array(MYSQL_ASSOC)) {
            $myArray[] = $row;
    }
    print json_encode($myArray);
}
        }
    }
$result->close();
$mysqli->close();
        
?>