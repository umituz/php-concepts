<?php 
include 'header.php';
include 'menuler.php';
include 'kayan-yazi.php';
$iletisimsor=$db->prepare("SELECT * FROM iletisim");
$iletisimsor->execute();
$iletisimcek=$iletisimsor->fetch(PDO::FETCH_ASSOC);
?>

<section id="contentSection">
  <div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8">
      <div class="left_content">
        <div class="contact_area">
          <h2><?php echo $iletisimcek['iletisim_ad']; ?></h2>
          <p><?php echo $iletisimcek['iletisim_detay']; ?></p>
          <form action="#" class="contact_form">
            <input class="form-control" type="text" placeholder="Tam adınız*">
            <input class="form-control" type="email" placeholder="E-posta adresiniz*">
            <textarea class="form-control" cols="30" rows="10" placeholder="İletmek istediğiniz mesaj*"></textarea>
            <input type="submit" value="Gönder">
          </form>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4">
      <aside class="right_content">
        <div class="single_sidebar">
          <h2><span>Popular Post</span></h2>
          <ul class="spost_nav">
            <li>
              <div class="media wow fadeInDown"> <a href="single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
              </div>
            </li>
            <li>
              <div class="media wow fadeInDown"> <a href="single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
              </div>
            </li>
            <li>
              <div class="media wow fadeInDown"> <a href="single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
              </div>
            </li>
            <li>
              <div class="media wow fadeInDown"> <a href="single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
              </div>
            </li>
          </ul>
        </div>
      </aside>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>