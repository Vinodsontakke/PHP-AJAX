<?php
  header("Content-Type: application/json");

  $takenUsernames = ["vivek","vinod","vikas","nana"];
  $username = strtolower(trim($_POST["username"]));

  if(in_array($username , $takenUsernames)){
    echo json_encode([
      "available" => false,
      "message" => "Username Already Taken"
    ]);
  }else{
    echo json_encode([
      "available" => true,
      "message" => "This name can be Username"
    ]);
  }
?>