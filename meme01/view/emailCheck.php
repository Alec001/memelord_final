<?php
$email = $_GET['email'];

if (empty($email)) {
     echo 'Please enter an Email';
} else {
         $db = new PDO("mysql:host=localhost;dbname=meme", 'root','');
}

$query = $db->prepare("SELECT * FROM USER WHERE EMAIL = :email");

$query->execute(['email' => $email]);

echo json_encode(array('exists' => $query->rowCount() < 1));



?>