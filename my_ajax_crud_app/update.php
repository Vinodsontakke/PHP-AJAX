<?php
include "db.php";

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];

$stmt = mysqli_prepare($conn,"UPDATE users SET name=? ,email=? WHERE id=?");
mysqli_stmt_bind_param($stmt,"ssi",$name,$email,$id);
mysqli_stmt_execute($stmt);

echo json_encode([
  "message"=>"User Updated!"
]);
?>