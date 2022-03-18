<?php
  $username = $_POST['username'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $password = $_POST['password'];
  $ppassword = $_POST['ppassword'];
    
    // Database connection

    $conn = new mysqli('localhost', 'root', '','signup');
    if($conn->connect_error){
      die('connection Failed : '.$conn->connect_error);
    } else {
      $stmt = $conn->prepare("insert into registration(username, email, phone, password, ppassword) values(?, ?, ?, ?, ?)");
      $stmt->bind_param("ssiss", $username, $email, $phone, $password, $ppassword);
      $stmt->excute();
      echo "regestration Successfully....";
      $stmt->close();
      $stmt->close();
    }
?>