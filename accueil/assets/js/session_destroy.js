let session = document.querySelector('.session');

session.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", '../php/session_destroy.php', true);
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