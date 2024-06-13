// FILTRAGE
function All(){
    display();
  }
  function filtrer(input) {
  let searchTerm = input;
  let xhr = new XMLHttpRequest();
  xhr.open("POST", '../php/filtrage.php', true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
            let data = xhr.response;
            
            errorText.innerHTML = data;
            
        }
    }
  }
xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhr.send("search=" + searchTerm);


      }