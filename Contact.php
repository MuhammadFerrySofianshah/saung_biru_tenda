<?php
    session_start() ;//untuk memunculkan alertnya

    if(isset($_SESSION['submit'])) :
    echo "<script type='text/Javascript'>" ;
    echo "alert('PESAN ANDA TELAH TERKIRIM')";
    echo "</script>" ;

    session_destroy();//Jika di refres tidak akan muncul alert

    endif ;//penutup dari if
?>



<!DOCTYPE php>
<php lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="img/sbt.ico" />
    <link rel="preconnect" href="https://fonts.googleapis.com" /> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <!-- LINK FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap"rel="stylesheet"/>
    <!-- LINK ICON -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- LINK BOOTSTRAPS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Saung Biru Tenda</title>
  </head>
<body>
  <div class="bgimage">
    <!-- BAGIAN SIDE BAR -->
    <input type="checkbox" id="check">
    <div class="sidebar">
      <ul>
        <li><a href="Home.php">Home</a></li>
        <li><a href="Gallery.php">Gallery </a></li>
        <li><a href="Contact.php">Contact</a></li>
      </ul>
    </div>
    
      <!-- BAGIAN NAV BAR DESTOP -->
      <nav>
        <img src="img/sbt.png" />
        <div class="sbt">Saung Biru Tenda</div>
          <ul>
            <li><a href="Contact.php" class="in">Contact</a></li>
            <li><a href="Gallery.php" class="out">Gallery </a></li>
            <li><a href="Home.php" class="out">Home</a></li>
          </ul>
              <label for="check" class="mobile-menu">
                <i class="fa fa-bars fa-2x"></i>
              </label>
    </nav>




<!-- BAGIAN CONTACT-BOOTSTRAP -->
    
    <section id="contact">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Butuh Sewa Tenda ..?</h1>
                        <h3>Silahkan kontak Kami <br>
                            Kami Siap Membantu
                        </h3>
                        <div class="kontak">
                            <!-- Kontak -->
                            <h6>Kontak</h6>
                            <div class="mb-3 d-flex">
                                <i class="icon fa fa-map-marker"></i>
                                <a href="#">Pondok Ungu Permai Sektor V 
                                    Blok E 15 No.28
                                    Kelurahan Bahagia
                                    Kecamatan Babelan
                                    Kabupaten Bekasi</a>
                            </div>

                            <div class="mb-3">
                                <i class="icon fa fa-phone"></i>
                                <a href="#">0815-1355-4437</a>
                            </div>

                            <div class="mb-3">
                                <i class="icon fa fa-envelope"></i>
                                <a href="mailto:fsofian27@gmail.com"> fsofian27@gmail.com</a>
                            </div>
                        </div>
                            <!-- Social Media -->
                            <h6 >Social Media</h6>
                            <a href="https://web.facebook.com/profile.php?id=100070646345424" class="me-3" target="_blank"> 
                                <i class="icon fa fa-facebook"></i> 
                            </a>

                            <a href="https://www.instagram.com/saung_birutenda/?hl=id"  class="me-3" target="_blank"> 
                                <i class="icon fa fa-instagram"></i> 
                            </a>

                            <a href="https://bit.ly/3eb2Hyt" class="me-3" target="_blank"> 
                                <i class="icon fa fa-whatsapp"></i> 
                            </a>
                        
                    </div>

                    <!-- Card Email & Komentar -->
                    <div class="col-md-6">
                        <div class="card-contact ">
                            <form action="proses.php" method="post">
                                <h2>Kirim Pertanyaaan</h2>
                                <div class="form-floating mb-3 d-flex">
                                    <input type="email" name="email" class="form-control"  id="floatingInput">
                                    <label for="floatingInput" class="d-flex align-items-center">Masukkan Email Anda </label>
                                </div>

                                <div class="form-floating mb-3 d-flex">
                                    <input type="text" name="komentar" class="form-control"  placeholder="Leave a comment here" id="floatingTextarea">
                                    <label for="floatingTextarea2" class="d-flex align-items-center">Kirim Komentar atau Pertanyaan*...</label>
                                </div>
                                    <button type="submit" name="submit" class="button-contact">Kirim</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

</div>

  <!-- JAVASCRIPT -->
  <script src="js/main.js"></script>

</body>

