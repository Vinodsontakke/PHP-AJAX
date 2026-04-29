<?php
  include "db.php";

 $result = mysqli_query($conn,"SELECT * FROM users");

 while($row = mysqli_fetch_assoc($result)){
  echo 
    "<tr>
      <td>{$row['name']}</td>
      <td>{$row['email']}</td>
      <td>
      <button onclick='editForm(
      {$row['id']},
      \"{$row['name']}\",
      \"{$row['email']}\"
      )'>Edit</button>
      <button onclick='deleteUser({$row['id']})'>Delete</button>
      </td>
    </tr> 
    ";
 }

?>