const form = document.querySelector("form");
const login = document.querySelector("button");
let errorText = document.querySelector('.errorText')

form.onsubmit = (e)=>{
    e.preventDefault();
}

login.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", '../php/login.php', true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
              let data = xhr.response;
              if(data === "success"){
                location.href="../accueil/index.php";
              }
              else{
                errorText.style.display = "block";
                errorText.textContent = data;
              }
          }
      }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}