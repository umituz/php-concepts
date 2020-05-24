<?php 
include 'yonetmen/islemler/baglan.php';
include 'yonetmen/fonksiyonlar/seo.php';
$ayarsor=$db->prepare("SELECT * FROM ayarlar");
$ayarsor->execute();
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<!-- start: Meta -->
	<meta charset="utf-8">
	<title><?php echo $ayarcek['ayar_title']; ?></title> 
	<meta name="description" content="FreeME:Bootstrap Theme"/>
	<meta name="keywords" content="Template, Theme, web, html5, css3" />
	<meta name="author" content="Łukasz Holeczek from creativeLabs"/>
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: Facebook Open Graph -->
	<meta property="og:title" content=""/>
	<meta property="og:description" content=""/>
	<meta property="og:type" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:image" content=""/>
	<!-- end: Facebook Open Graph -->

	<!-- start: CSS -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
	<!-- end: CSS -->

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->

    </head>
    <body>

     <!--start: Wrapper -->
     <div id="wrapper">

      <!--start: Container -->
      <div class="container">


       <!--start: Header -->
       <header>

        <!--start: Row -->
        <div class="row">

         <!--start: Logo -->
         <div class="logo span4">
          <a class="brand" href="#"><img src="img/logo.png"></a>
        </div>
        <!--end: Logo -->
        
        <!--start: Social Links -->
        <div class="span8">
          <div id="social-links">
           <ul class="social-small-grid">
            <li>
             <div class="social-small-item">				
              <div class="social-small-info-wrap">
               <div class="social-small-info">
                <div class="social-small-info-front social-small-twitter">
                 <a href="<?php echo $ayarcek['ayar_twitter']; ?>"></a>
               </div>
               <div class="social-small-info-back social-small-twitter-hover">
                 <a href="<?php echo $ayarcek['ayar_twitter']; ?>"></a>
               </div>	
             </div>
           </div>
         </div>
       </li>
       <li>
         <div class="social-small-item">				
          <div class="social-small-info-wrap">
           <div class="social-small-info">
            <div class="social-small-info-front social-small-facebook">
             <a href="<?php echo $ayarcek['ayar_facebook']; ?>"></a>
           </div>
           <div class="social-small-info-back social-small-facebook-hover">
             <a href="<?php echo $ayarcek['ayar_facebook']; ?>"></a>
           </div>	
         </div>
       </div>
     </div>
   </li>
   <li>
     <div class="social-small-item">				
      <div class="social-small-info-wrap">
       <div class="social-small-info">
        <div class="social-small-info-front social-small-dribbble">
         <a href="<?php echo $ayarcek['ayar_linkedin']; ?>"></a>
       </div>
       <div class="social-small-info-back social-small-dribbble-hover">
         <a href="<?php echo $ayarcek['ayar_linkedin']; ?>"></a>
       </div>	
     </div>
   </div>
 </div>
</li>
<li>
 <div class="social-small-item">				
  <div class="social-small-info-wrap">
   <div class="social-small-info">
    <div class="social-small-info-front social-small-flickr">
     <a href="<?php echo $ayarcek['ayar_youtube']; ?>"></a>
   </div>
   <div class="social-small-info-back social-small-flickr-hover">
     <a href="<?php echo $ayarcek['ayar_youtube']; ?>"></a>
   </div>	
 </div>
</div>
</div>
</li>
</ul>
</div>
</div>
<!--end: Social Links -->

</div>
<!--end: Row -->

</header>
<!--end: Header-->

<!--start: Navigation-->	
<div class="navbar navbar-inverse">
  <div class="navbar-inner">
   <div class="container">
    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
   </a>
   <div class="nav-collapse collapse">
     <ul class="nav">
      <li class="active"><a href="index.php">Anasayfa</a></li>
      <li><a href="hakkimizda.php">Hakkımızda</a></li>
      <li><a href="hizmetler.php">Hizmetler</a></li>
      <li><a href="ucretlendirme.php">Ücretlendirme</a></li>
      <li><a href="iletisim.php">İletişim</a></li>
    </ul>
  </div>
</div>
</div>
</div>
<!--end: Navigation-->

</div>
  		<!--end: Container-->