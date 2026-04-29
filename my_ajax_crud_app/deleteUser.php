<?php
  include "db.php";

  header("Content-Type: application/json");

  $id = $_POST['id'];

  $stmt = mysqli_prepare($conn,"DELETE FROM users WHERE id=?");
  mysqli_stmt_bind_param($stmt,"i",$id);  
  mysqli_stmt_execute($stmt);

  echo json_encode([
    "message"=>"User is Deleted."
  ])
?>