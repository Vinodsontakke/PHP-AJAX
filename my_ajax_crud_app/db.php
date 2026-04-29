<?php
  $conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "ajax_crud"
);

if(!$conn){
  die("Database connection is failed");
}
?>