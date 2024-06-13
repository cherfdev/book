<?php 
require '../php/config.php';

$sqli = mysqli_query($connect,"SELECT * FROM book LIMIT 8");
$row1 = mysqli_fetch_assoc($sqli);

$sess = $_SESSION['user_id'];

$sqlite = mysqli_query($connect,"SELECT * FROM users WHERE user_id='$sess'");
$row2 = mysqli_fetch_assoc($sqlite);
$sqlin = mysqli_query($connect,"SELECT * FROM book LIMIT 5");

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
     <link rel="stylesheet" href="assets/css/basket.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
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
      top: 3px;
      transition: all .3s ease-in-out;
    box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;

    }
    .active_user img{

width: 100%;
height: 100%;
border-radius: 50%;
z-index: 1;
}
 /* Header carousel */

  
 .body {
    position: relative;
    height: 100%;
  }

  .body {
    background: #eee;
    font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
    font-size: 14px;
    color: #000;
    margin: 0;
    padding-bottom: 25px;
  }

  .swiper {
    width: 100%;
    padding-top: 50px;
    padding-bottom: 50px;
  }

  .swiper-slide {
    background-position: center;
    background-size: cover;
    width: 300px;
    height: 300px;
  }

  .swiper-slide img {
    display: block;
    width: 100%;
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
                      <li><a href="index.php" class="active">Accueil</a></li>
                      <li><a href="catalogue.php">Parcourir</a></li>
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
   <!-- THE BASKET -->
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

  <!-- Carousel -->
<div class="body">
        <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <?php while ($row3=mysqli_fetch_assoc($sqlin)) {
        echo '<div class="swiper-slide"><img src="../book_img/'.$row3['img'].'" /></div>';
      }
      ?>
    </div>
    <div class="swiper-pagination"></div>
  </div>
</div>
    <!-- fin carousel -->

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
      

      <h1 class="text" style="margin-top: 45px;margin-bottom: 20px;">Nos nouveautés</h1>
         
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
  <a href="catalogue.php" class="col-lg-3 col-md-8">Voir Plus</a>
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
   <script src="assets/js/basket.js"></script>
   <script src="assets/js/search.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
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
    <script>
    var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      autoplay: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: ".swiper-pagination",
      },
    });
  </script>
</html>