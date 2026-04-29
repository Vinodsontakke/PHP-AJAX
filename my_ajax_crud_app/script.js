document.getElementById("addBtn").addEventListener("click", addUser)
  
function addUser(){

  let id = document.getElementById("userId").value;
  let name = document.getElementById("name").value;
  let email = document.getElementById("email").value;

  let url = id ? "update.php" : "insert.php";
  
  let body = `id=${id}&name=${encodeURIComponent(name)}&email=${encodeURIComponent(email)}`

  fetch(url,{
    method:"POST",
    headers:{
      "Content-Type":"application/x-www-form-urlencoded"
    },
    body:body
  })
  .then(res => res.json())
  .then(data =>{
    document.getElementById("resultNote").innerHTML = data.message;
    loadData();

    document.getElementById("userId").value ="";
    document.getElementById("name").value ="";
    document.getElementById("email").value = "";
    document.getElementById("addBtn").innerText = "Add";
  })
  
}

function editForm(id,name,email){

  document.getElementById("userId").value = id;
  document.getElementById("name").value = name;
  document.getElementById("email").value = email;

  document.getElementById("addBtn").innerText = "Update";
  document.getElementById("resultNote").innerHTML = "You can Update Now "

}

function loadData(){
  fetch("fetch.php")
  .then(res=>res.text())
  .then(data=>{
    document.getElementById("tableDisplay").innerHTML = data
  })
}

function deleteUser(id){
  fetch("deleteUser.php",{
    method:"POST",
    headers:{
      "Content-Type":"application/x-www-form-urlencoded"
    },
    body:`id=${id}`
  })
  .then(res=>res.json())
  .then(data=>{
    alert(data.message)
  })
  loadData()
}
