<?php 
require '../php/config.php';
$sess = $_SESSION['user_id'];

$sqlite = mysqli_query($connect,"SELECT * FROM users WHERE user_id='$sess'");
$row2 = mysqli_fetch_assoc($sqlite);
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Catalogue</title>
    <link rel="shortcut icon" href="../php/bookdom.jpg" type="image/x-icon">


    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/basket.css">
    <link rel="stylesheet" href="assets/css/cata.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/templatemo-villa-agency.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/main.css">

  </head>
  <style>
    .header-sticky{
      position: sticky;
      top: 0;
    }
    .active_user img{
    width: 100%;
    height: 100%;
    border-radius: 50%;
    z-index: 1;
}

.search input{
    border: none;
    background: #fff;
    color: hsl(0, 0, 10%);
    border-radius: 15px;
    outline: none;
    padding: 10px;
    box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
}
  </style>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->


  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.php" class="logo">
                        <h1>Bookdom</h1>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="index.php" >Accueil</a></li>
                      <li><a href="catalogue.php" class="active">Parcourir</a></li>
                      <li><a href="contact.php">Nous contacter</a></li>
                      <li><a href="../page_login/signin.php"><i class="active_user"><img src="../user_img/<?php echo $row2['img']; ?>" alt=""></i> <?php echo $row2['lname']; ?></a></li>
                  </ul>    
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

 
<!-- THE BASKET // Panier -->
<button class="basket bx bx-basket"><span class="span_basket">20</span></button>

<div class="basket_field">
            <div class="panier bx bx-basket">Panier</div>
            <div class="basket_content">
               
            </div>
            <div class="payement">
                <button class="payer">Procéder au payement</button>
                <button class="ok_button">ok</button>
            </div>
            <div class="pay_total">
               Total = 15800fr
            </div>
</div>


<!-- FIN DU PANIER -->


<!-- BOUTON RECHERCHER U -->


<form action="" method="post" class="form1">
<div class="search">
  <input type="text" class="search_btn col-6" name="search" placeholder="Rechercher par nom ou auteur"><i class="fa fa-search"></i>
</div>

</form>

<!-- FIN BOUTON RECHERCHER -->


<!-- FILTRAGE DES RESULTATS -->
  
<div class="filtrage">
        <button class="filtrer" onclick="All('Tous')">Tous</button>
        <button class="filtrer" onclick="filtrer('Roman')">Roman</button>
        <button class="filtrer" onclick="filtrer('Thriller')">Thriller</button>
        <button class="filtrer" onclick="filtrer('Policier')">Policier</button>
        <button class="filtrer" onclick="filtrer('Histoire')">Histoire</button>
        <button class="filtrer" onclick="filtrer('SF')">SF</button>
        <button class="filtrer" onclick="filtrer('Fantasy')">Fantasy</button>
</div>
<!-- FIN DU FILTRAGE -->

<!-- AFFICHAGE DE L'ELEMENT RECHERCHE -->

    <div class="errorText">
</div>
<!-- FIN DE LA RECHERCHE -->


    <!-- AFFICHAGE DES LIVRES DE LA BIBLIOTHEQUE -->
<div class="container bookdom">


</div>


<!-- FIN DE L'AFFICHAGE-->
 
     
  <footer>
    <div class="contain">
      <div class="col-lg-12">
        <p>Copyright © 2024 BookDom Co., Ltd. Tous droits réservés. 
        
        Design: <a href="">Mariano & Shérif</a></p>
      </div>
    </div>
    
  </footer>
  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
   <script src="assets/js/basket.js"></script>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/search.js"></script>
  <script src="assets/js/cata.js"></script>
  <script src="assets/js/script.js"></script>

  
  <!-- <script type="text/javascript">
   
</script> -->
  </body>
  
</html>