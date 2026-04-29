<?php
  include "db.php";

  header("Content-Type: application/json");

  $name = $_POST["name"];
  $email = $_POST["email"];

  $stmt = mysqli_prepare($conn,"INSERT INTO users (name,email) VALUES (? , ?)");
  
  mysqli_stmt_bind_param($stmt,"ss",$name,$email);
  mysqli_stmt_execute($stmt);

  echo json_encode([
    "message"=>"User Added Succesfully"
  ]);

?>