<!-- BAGIAN CSS -->
<style>
@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Quicksand:wght@300&display=swap');

/* UNTUK SEMUA */
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Quicksand', sans-serif;
    color: black;
}

/* BAGIAN ICON-SIDE */
.icon-side{
    position: fixed;
    padding: 10px 5px 5px 5px;
    bottom: 0;
    right: 0;
    background-color: rgba(86, 95, 104, .2);
    border-radius: 20px 0 0 0;
}

.icon-side img{
    margin: 10px;
    height: 30px;
    width: auto;
    z-index: 9999;
}
.icon-side img:hover{
    transform: scale(1.2);
}

/* BAGIAN BACKGROUND */
body {
    background-color: #e4e4e4;
}
.bgimage {
    background-image: url(img/bg-contact.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
}
/* BAGIAN SIDE BAR */
#check {
    display: none;
}
.sidebar {
    margin-top: 70px;
    position: fixed;
    width: 100%;
    left: -100%;
    background-color: rgba(86, 95, 104, 0.534);
    z-index: 9999;
}
.sidebar a {
    display: block;
}
.sidebar ul li {
    padding: 20px;
    border-bottom: 1px solid #686868;
}
.sidebar ul li:hover {
    background-color: #218fd3;
    transition: .3s;
    transition-property: background-color;
}
#check:checked ~ .sidebar {
    left: 0;
}
.mobile-menu {
    float: right;
    display: none;
}
.fa {
    color: #FFFFFF;
}
.fa:hover {
    cursor: pointer;
    transform: scale(1.2);
    display: inline-block;
}

/* BAGIAN NAV BAR */
nav {
    width: 100%;
    line-height: 60px;
    position: fixed;
    z-index: 10000;
    padding: 5px 50px;
}
nav .in {
    font-weight: bolder;
    color: #FFFFFF;
}
nav .out {
    text-decoration: none; 
    font-size: 18px;
    color: white;
}
.sticky {
    transition: .6s;
    padding: 5px 50px;
    background-color: rgba(86, 95, 104, 0.600);
    color: black;
}
nav img {
    cursor: context-menu;
    width: 100px;
    height: auto;
    float: left;
    margin-top: 5px;
    margin-right: 5px;
}
nav img:hover {
    transform: scale(1.1);
}

nav .sbt {
    font-weight: bold;
    font-size: 30px;
    color: #FFFFFF;
    float: left;
    text-transform: uppercase;
}
nav .sbt:hover {
    cursor: context-menu;
    transition: .3s;
    color: #218fd3;
}
nav ul li  {
    list-style: none;
    float: right;
}
nav ul li a {
    text-align: center;
    padding: 30px;
}
nav ul li a::before {
    content: '';
    margin-bottom: 20px;
    position: absolute;
    bottom: -2px;
    width: 65px;
    height: 2px;
    background-color: #D9D9D9;
    transform: scaleX(0);
    transition: transform .5s ease-in-out;
    transform-origin: right;
}
nav ul li a:hover::before {
    transform: scaleX(1);
    transform-origin: left;

}
a {
    text-decoration: none; 
    font-size: 18px;
    color: white;
}

/* CONTAINER SEMUA BAGIAN */
.container2 {
    width: 90%;
    margin: auto;
}

/* BAGIAN SECTION */
section {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    padding: 150px 0;
}
section::before {
    content: '';
    position: absolute;
    left: 0;
    height: 100%;
    width: 50%;
}

/* BAGIAN CONTAINER */
.container {
    width: 90%;
    position: relative;
    min-width: 1100px;
    min-height: 550px;
    display: flex;
}

