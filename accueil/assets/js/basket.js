 /* pallier */
 let basket = document.querySelector('.basket');
 const ok_button =document.querySelector('.ok_button');
 let basket_field = document.querySelector('.basket_field');
 basket.onclick = ()=>{
     if (basket_field.classList.contains('show')) {
         basket_field.classList.remove('show');
     }else{
         basket_field.classList.add('show');

     }
 }
 // FIN Panier de commande

 ok_button.onclick = ()=>{
    if (basket_field.classList.contains('show')) {
        basket_field.classList.remove('show');
    }else{
        basket_field.classList.add('show');

    }
}