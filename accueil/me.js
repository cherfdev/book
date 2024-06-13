const form = document.querySelector("form");
const add = document.querySelector('#add');
let errorText = document.querySelector('.errorText');
const btn = document.querySelector(".plus");
const destroy= document.querySelector(".destroy");


form.onsubmit = (e)=>{
    e.preventDefault();
}

btn.addEventListener("click",()=>{
    if (form.style.visibility !=='visible') {
     form.style.visibility='visible';
     btn.textContent='×';
    } else{
     form.style.visibility='hidden';
     btn.textContent='+';
    }
 })

add.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", '../php/add_book.php', true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
              let data = xhr.response;
              if(data === "success"){
                location.href="signup.php";
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
destroy.onclick = ()=>{
  let xhr = new XMLHttpRequest();
  xhr.open("POST", '../php/add_book.php', true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
            let data = xhr.response;
            if(data === "success"){
              location.href="signup.php";
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