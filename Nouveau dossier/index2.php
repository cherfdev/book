<?php 
session_start();
require '../php/config.php';

$sqli = mysqli_query($connect,"SELECT * FROM book LIMIT 8");
$row1 = mysqli_fetch_assoc($sqli);


?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>BookDom</title>
    <link rel="shortcut icon" href="../php/bookdom.jpg" type="image/x-icon">


    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/templatemo-villa-agency.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/main.css">

<!--

TemplateMo 591 villa agency

https://templatemo.com/tm-591-villa-agency

-->
  </head>

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
                      <li><a href="index.php" class="active">Accueil</a></li>
                      <li><a href="catalogue.php">Parcourir</a></li>
                      <li><a href="contact.php">Nous contacter</a></li>
                      <li><a href="../page_login/signin.php"><i class="fa fa-user"></i> Se connecter</a></li>
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

  
  <div class="page-heading header-text" >
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <span class="breadcrumb"><a href="#">Book</a> Dom</span>

          <h3>Vos livres préférés à porter de main</h3>
        </div>
      </div>
    </div>
  </div>

  <div class="section best-deal" data-aos="fade-up" data-aos-duration="2000">
    <div class="container disp">
        <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6">
                      <img src="../php/bookdom.jpg" alt="">
                    </div>
                    <div class="col-lg-6 align-self-center">
                      <h1>Ouvrez les portes d'un univers où les mots prennent vie et les histoires vous transportent dans des contrées lointaines et mystérieuses.</h1>
                      </div>
                </div>
          </div>
      </div>
  </div>



  <div class="section properties">
    <div class="container">
      

      <h1 class="text">Nos nouveautés</h1>
         
    </div>
  </div>

  
  <div class="containe">
    


<?php while ($row = mysqli_fetch_assoc($sqli)) { echo'<div class="image col-lg-2 col-md-6" data-aos="flip-up" data-aos-duration="2000"><a href="detail.php?id_book='.$row['book_id'].'"><img src="../book_img/'.$row['img'].'" alt=""></a><h3>'.$row['title'].'</h3><div class="ali"><p>'.$row['autor'].'</p><span></span></div></div>';} ?>
    
</div>

<div class="next col-12">
  <h1>En vedette</h1>
  <div class="news col-10"  data-aos="fade-right" data-aos-duration="2000">
    <div class="all">
      <h2><?php echo htmlspecialchars($row1['title']);?></h2>
      <p><?php echo htmlspecialchars($row1['description']);?></p>
      <a href="detail.php?id_book=<?php echo htmlspecialchars($row1['book_id']);?>"></a>
    </div>
    <img src="../book_img/<?php echo htmlspecialchars($row1['img']);?>" alt="">
  <a class="fa fa-arrow-right" href="detail.php?id_book=<?php echo htmlspecialchars($row1['book_id']);?>"></a>

  </div>

</div>

<div class="class">
  <a href="" class="col-lg-3 col-md-8">Voir Plus</a>
</div>
       
  <footer>
    <div class="contain">
      <div class="col-lg-12">
        <p>Copyright © 2024 BookDom Co., Ltd. Tous droits réservés. 
        
        Design: <a href="">Mariano & Shérif</a></p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap & components JavaScript -->
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/script.js"></script>

  </body>
</html>