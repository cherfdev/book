<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un compte</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<style>
    /* #ffee80 */
    body{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .container{
        width: 400px;
        box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
        padding-bottom: 15px;
        border-radius: 15px;
    }
    :is(.container,form){
        display: flex;
        flex-direction: column;
        text-align: center;
    }
    .container form{
        align-items: center;
        justify-content: center;
         gap: 25px;
    }
    .container form :is(button,input){
        width: 70%;
    }
    .container form input{
        box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
        padding: 10px;
        border-radius: 8px;
        border: 1px solid #ccc;
        outline: none;
    }
    .container form button{
        padding: 12px;
        border-radius: 8px;
        border: none;
        color: #fff;
        background: #1e1e1e;
        cursor: pointer;
        transition: all .3s ease-in-out;
        box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
    }
    .container form button:hover{
        color: #fff;
        background: #f35525;
    }
    .errorText{
        padding: 10px;
        background: #ccc;
        display: none;
    }
    label{
        position: relative;
        cursor: pointer;
        font-size: 30px;
        font-weight: bold;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 35px;
        width: 35px;
        padding: 5px;
        border-radius: 50%;
        background: #000;
        color: #ccc
    }
</style>
<body>
    <div class="container">
        <h2>Créer un compte</h2>
        <div class="errorText">logan</div>
        <form action="" method="post">
            <input type="text" placeholder="Votre nom" name="name">
            <input type="text" placeholder="Votre prénom" name="prenom">
            <input type="email" placeholder="Votre email" name="email">
            <input type="password" placeholder="Mot de passe" name="pswd">
            <input type="file" name="photo" style="display: none;" id="photo">
            <label for="photo"><i  class="bx bx-image-add"></i></label>
            <button type="submit">Connexion</button>
            <p>Vous n'avez pas de compte ? <a href="signup.html">Créer-un</a></p>
        </form>
    </div>

    <script src="js/signup.js"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>
</html>