/* BAGIAN CONTACT */
#contact .overlay {
    background: rgba(0,0,0,0.5);
}
#contact h1 {
    font-weight: normal;
    font-size: 40px;
    color: #FFFFFF;
    margin-bottom: 0;
}
#contact h3 {
    font-weight: normal;
    font-size: 35px;
    color: #FFFFFF;
}
#contact h6 {
    font-weight: 600;
    font-size: 18px;
    line-height: 27px;
    color: #FFFFFF;
    margin: 19px 0 14px 0;
}
#contact .icon {
    font-size: 30px;
}
.kontak a {
    font-style: normal;
    font-weight: normal;
    font-size: 16px;
    line-height: 18px;
    color: #FFFFFF;
    text-decoration: none;
    margin-left: 18px;
    display: inline-block;
} 
.card-contact {
    width: 100%;
    height: 450px;
    background-color: rgba(0,0,0,0.5);
    border-radius: 5px;
    padding: 52px 48px;
}
.card-contact h2{
    font-weight: 600;
    font-size: 40px;
    line-height: 60px;
    color: #00985b;
    text-align: center;
    margin-bottom: 21px;
}
.form-control {
    background-color: rgba(0,0,0,0.5);
    height: 75px !important;
    border-radius: 0;
}
.form-floating label{
    font-weight: normal;
    font-size: 15px;
    color: #717171;
}
.button-contact {
    width: 50%;
    height: 50px;
    background: #00985B;
    border: none;
    font-style: normal;
    font-weight: 600;
    font-size: 18px;
    color: #FFFFFF;
    border-radius: 2px ;
    margin-top: 20px;
}
.button-contact:hover {
    background: #00985be8;
}

/* MENGHILANGKAN BUTTON ATAS BAWAH */
input[type=number]::-webkit-inner-spin-button {
    -webkit-appearance: none;
  }

/* FOOTER-RIGHT */
.footer-distributed .footer-right {
    width: 30%;
}
.footer-distributed .footer-company-about{
    line-height: 20px;
    color: #92999f;
    font-weight: lighter;
    font-size: 16px;
}
.footer-distributed .footer-company-about span {
    display: block;
    color: #ffff;
    font-size: 18px;
    font-weight: normal;
    margin-bottom: 15px;
}
.footer-distributed .footer-icons {
    margin-top: 25px;
}
.footer-distributed .footer-icons i{
    display: inline-block;
    cursor: pointer;
    background-color: #33383b;
    border-radius: 8px;
    font-size: 28px;
    color: #ffff;
    text-align: center;
    margin: 10px;
    padding: 8px;
}
.footer-distributed .footer-icons i:hover{
    transform: scale(1.2);
}
@media (max-width: 1200px) {
    .container {
        min-width: auto;
        margin: 20px;
        box-shadow: 0 20px 50px rgba(0,0,0,0.2) ;
    }
    .container .contactInfo {
        top: 0;
        height: 550px;
        position: relative;
        box-shadow: none;
    }
    .container .contactForm {
        position: relative;
        width: calc(100% - 350px);
        padding-left: 0;
        margin-left: 0;
        padding: 40px;
        height: 550px;
        box-shadow: none;
    }
}

@media (max-width: 991px) {
    .container {
        display: flex;
        flex-direction: column-reverse;
    }
    .container .contactForm {
        width: 100%;
        height: auto;
    }
    .container .contactInfo {
        width: 100%;
        height: auto;
    }
}

@media (max-width: 910px){
    /* BAGIAN GARIS 3 */
    .mobile-menu {
        display: block;
        margin-top: 5px;
        height: 0;
    }
    /* BAGIAN NAVIGASI MENU */
    nav ul {
        display: none;
    }
}
@media (max-width: 600px) {
    .container .contactForm{
        padding: 25px;
    }
    .container .contactForm{
        padding: 25px;
        flex-direction: column;
        align-items: flex-start;
    }
    .container .contactForm .formBox .inputBox.w50 {
        width: 100%;
    }

}

@media (max-width: 550px){
    /* BAGIAN NAVIGATION */
    nav {
        width: 100%;
        line-height: 60px;
        position: fixed;
        z-index: 1;
        transition: .6s;
        padding: 5px 20px;
    }
    nav .sbt {
        font-size: 18px;
    }
    nav.sticky {
        padding: 5px 20px;
    }
    nav img {
        cursor: context-menu;
        width: 80px;
        height: auto;
        float: left;
        margin-top: 5px;
        margin-right: 5px;
    }
}
    /* BAGIAN FOOTER */
@media (max-width:880px){
    .footer-distributed .footer-left ,.footer-distributed .footer-center ,.footer-distributed .footer-right {
        display: block;
        width: 100%;
    }
    .footer-distributed .footer-center {
        display: block;
        margin: 20px 0 20px -70px;
        width: 140%;
    }
}
@media (max-height:800px){
    footer {
        position: static;
    }
}
</style>
</php>