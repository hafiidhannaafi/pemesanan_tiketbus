<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Hafoodh Bus</title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/fontawesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
   </head>
   <body>

<!--Menu-->
   <?php

   require('menu.php');
   ?>

<section>
   <?php
if(isset($_GET['target']))
{
   echo $_GET['target'],"</br>";
   if($_GET['target']=='beranda')
   {
      require('beranda.php');
   }elseif($_GET['target']=='tentangkami')
   {
      require('tentangkami.php');
   }elseif($_GET['target']=='booking')
   {
      require('booking.php');
   }elseif($_GET['target']=='pelayanan')
   {
      require('pelayanan.php');
   }elseif($_GET['target']=='joinmember')
   {
      require('joinmember.php');
   }else
   {echo" Halaman tidak ditemukan </br>";}
}else
{
   require('beranda.php');
}
?>

</section>
<!--Footer-->

<footer>
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-md-6 col-12">
                  <div class="footer_blog_section">
                     <img src="imgs/logoh.png" alt="#" />
                     <p style="margin-top: 5px;">Mengedepankan Mutu Dan Pelayanan Kami, Menemani Kemanapun Tujuan Anda</p>
                  </div>
               </div>
               <div class="col-lg-2 col-md-6 col-12">
                  <div class="item">
                     <h4 class="text-uppercase">Menu</h4>
                     <ul>
                        <li><a href="#">Beranda</a></li>
                        <li><a href="#">Tentang kami</a></li>
                        <li><a href="#">Pelayanan</a></li>
                        <li><a href="#">Join member</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-12">
                  <div class="item">
                     <h4 class="text-uppercase">Kontak kami</h4>
                     <p><strong>Alamat kantor :</strong></p>
                     <p><img src="imgs/location.png" alt="#" /> Jl Ir Soekarno No 7, Surakarta 57753</p>
                     <p><strong>No telp :</strong></p>
                     <p><img src="imgs/phone_icon.png" alt="#" />(0271) 333 222 </p>
                     <p><strong>Email :</strong></p>
                     <p><img src="imgs/phone_icon.png" alt="#" />hafoodhbus@travel.com </p>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-12">
                  <div class="item">
                     <h4 class="text-uppercase">Jam layanan :</h4>
                     <ul>
                        <li><a href="#">Senin-jumat 07.00-21.00 WIB</a></li>
                        <li><a href="#">Sabtu- Minggu 08.00-17.00 WIB</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="copyright text-center">
            <p>Copyright 2020 Design by Hafoodh bus team</a></p>
         </div>
</footer>
   </body>
</html>