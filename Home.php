<!DOCTYPE php>
<php lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="img/sbt.ico" />
    <link rel="preconnect" href="https://fonts.googleapis.com" /> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Saung Biru Tenda</title>
  </head>

  <body>
    <div class="bgimage">
    <!-- BAGIAN SIDE BAR MOBBILE -->
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
          <h1>Saung Biru Tenda</h1>
            <ul>
              <li><a href="Contact.php">Contact</a></li>
              <li><a href="Gallery.php">Gallery </a></li>
              <li><a href="Home.php" class="in">Home</a></li>
            </ul>
                <label for="check" class="mobile-menu">
                  <i class="fa fa-bars fa-2x"></i>
                </label>
      </nav>

      <!-- BAGIAN NAMA TENGAH -->
      <div class="banner">
        <div class="container">
          <h2>Sewa Tenda <br />Alat Pesta</h2>
          <p>
            Sedia Sewa Tenda Dekorasi, Alat Pesta, Kursi,Untuk acara pernikahan,
            Khitanan, Musik Orgen Tunggal,Photo Video Shooting, Catering, Rias
            Pengantin, Pelaminan, Cetak undangan, Ulang Tahun dan masih banyak
            lagi.
          </p>
          <a href="Contact.php">
            <button class="button">Hubungi Kami</button>
          </a>
        </div>
      </div>

    </div>

    <!-- BAGIAN GRID -->
      <div class="container-grid">
        <main class="grid-teks-foto">
          <article>
            <a href="GalleryId.php/#tenda"><img src="img/tenda/tenda1.jpg"></a>
            <div class="konten">
              <h2>tenda</h2>
              <div class="border"></div>
              <P>Untuk acara Pernikahan ,Khitanan,Syukuran,dan lainnya.</P>
            </div>
          </article>

          <article>
            <a href="GalleryId.php/#alatpesta"><img src="img/alatpesta/alatpesta1.jpeg"></a>
            <div class="konten">
              <h2>alat pesta</h2>
              <div class="border"></div>
              <P>Menyewakan Alat Pesta Piring,Sendok/Garpu, <br> Bloower,dan lainnya</P>
            </div>
          </article>

          <article>
            <a href="GalleryId.php/#kursi"><img src="img/kursi/kursi-plastik.jpeg"></a>
            <div class="konten">
              <h2>meja & kursi</h2>
              <div class="border"></div>
              <P>Menyewakan Kursi serta Sarung (satu set) untuk acara Anda.</P>
            </div>
          </article>

          <article>
            <a href="GalleryId.php/#livemusik"><img src="img/livemusik/livemusik.jpg"></a>
            <div class="konten">
              <h2>live musik</h2>
              <div class="border"></div>
              <P>Menyewakan live Musik untuk penghibur di Acara Anda.</P>
            </div>
          </article>

          <article>
            <a href="GalleryId.php/#photovideo"><img src="img/photovideo/photovideo.jpg"></a>
            <div class="konten">
              <h2>photo video</h2>
              <div class="border"></div>
              <P>Photo Video Shooting dengan fotografer yang berpengalamamn.</P>
            </div>
          </article>

          <article>
            <a href="GalleryId.php/#cetering"><img src="img/catering/catering1.jpg"></a>
            <div class="konten">
              <h2>catering</h2>
              <div class="border"></div>
              <P>Meyediakan Catering dengan masakan yang Modern dan Tradisional.</P>
            </div>
          </article>

          <article>
            <a href="GalleryId.php/#riaspengantin"><img src="img/riasPengantin/riasPengantin.jpg"></a>
            <div class="konten">
              <h2>rias pengantin</h2>
              <div class="border"></div>
              <P>Menyediakan rias pengantin serta menyewakan pakaian pengantinnya.</P>
            </div>
          </article>

          <article>
            <a href="GalleryId.php/#pelaminan"><img src="img/pelaminan/pelaminan.png"></a>
            <div class="konten">
              <h2>pelaminan</h2>
              <div class="border"></div>
              <P>Menyewakan pelaminan dengan dekorasi yang menarik.</P>
            </div>
          </article>

        </main>
      </div>

      <!-- BAGIAN OPINI -->
    <div class="opini">
      <div class="container">
        <p>Mau sewa tapi alat pesta yang Anda cari tidak ada di atas ? <br>
          Anda bisa Pesan dengan paket yang sesuai dengan budget Anda
          ataupun bisa Pesan custom/sesuai kebutuhan Anda.<br>
          Bisa langsung hubungi Kami.</p>
          <a href="https://bit.ly/3eb2Hyt" target="_blank">
            <button class="hubungisekarang">HUBUNGI SEKARANG</button>
          </a>
          <hr />
      </div>
    </div>

    <!-- BAGIAN PAKET -->
    <div class="container-paket">
      <div class="grid-paket">

        <article>
            <div class="image"><span><img src="img/Paket 15 jt.png"></span></div>
        </article>
        <article>
            <div class="image"><span><img src="img/Paket 20 jt.png"></span></div>
        </article><article>
            <div class="image"><span><img src="img/Paket 25 jt.png"></span></div>
        </article>
        

      </div>
    </div>

    <!-- BAGIAN PREVIEW -->
    <div class="preview-box">
    <div class="details">
      <span class="title">Image <p class="current-img"></p> of 
      <p class="total-img"></p></span>
      <span class="icon fa fa-times" accesskey="h"></span>
    </div>
    <div class="image-box">
      <div class="slide prev"><i class="fa fa-angle-left"></i></div>
      <div class="slide next"><i class="fa fa-angle-right"></i></div>
      <img src="" alt="">
    </div>
  </div>
  <div class="shadow"></div>

    <!-- BAGIAN TENTANG KAMI -->
    <div class="tentangkami">
      <div class="container">
        
        <div class="col-2">
          <img src="img/sbt.png" >
          <h2>Saung Biru Tenda</h2>
        </div>

        <div class="col-2">
          <p>Saung Biru Tenda adalah Usaha yang bergerak pada bidang jasa Wedding Organizer,Penyewaan Alat Pesta,Khitanan,Ulang Tahun dan berbagai kebutuhan perlengkapan Acara. Kami siap memenuhi kebutuhan untuk acara Anda,dengan setiap pemasangan dilakukan oleh kru kami yang sudah berpengalaman.</p>
        </div>

      </div>
    </div>
    <!-- BAGIAN LOKASI -->
    <div class="maps-teks">
      <div class="container">

        <div class="mate">
          <h5>lokasi</h5>
          <p>
            Pondok Ungu Permai Sektor 5 Blok E 15/28 <br />Kelurahan Bahagia
            <br />Kecamatan Babelan <br />Kabupaten Bekasi
          </p>
        </div>

        <div class="mate">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.9177592160979!2d107. 01119558741824!3d-6.173026332358617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13. 1!3m3!1m2!1s0x2e6989635edcd85f%3A0xa1563736083e8ea6!2sSaung%20Biru%20Tenda!5e0!3m2!1sid!2sid!4v16730 16556821!5m2!1sid!2sid"
            width="300"
            height="280"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>

      </div>
    </div>
    
    <!-- BAGIAN FOOTER -->
    <footer class="footer-distributed">

      <div class="footer-left">
          <img src="img/sbt.png" width="150" height="auto">

          <div class="footer-links">
              <a href="Home.php">Home</a>
              |
              <a href="Gallery.php">Gallery</a>
              |
              <a href="Contact.php">Contact</a>

              <p class="footer-company-name">Copyright &copy; 2023 <strong>
                  SAUNG BIRU TENDA</strong> All rights reserved.</p>
          </div>
      </div>

      <div class="footer-center">

          <div class="icon">
                  <i class="fa fa-map-marker fa-2x"></i>
                  <p>Pondok Ungu Permai Sektor V <br>
                      Blok E 15 No.28<br>
                      Kelurahan Bahagia<br>
                      Kecamatan Babelan<br>
                      Kabupaten Bekasi<br>
                  </p>
              </a>
          </div>

          <div class="icon">
                  <i class="fa fa-phone fa-2x"></i>
                  <p>0815-1355-4437</p>
              </a>
          </div>

          <div class="icon">
              <a href="mailto:fsofian27@gmail.com">
                  <i class="fa fa-envelope fa-2x"></i>
                  <p class="email">fsofian27@gmail.com</p>
              </a>
          </div>
      </div>
          <div class="footer-right">
              <p class="footer-company-about">
                  <span>About The Company</span><strong>Saung Biru Tenda</strong> 
