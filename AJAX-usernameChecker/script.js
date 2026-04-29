const userNameInput = document.getElementById("username");

let timmer;



userNameInput.addEventListener("input",function(){
  let username = this.value;

  timmer = setTimeout(()=>{
    fetch("server.php",{
    method:"POST",
    headers:{
      "Content-Type":"application/x-www-form-urlencoded"
    },
    body: "username=" + encodeURIComponent(username)
  })
  .then(res => res.json())
  .then(data => {
    document.getElementById("status").innerHTML = data.message;
  });
 },2000);
  
})