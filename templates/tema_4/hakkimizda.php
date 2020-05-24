<?php 
$hakkimizdasor=$db->prepare("SELECT * FROM hakkimizda");
$hakkimizdasor->execute();
$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);
 ?>
    <div id="tf-about">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-6">
                        <h3><?php echo $hakkimizdacek['hakkimizda_ad']; ?></h3>
                        <br>
                        <p><?php echo $hakkimizdacek['hakkimizda_ozet']; ?></p>
                        <br>
                        <a href="#tf-why-me" class="btn btn-primary my-btn dark">Why Hire Me</a>
                    </div>
                </div>
            </div>
        </div>
    </div>