<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style.css">
    <title>AJAX</title>
  </head>
  <body onload="loadData()">
  <div class="container">
    <h2>AJAX CRUD APP</h2>

    <div class="form-group">
      <input type="hidden" id="userId">
      <input type="text" id="name" placeholder="Enter name">
      <input type="email" id="email" placeholder="Enter email">
      <button id="addBtn">Add</button>
    </div>
    <hr>
    <br>
    <h3 id="resultNote"></h3>
    <table>
      <thead>
        <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Actions</th>
        </tr>
      </thead>
      <tbody id="tableDisplay">
        
      </tbody>
    </table>
  </div>

  <script src="script.js"></script>
</body>
</html>