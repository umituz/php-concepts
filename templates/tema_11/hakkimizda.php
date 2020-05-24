<?php
include 'header.php';
$hakkimizdasor=$db->prepare("SELECT * FROM hakkimizda");
$hakkimizdasor->execute();
$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);
?>

<!-- MAIN SECTION -->                  
<section id="article-section" class="line">
   <div class="margin">
      <!-- ARTICLES -->             
      <div class="s-12 l-9">
         <!-- ARTICLE 1 -->               
         <article class="margin-bottom">
            <!-- text -->                 
            <div class="post-text">
               <h1><?php echo $hakkimizdacek['hakkimizda_ad']; ?></h1>
               <img style="width:800px; height: 500px;" src="resimler/<?php echo $hakkimizdacek['hakkimizda_resimyol']; ?>" alt="Fashion">
               <p><?php echo $hakkimizdacek['hakkimizda_detay']; ?></p>
            </div>
         </article>
         <!-- AD REGION -->
         <div class="line">
            <div class="advertising horizontal">
               <img src="img/banner-horizontal.jpg" alt="ad banner">          
            </div>
         </div>
      </div>
      <!-- SIDEBAR -->             
      <div class="s-12 l-3">
         <aside>
            <!-- LATEST POSTS -->
            <div class="aside-block margin-bottom">
               <h3>Latest posts</h3>
               <a class="latest-posts" href="post-1.html">
                  <h5>Free responsive template</h5>
                  <p>
                     Lorem ipsum dolor sit amet, consectetuer adipiscing elit...
                  </p>
               </a>
               <a class="latest-posts" href="post-2.html">
                  <h5>Amazing fashion blog</h5>
                  <p>
                     Ut wisi enim ad minim veniam, quis nostrud adipiscing...
                  </p>
               </a>
               <a class="latest-posts" href="post-3.html">
                  <h5>Nice minimalist design</h5>
                  <p>
                     Duis autem vemeu iriure dolor adipiscing elit, sed diam...
                  </p>
               </a>
               <a class="latest-posts" href="post-4.html">
                  <h5>With advertising regions</h5>
                  <p>
                     Lorem ipsum dolor sit amet, consectetuer adipiscing elit...
                  </p>
               </a>
               <a class="latest-posts" href="post-5.html">
                  <h5>And again - it's totally free!</h5>
                  <p>
                     Ut wisi enim ad minim veniam, quis nostrud adipiscing...
                  </p>
               </a>
            </div>
            <!-- AD REGION --> 
            <div class="advertising margin-bottom">
               <img src="img/banner.jpg" alt="ad banner">         
            </div>
         </aside>
      </div>
   </div>
</section>

<?php include 'footer.php'; ?>