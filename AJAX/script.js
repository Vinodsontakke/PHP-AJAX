document.getElementById('btn').addEventListener("click",function(){
  fetch("server.php")
      .then(response => response.text())
      .then(data => {
        document.getElementById('output').innerHTML = data
      })

})