<?php 
include 'yonetmen/islemler/baglan.php';
include 'yonetmen/fonksiyonlar/seo.php';
$ayarsor=$db->prepare("SELECT * FROM ayarlar");
$ayarsor->execute();
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width" />
   <title><?php echo $ayarcek['ayar_title']; ?></title>
   <meta name="description" content="<?php echo $ayarcek['ayar_description']; ?>"/>
   <meta name="keywords" content="<?php echo $ayarcek['ayar_keywords']; ?>"/>
   <meta name="author" content="<?php echo $ayarcek['ayar_author']; ?>"/>
   <link rel="stylesheet" href="css/components.css">
   <link rel="stylesheet" href="css/responsee.css">
   <!-- CUSTOM STYLE -->       
   <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
   <link rel="stylesheet" href="css/template-style.css">
   <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
   <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
   <script type="text/javascript" src="js/modernizr.js"></script>
   <script type="text/javascript" src="js/responsee.js"></script>          
      <!--[if lt IE 9]> 
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> 
      <![endif]-->     
   </head>
   <body class="size-1140">
      <!-- TOP NAV WITH LOGO -->          
      <header class="margin-bottom">
         <div class="line">
            <nav>
               <div class="top-nav">
                  <p class="nav-text"></p>
                  <a class="logo" href="index.php">            
                     Ümit<span>UZ</span>
                  </a>            
                  <h1>Benden birkaç düşüncenin web siteye dönüşmüş halidir.</h1>
                  <ul class="top-ul right">
                     <li>            
                        <a href="anasayfa">Anasayfa</a>            
                     </li>
                     <li>            
                        <a href="hakkimizda">Hakkımızda</a>            
                     </li>
                     <li>            
                        <a href="blog">Blog</a>            
                     </li>
                     <li>            
                        <a href="iletisim">İletişim</a>            
                     </li>
                     <div class="social right">	           
                        <a target="_blank" href="<?php echo $ayarcek['ayar_facebook']; ?>">
                           <i class="icon-facebook_circle icon2x"></i>
                        </a>          
                        <a target="_blank" href="<?php echo $ayarcek['ayar_twitter']; ?>">
                           <i class="icon-twitter_circle icon2x"></i>
                        </a>                               
                     </div>
                  </ul>
               </div>
            </nav>
         </div>
      </header>