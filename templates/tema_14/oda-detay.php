<?php 
include 'header.php';
$iceriksor=$db->prepare("SELECT * FROM icerik where icerik_id=:icerik_id");
$iceriksor->execute(array(
 'icerik_id' => $_GET['icerik_id']
 ));
$icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC);
?>
?>

<div class="container">

<h1 class="title"><?php echo $icerikcek['icerik_ad']; ?></h1>



  <!-- RoomDetails -->
  <div id="RoomDetails" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="item active"><img src="resimler/icerik/<?php echo $icerikcek['icerik_resimyol']; ?>" class="img-responsive" alt="slide"></div>
      <div class="item  height-full"><img src="images/photos/9.jpg"  class="img-responsive" alt="slide"></div>
      <div class="item  height-full"><img src="images/photos/10.jpg"  class="img-responsive" alt="slide"></div>
    </div>
    <!-- Controls -->
    <a class="left carousel-control" href="#RoomDetails" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
    <a class="right carousel-control" href="#RoomDetails" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
  </div>
  <!-- RoomCarousel-->

  <div class="room-features spacer">
    <div class="row">
      <div class="col-sm-12 col-md-5"> 
        <p><?php echo $icerikcek['icerik_detay']; ?></p>
      </div>
      <div class="col-sm-6 col-md-3 amenitites"> 
        <h3>Amenitites</h3>    
        <ul>
          <li>One of the greatest barriers to making the sale is your prospect.</li>
          <li>Principle to work to make more money while having more fun.</li>
          <li>Unlucky people. Don't stubbornly.</li>
          <li>Principle to work to make more money while having more fun.</li>
          <li>Space in your house How to sell faster than your neighbors</li>
        </ul>


      </div>  
      <div class="col-sm-3 col-md-2">
        <div class="size-price">Size<span>44 sq</span></div>
      </div>
      <div class="col-sm-3 col-md-2">
        <div class="size-price">Price<span>$200.00</span></div>
      </div>
    </div>
  </div>



</div>
<?php include 'footer.php';?>