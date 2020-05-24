<?php include 'header.php'; ?>

<!-- MAIN SECTION -->                  
<section id="article-section" class="line archive">
   <div class="margin">
      <!-- ARTICLES -->             
      <div class="s-12 l-9">

         <!-- ARTICLE 1 -->    

         <?php

         $sayfada=3;

         $sorgu=$db->prepare("SELECT * FROM icerik");
         $sorgu->execute();
         $toplam_icerik=$sorgu->rowCount();

         $toplam_sayfa=ceil($toplam_icerik / $sayfada);

         $sayfa = isset($_GET['sayfa']) ? (int) $_GET['sayfa'] : 1;

         if($sayfa<1) $sayfa=1;
         if($sayfa>$toplam_sayfa) $sayfa=$toplam_sayfa;

         $limit=($sayfa-1)*$sayfada;

         $iceriksor=$db->prepare("SELECT * FROM icerik order by icerik_id DESC LIMIT $limit,$sayfada");
         $iceriksor->execute();

         while ($icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC)) {?>

         <article class="margin-bottom">
            <div class="post-1 line">
               <!-- image -->                 
               <div class="s-12 l-11 post-image">                   
                  <a href="haberler-<?= seo($icerikcek['icerik_ad']).'-'. $icerikcek['icerik_id'] ?>"><img src="resimler/icerik/<?php echo $icerikcek['icerik_resimyol']; ?>" alt="<?php echo $icerikcek['icerik_ad']; ?>"></a>              
               </div>
               <!-- date -->                 
               <div class="s-12 l-1 post-date">
               <p class="date">29</p>
                  <p class="month">Şubat</p>
               </div>
            </div>
            <!-- text -->                 
            <div class="post-text">
               <a href="haberler-<?= seo($icerikcek['icerik_ad']).'-'. $icerikcek['icerik_id'] ?>">
                  <h2><?php echo $icerikcek['icerik_ad']; ?></h2>
               </a>
               <p><?php echo $icerikcek['icerik_ozet']; ?></p>
               <a class="continue-reading" href="haberler-<?= seo($icerikcek['icerik_ad']).'-'. $icerikcek['icerik_id'] ?>">Okumaya Devam Et</a>
            </div>
         </article>

         <?php } ?>

         <div > <!-- Blogrol Pagination -->
            <nav>
             <ul class="pagination">
              <?php 

              $s=0;
              while($s < $toplam_sayfa)
               { $s++;
                if ($s==$toplam_sayfa) { ?>

                <li class="">
                   <a style="color:white" href="blog?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>
                </li>

                <?php }
                else
                 { ?> 

              <li class="">
                 <a style="color:white" href="blog?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>
              </li>

              <?php } } ?>  

           </ul>
        </nav>
     </div>

  </div>
  <!-- SIDEBAR -->             
  <div class="s-12 l-3">
   <aside>
      <!-- NEWS 1 -->           
      <img src="img/news1.jpg" alt="News 1">          
      <div class="aside-block margin-bottom">
         <h3>This is the first news on blog</h3>
         <p>Lorem ipsum dolor sit amet, conse ctetuer. Duis autem vemeu iriure dolor adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam</p>
      </div>
      <!-- AD REGION -->         
      <div class="advertising margin-bottom">
         <img src="img/banner.jpg" alt="ad banner">          
      </div>
      <!-- NEWS 2 -->           
      <img src="img/news2.jpg" alt="News 2">          
      <div class="aside-block margin-bottom">
         <h3>Second news on the fashion blog</h3>
         <p>Lorem ipsum dolor sit amet, conse ctetuer. Duis autem vemeu iriure dolor adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam</p>
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