adalah Jasa Sewa Tenda berpengalaman untuk daerah Jabodetabek 
dan telah melayani 1000+ customer untuk daerah Jabodetabek.
              </p>

              <div class="footer-icons">
                  <a href="https://web.facebook.com/profile.php?id=100070646345424" target="_blank"> <i class="fa fa-facebook fa-2x"></i> </a>
                  <a href="https://bit.ly/3eb2Hyt" target="_blank"> <i class="fa fa-whatsapp fa-2x"></i> </a>
                  <a href="https://www.instagram.com/saung_birutenda/?hl=id"  target="_blank"> <i class="fa fa-instagram fa-2x"></i> </a>
              </div>
          </div>
          
      
  </footer>
    <!-- BAGIAN ICON-SIDE -->
  <div class="icon-side">
    <a href="https://bit.ly/3eb2Hyt" target="_blank">
      <div class="whatsapp">
        <img src="img/whatsapp-side.png" alt="whatsapp" title="whatsapp">
      </div>
    </a>
    <a href="https://www.instagram.com/saung_birutenda/?hl=id" target="_blank">
      <div class="instagram">
        <img src="img/instagram-side.png" alt="instagram" title="instagram">
      </div>
    </a>
    <a href="https://web.facebook.com/profile.php?id=100070646345424" target="_blank">
      <div class="facebook">
        <img src="img/facebook-side.png" alt="facebook" title="facebook">
      </div>
    </a>
  </div>
    <!-- JAVASCRIPT -->
    <script src="js/main.js"></script>
    <script src="js/script.js"></script>
  </body>


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
    background-image: url(img/bg-home.jpg);
    background-repeat: no-repeat ;
    background-size: cover;
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
    z-index: 1;
    padding: 5px 50px;
}
nav .in {
    font-weight: bolder;
    color: #FFFFFF;
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

nav h1 {
    font-size: 30px;
    color: #FFFFFF;
    float: left;
    text-transform: uppercase;
}
nav h1:hover {
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
    transition: transform .6s ease-in-out;
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
.container {
    width: 90%;
    margin: auto;
}

/* BAGIAN NAMA TENGAH */
.banner {
    text-align: left;
    padding: 170px 0 250px  0;
}
.banner h2 {
    color: #FFFFFF;
    font-family: 'Playfair Display', serif;
    font-size: 60px;
    text-shadow: 3px 3px 3px black;
}
.banner p {
    color: #FFFFFF;
    width: 70%;
    padding-top: 15px;
    padding-bottom: 30px;
    font-size: 20px;
    text-shadow: 3px 3px 3px black;
}
.banner button {
    color: #FFFFFF;
    font-weight: bold;
    background: none;
    cursor: pointer;
    font-size: 18px;
    box-shadow: 3px 3px 3px black;
    border: 2px solid;
    width: 220px;
    text-transform: uppercase;
    padding: 10px;
}
.banner button:hover {
    color: black;
    background: white;
    border: 2px solid white;
    transition: .5s;
    cursor: pointer;
}

/* BAGIAN IMAGE-TEKS*/
.grid-teks-foto {
    display: grid;
    justify-content: center;
    align-items: center;
    grid-template-columns: repeat(4,1fr);
    text-align: center;
    margin: 90px;
    grid-gap: 50px;
}
.grid-teks-foto img {
    width: 100%;
    object-fit: cover;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}
.grid-teks-foto h2 {
    text-transform: uppercase;
    font-size: 20px;
    margin: 10px ;
}
.grid-teks-foto .border {
    margin: 5px 50px 0 50px;
    border-bottom: 1px solid;
}
.grid-teks-foto p {
    margin: 10px;
}
.grid-teks-foto article {
    box-shadow: 0 0 10px 0 #686868;
    border-radius: 10px;
    background-color: #FFFFFF;
    width: 260px;
    height: 470px;
}

/* BAGIAN OPINI */
.opini {
    text-align: center;
    font-size: 20px;
}
.hubungisekarang {
    margin: 30px;
    font-size: 15px;
    padding: 10px;
    cursor: pointer;
    color: #FFFFFF;
    background-color: #5CCC00;
    border: #5CCC00;
    border-radius: 20px;
    width: 200px;
}
.hubungisekarang:hover {
    transition: .3s;
    background-color: #8CCC00;
}

/* BAGIAN PAKET */
.grid-paket {
    display: grid;
    grid-template-columns: repeat(3,9fr);
    grid-gap: 50px;
    align-items: center;
    text-align: center;
    margin: 75px;
}
.grid-paket article {
    box-shadow: 0 0 10px #686868;
    background-color: #ffffff;
    border-radius: 5px;
}
.grid-paket img {
    width: 100%;
    cursor: pointer;
    border-radius: 5px;
}

/* BAGIAN PREVIEW START */

.preview-box{
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%) scale(0.9);
  max-width: 1000px;
  width: 100%;
  z-index: 5;
  opacity: 0;
  pointer-events: none;
}
.preview-box.show{
  opacity: 1;
  pointer-events: auto;
  transform: translate(-50%, -50%) scale(1);
  transition: all 0.5s ease;
}
.preview-box .details{
  display: flex;
  align-items: center;
  padding: 12px 15px 12px 10px;
  justify-content: space-between;
}
.preview-box .details .title{
  color: #fff;
  display: flex;
  font-size: 18px;
  font-weight: 400;
}
.details .title p{
  color: #fff;
  margin: 0 5px;
}
.details .title p.current-img{
  font-weight: 500;
}
.details .icon{
  color: #fff;
  font-size: 20px;
  cursor: pointer;
}
.preview-box .image-box{
  display: flex;
  width: 100%;
  position: relative;
}
.image-box .slide{
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  font-size: 30px;
  cursor: pointer;
  height: 50px;
  width: 60px;
  line-height: 50px;
  text-align: center;
}
.slide.prev{
  left: 0px;
  border-radius: 10px 3px 3px 10px;
  background-color: rgba(0, 0, 0, .6);
  display: flex;
  align-items: center;
  justify-content: center;
  vertical-align: middle;
}
.slide.prev .fa-angle-left{
  color: #fff;
}
.slide.next{
  right: 0px;
  border-radius: 3px 10px 10px 3px;
  background-color: rgba(0, 0, 0, .6);
}
.slide.next .fa-angle-right{
  color: #fff;
}

.image-box img{
  margin: auto;
  height: 550px;
  /* width: auto; */
}
.shadow{
  position: fixed;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  z-index: 2;
  display: none;
  background: rgba(0, 0, 0, .8);
}

@media(max-width: 1000px){
  .preview-box{
  width: 100%;
}
  .image-box img{
    width: calc(100% / 2);
  }
}
@media(max-width: 600px){
  .image-box img{
    width: 100%;
  }
}

/* BAGIAN PREVIEW END */

/* TENTANG KAMI */
.tentangkami {
    /* atas,kanan,bawah,kiri */
    padding: 70px 0 150px 0 ;
    background-color: #D9D9D9;
}
.tentangkami img{
    cursor: pointer;
    width: 110px;
    height: auto;
}
.tentangkami h2 {
    font-weight: 400;
}
.tentangkami p {
    width: 70vw;
    text-indent: 30px;
    font-size: 18px;
}
.tentangkami .col-2 {
    width: 25%;
    float: left;
}

/* BAGIAN LOKASI */
.maps-teks {
    padding: 100px 0px 100px 0px;
    display: flex;
    text-transform: uppercase;
}
.mate iframe {
    width: 100%;
}
.mate {
    float: left;
    width: 50%;
}
.mate h5 {
    font-family: 'Playfair Display', serif;
    font-size: 30px;
}
.mate p {
    display: flex;
    text-align: left;
    font-size: 18px;
}

/* BAGIAN FOOTER */
footer {
    bottom: 0;
}
.footer-distributed strong{
    font-weight: normal;
    color: #ffce48;
}
.footer-distributed {
    background-color: #4f4d50;
    box-sizing: border-box;
    widows: 100%;
    text-align: left;
    font: bold 16px sans-serif;
    padding: 60px 50px 50px 50px;
    margin-top: 80px;
}
.footer-distributed .footer-left ,
.footer-distributed .footer-center ,
.footer-distributed .footer-right {
    display: inline-block;
    vertical-align: middle;
    vertical-align: top;
}
/* FOOTER-LEFT */
.footer-distributed .footer-left {
    width: 30%;
}
.footer-distributed .footer-links {
    color: #fff;
    margin: 20px 0 12px 0;
}
.footer-distributed .footer-links a {
    font-weight: normal;
    display: inline-block;
    line-height: 1.8;
    text-decoration: none;
    color: inherit;
}
.footer-distributed .footer-links a:hover {
    text-decoration: underline;
}
.footer-distributed .footer-company-name {
    color: #8f9296;
    font-size: 16px;
    font-weight: lighter;
}

/* FOOTER-CENTER */
.footer-distributed .footer-center {
    width: 35%;
}
.footer-distributed .footer-center .icon{
    font-weight: normal;
    margin-top: -15px;
}
.footer-distributed .footer-center i{
    background-color: #33383b;
    color: #ffff;
    font-size: 25px;
    width: 38px;
    height: 38px;
    border-radius: 50%;
    text-align: center;
    line-height: 42px;
    margin: 15px 15px 15px 70px; 
    vertical-align: middle;
}
.footer-distributed .footer-center i:hover{
    transform: scale(1.2);
}
.footer-distributed .footer-center i.fa-envelope{ 
    font-size: 17px;
    line-height: 37px;
    margin-top: 20px;
}
.footer-distributed .footer-center i.fa-map-marker{ 
    margin-bottom: 80px;
}
.footer-distributed .footer-center p{
    display: inline-block;
    vertical-align: middle; 
    color: #ffff;
}
.footer-distributed .footer-center p span{
    display: block;
    font-size: 15px;
    line-height: 2;
}
.footer-distributed .footer-center a .email{
    color: #ffce48;
}
.footer-distributed .footer-center a .email:hover{
    text-decoration: underline;
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

/* BAGIAN RESPONSIVE */
@media (max-width: 1400px){
/* BAGIAN TEKS-FOTO */
    .grid-teks-foto {
        grid-template-columns: repeat(4,1fr);
        grid-gap: 70px;
        }
    
}

@media (max-width: 1300px){
/* BAGIAN TEKS-FOTO */
    .grid-teks-foto {
        grid-template-columns: repeat(4,1fr);
        grid-gap: 40px;
    }
}

@media (max-width: 1200px){
/* BAGIAN TEKS-FOTO */
    .grid-teks-foto {
        grid-template-columns: repeat(3,1fr);
        grid-gap: 10px;
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
/* BAGIAN TEKS-FOTO */
    .grid-teks-foto {
        grid-template-columns: repeat(2,1fr);
        display: grid;
        justify-content: center;
        align-items: center;
    }
/* BAGIAN PAKET */
    .grid-paket {
        display: grid;
        justify-content: center;
        align-items: center;
        grid-template-columns: repeat(1 ,1fr);
    }
    .grid-paket p{
        font-size: 17px;
    }
/* BAGIAN TENTANG KAMI */
    .tentangkami {
        padding: 40px 0;
    }
    .tentangkami .col-2 {
        width: 100%;
        padding: 5px;
        float: none;
    }
    .tentangkami p {
        width: 100%;
    }
/* BAGIAN LOKASI */
    .maps-teks {
        padding: 40px 0;
    }
    .mate {
        padding: 10px;
        float: none;
    }
}
@media (min-width: 910px){
    .sidebar {
        display: none;
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
@media (max-width: 550px){ /* MOBILE */
/* BAGIAN NAVIGATION */
    nav {
        width: 100%;
        line-height: 60px;
        position: fixed;
        z-index: 1;
        transition: .6s;
        padding: 5px 20px;
    }
    nav h1 {
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
/* BAGIAN BANNER */
    .banner {
        padding: 100px 0 200px 0;
        text-align: center;
    }
    .banner h2 {
        color: #FFFFFF;
        font-family: 'Playfair Display', serif;
        font-size: 55px;
        text-shadow: 3px 3px 3px black;
        padding-bottom: 20px;
    }
    .banner p {
        width: 100%;
        color: #FFFFFF;
        text-shadow: 3px 3px 3px black;
    }
    .banner button {
        color: #FFFFFF;
        font-weight: bold;
        background: none;
        cursor: pointer;
        font-size: 18px;
        box-shadow: 3px 3px 3px black;
        border: 2px solid;
        width: 220px;
        text-transform: uppercase;
        padding: 10px;
    }
    /* BAGIAN TEKS-FOTO */
    .grid-teks-foto {
        display: grid;
        justify-content: center;
        align-items: center;
        grid-template-columns: repeat(1,1fr);
    }
    .grid-teks-foto article {
        box-shadow: 0 0 10px 0 #686868;
        border-radius: 10px;
        background-color: #FFFFFF;
        width: 300px;
        height: auto;
    }
    /* BAGIAN PAKET */
    .grid-paket {
        display: grid;
        justify-content: center;
        align-items: center;
        grid-template-columns: repeat(1,1fr);
        grid-gap: 30px;
        text-align: center;
    }
    .grid-paket article {
        box-shadow: 0 0 10px #686868;
        border-radius: 15px;
        background-color: #ffffff;
        width: 330px;
        align-items: center;
        justify-content: center;
    }
    .grid-paket p{
        font-size: 17px;
    }
    /* BAGIAN TENTANG KAMI */
    .tentangkami {
        padding: 40px 0; 
    }
    .tentangkami .col-2 {
        padding: 5px;
        width: 70%;
        float: none;
    }
    .tentangkami p {
        width: 150%;
    }
    /* BAGIAN LOKASI */
    .maps-teks {
        padding: 40px 0;
    }
    .mate {
        width: 100%;
        padding: 10px;
        float: none;
    }
}
</style>
</php>
