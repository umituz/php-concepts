<?php 
include 'header.php';
$iceriksor=$db->prepare("SELECT * FROM icerik where icerik_id=:icerik_id");
$iceriksor->execute(array(
 'icerik_id' => $_GET['icerik_id']
 ));
$icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC);
?>

<!-- MAIN SECTION -->                  
<section id="article-section" class="line">
   <div class="margin">
      <!-- ARTICLES -->             
      <div class="s-12 l-9">
         <!-- ARTICLE 1 -->               
         <article class="margin-bottom">
            <div class="post-3 line">
               <!-- image -->                 
               <div class="s-12 l-11 post-image">                   
                  <img src="resimler/icerik/<?php echo $icerikcek['icerik_resimyol']; ?>" alt="Fashion">              
               </div>
               <!-- date -->                 
               <div class="s-12 l-1 post-date">
                  <p class="date">04</p>
                  <p class="month">mar</p>
               </div>
            </div>
            <!-- text -->                 
            <div class="post-text">
               <h1><?php echo $icerikcek['icerik_ad']; ?></h1>
               <p><?php echo $icerikcek['icerik_detay']; ?></p>
               <p class="author">Kim Yazdı : <?php echo $ayarcek['ayar_author']; ?></p>
            </div>
         </article>
         <!-- AD REGION -->
         <div class="line">
            <div class="advertising horizontal">
               <img src="img/banner-horizontal.jpg" alt="ad banner">        
            </div>
         </div>
      </div>

      <?php include 'sidebar.php'; ?>

   </div>
</section>

<?php include 'footer.php'; ?>