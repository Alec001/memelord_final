<?php


$username = $_POST['username'];

if (empty($username)) {
     echo 'Please enter a Username';
} else {
         $db = new PDO("mysql:host=localhost;dbname=meme", 'root','');
}

$query = $db->prepare("SELECT * FROM USER WHERE USERNAME = :username");

$query->execute(['username' => $username]);

if ($query->rowCount() < 1) {
echo '<strong>' . $username . '</strong> is available'; 
} else {
    echo 'Sorry, <strong>' . $username . '</strong> has already been taken.';
}













/*
if(!empty($_GET['username'])) {
    $uname = $_GET['uname'];
    
    $conn = new PDO("mysql:host=localhost;dbname=meme", 'root','');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $query = "SELECT * FROM USER WHERE USERNAME = '$uname'";
    $stmt = $conn->prepare($query);
    $result = $stmt->execute();
    
    
  if(mysqli_num_rows($result)){
      $row = mysqli_fetch_assoc($result);
      
      echo json_encode(['status'=>'success']);
  } else {
      echo json_encode(['status'=>'error']);
  }
      
    
   
   if(isset($_GET['username'])) {
   
    $conn = new PDO("mysql:host=localhost;dbname=meme", 'root','');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  $query = "SELECT * FROM USER WHERE USERNAME = :username";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':username', $_GET['username']);
    $stmt->execute();
    $result = $stmt->fetch();
    
    if(is_array($result)) {
        echo "<span class='status-not-available'> Username Not Available.</span>";
  }else{
      echo "<span class='status-available'> Username Available.</span>";
  }
    }
   
   
   
      echo "<span class='status-not-available'> Username Not Available.</span>";
  }else{
      echo "<span class='status-available'> Username Available.</span>";
  }
}*/
?>