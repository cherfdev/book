let search_btn = document.querySelector('.search_btn');
let errorText = document.querySelector('.bookdom'); 
let form1 = document.querySelector('.form1'); 
let content = document.querySelector('.basket_content');


function display(){
  let xhr = new XMLHttpRequest();
    xhr.open("POST", '../php/display.php', true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
              let data = xhr.response;
              
              errorText.innerHTML = data;
              
          }
      }
    }
    xhr.send();
}
display();



search_btn.addEventListener("keyup",()=>{
    let searchTerm = "asp";
    let xhr = new XMLHttpRequest();
    xhr.open("POST", '../php/search.php', true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
              let data = xhr.response;
              
              errorText.innerHTML = data;
              
          }
      }
    }
    let form = new FormData(form1);
    xhr.send(form);
    
  // xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  // xhr.send("searchTerm=" + searchTerm);
})



function panier() {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", '../php/display_basket.php', true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
            let data = xhr.response;
            content.innerHTML = data;
            
        }
    }
  }
  xhr.send();
}
panier();



function myfunction(input) {
  let bookdom = input;
  let xhr = new XMLHttpRequest();
  xhr.open("POST", '../php/panier.php', true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
          panier();
          if (basket_field.classList.contains('show')) {
            basket_field.classList.remove('show');
        }else{
            basket_field.classList.add('show');
    
        }
            
        }
    }
  }
xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhr.send("bookdom=" + bookdom);
}