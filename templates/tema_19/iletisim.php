﻿<?php 
include 'header.php';
$iletisimsor=$db->prepare("SELECT * FROM iletisim");
$iletisimsor->execute();
$iletisimcek=$iletisimsor->fetch(PDO::FETCH_ASSOC);
?>  

<div class="below-slideshow">
 <div class="container">
  <div class="row">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="txt-block">


       <h1 class="head-line"><?php echo $iletisimcek['iletisim_ad']; ?></h1>

     </div>
   </div>
 </div>

</div>
</div>
<!-- BELOW SLIDESHOW SECTION END-->
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
     <h1 class="tag-home"><?php echo $iletisimcek['iletisim_detay']; ?></h1> 
     <hr />
   </div>
 </div>
</div>
<!-- TAG HOME SECTION END-->
<div class="just-sec">


  <div class="container">

    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="just-txt-div">


         <h2>Adres Bilgilerimiz : </h2>
         <p >
         <?php echo $ayarcek['ayar_adres']; ?> <?php echo $ayarcek['ayar_ilce']; ?> / <?php echo $ayarcek['ayar_il']; ?>
         </p>
         <p>
           <strong>  Telefon: </strong> <?php echo $ayarcek['ayar_tel']; ?>
         </p>
         <p>
           <strong>  E-posta: </strong> <?php echo $ayarcek['ayar_mail']; ?>
         </p>
         <p>
           <strong>  Website: </strong> <?php echo $ayarcek['ayar_siteurl']; ?>
         </p>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <div class="just-txt-div">




       <div class="form-group">
        <label>E-posta adresinizi giriniz</label>
        <input class="form-control" type="text" />
      </div>
      <div class="form-group">
        <label>Konu nedir? </label>
        <input class="form-control" type="text" />
      </div>
      <div class="form-group">
        <label>İletmek istediğiniz mesaj</label>
        <textarea class="form-control"  rows="5"></textarea>
      </div>

      <button type="submit" class="btn btn-success btn-lg">Gönder</button>

    </div>
  </div>

</div>

</div>
</div>         
<!--JUST SECTION END-->
<div class="parallax-like">
  <div class="overlay">


   <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <div class="just-txt-div">
          <strong> 300+</strong> 
          <p>
            Clients
          </p>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <div class="just-txt-div">
          <strong> 100+</strong> 
          <p>
            Offices
          </p>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <div class="just-txt-div">
          <strong> 50000+</strong> 
          <p>
            Employees
          </p>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <div class="just-txt-div">
          <strong> 500+</strong> 
          <p>
            Projects
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- PARALLAX LIKE SECTION END-->
<div class="container " >
 <div class="row ">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <h1 class="head-line">Our Clients </h1>
    <br />
  </div>
</div>
<div class="row ">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <hr />
    <div class="flexslider carousel">
      <ul class="slides">
        <li>
          <img src="assets/img/client.jpg" />
        </li>
        <li>
          <img src="assets/img/client.jpg" />
        </li>
        <li>
          <img src="assets/img/client.jpg" />
        </li>
        <li>
          <img src="assets/img/client.jpg" />
        </li>
        <li>
          <img src="assets/img/client.jpg" />
        </li>
        <li>
          <img src="assets/img/client.jpg" />
        </li>
        <li>
          <img src="assets/img/client.jpg" />
        </li>
        <li>
          <img src="assets/img/client.jpg" />
        </li>
        <li>
          <img src="assets/img/client.jpg" />
        </li>
        <li>
          <img src="assets/img/client.jpg" />
        </li>
        <li>
          <img src="assets/img/client.jpg" />
        </li>
        <li>
          <img src="assets/img/client.jpg" />
        </li>
        <li>
          <img src="assets/img/client.jpg" />
        </li>
        <li>
          <img src="assets/img/client.jpg" />
        </li>
        <li>
          <img src="assets/img/client.jpg" />
        </li>
        <li>
          <img src="assets/img/client.jpg" />
        </li>
        <li>
          <img src="assets/img/client.jpg" />
        </li>
        <li>
          <img src="assets/img/client.jpg" />
        </li>
        <li>
          <img src="assets/img/client.jpg" />
        </li>
        <li>
          <img src="assets/img/client.jpg" />
        </li>
      </ul>
    </div>
    <hr />
    <br />
  </div>
</div>
</div>
<!--CLIENT SECTION END-->
<div class="container " >
 <div class="row">
  <div class="col-lg-10 col-md-10 col-sm-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-12 set-div">
    <div class="just-txt-div text-center">
      <h3><strong>-- Lorem ipsum dolor sit --</strong> </h3>
      <p>
       Lorem Lorem ipsum dolor sit amet <strong> Lorem ipsum dolor sit ametLorem </strong> ipsum dolor sit ametLorem 
       ipsum dolor sit ametLorem ipsum dolor 
       <br /><br />
     </p>
     <a class="btn btn-info btn-lg" href="#">Read More Here</a>
     &nbsp;&nbsp;
     <a class="btn btn-success btn-lg" href="#">Download Now </a>
   </div>

 </div>
</div>
</div>
<!--SET-DIV SECTION END-->

<?php include 'footer.php'; ?>