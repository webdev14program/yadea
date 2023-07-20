
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <title>Yadea PIK</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?= base_url()?>assets/css/style.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="icon" href="<?= base_url()?>assets/image/yadea-icon.png" type="image/png">
  <!--  animejs -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js" integrity="sha512-z4OUqw38qNLpn1libAN9BsoDx6nbNFio5lA6CuTp9NlK83b89hgyCVq+N5FdBJptINztxn1Z3SaKSKUS5UP60Q==" crossorigin="anonymous" referrerpolicy="no-referrer">
  </script>
  <!--  animejs -->
  <!--  owl css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
  <!--  owl css -->

  <!--  jquery -->
  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
  <!--  jquery -->

</head>

<body>
  <nav class="nav">
    <div class="container flex1">
      <div class="logo">
        <img src="<?= base_url()?>assets/image/logo.png" alt="">
      </div>
      <div class="menu">
        <div class="main_list" id="mainListDiv">

        </div>
      </div>
      <div class="media_button">
        <i class="fas fa-bars" id="mediaButton"></i>
      </div>
      </div>
    </div>
  </nav>
  <script type="text/javascript">
    var mainListDiv = document.getElementById("mainListDiv");
    mediaButton = document.getElementById('mediaButton');

    mediaButton.onclick = function() {
      mainListDiv.classList.toggle('show_list');
      mediaButton.classList.toggle('active');
    }
  </script>

  <section class="home">
    <div class="content flex">
      <div class="left">
        <div class="time_box flex">
          <div class="time">
            <h1>Welcome Yadea Pik</h1>
            <span>enjoy your life</span>
          </div>
          <div class="time">
            <h1></h1>
            <span></span>
          </div>
          <div class="time">
            <h1></h1>
            <span></span>
          </div>
          <div class="time">
            <h1></h1>
            <span></span>
          </div>
        </div>

        <h2>Diskon promo spesial</h2>
        <p> Diskon akan berakhir akhir bulan juli 2023</p>

        <div class="button flex">
         <a href="https://api.whatsapp.com/send/?phone=6289655835767&text&type=phone_number&app_absent=0" target="_blank"><button class="btn1">Learn More</button></a>
         <a href="https://api.whatsapp.com/send/?phone=6289655835767&text&type=phone_number&app_absent=0" target="_blank"><button class="btn2">Buy Now </button></a>
        </div>
      </div>

      <div class="right">
        <div class="ani_image">
          <img src="<?= base_url()?>assets/image/e8s-bg.png" alt="">
        </div>
      </div>
    </div>
  </section>