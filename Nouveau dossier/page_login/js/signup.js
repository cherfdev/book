const form = document.querySelector("form");
const signup = document.querySelector('.signup');
let errorText = document.querySelector('.errorText')

form.onsubmit = (e)=>{
    e.preventDefault();
}


signup.onclick = ()=>{
  let xhr = new XMLHttpRequest();
  xhr.open("POST", '../php/signup.php', true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
            let data = xhr.response;
            if(data === "ok"){
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