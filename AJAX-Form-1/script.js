// document.getElementById("btn").addEventListener("click", function(){
//   let name = document.getElementById("name").value;

//   fetch("server.php",{
//     method:"POST",
//     headers:{
//       "Content-Type" : "application/x-www-form-urlencoded"
//     },
//     body:"name=" + encodeURIComponent(name)
//   })
//   .then(response => response.text())
//   .then(data =>{
//     document.getElementById("output").innerHTML = data;
//   });
// })

document.getElementById("formData").addEventListener("submit",function(e){
  e.preventDefault();

  let formData = new FormData(this);

  fetch("server.php",{
    method:"POST",
    body: formData
  }).then(response => response.text())
    .then(data => {
      document.getElementById("showFormData").innerHTML = data;
    })

})
