    <section id="main-slider" class="no-margin">

        <div class="carousel slide wet-asphalt">

            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            </ol>
            <div class="carousel-inner">
                <?php 
                $slidersor=$db->prepare("SELECT * FROM slider");
                $slidersor->execute();
                while ($slidercek=$slidersor->fetch(PDO::FETCH_ASSOC)) {?>
                <div class="item active" style="background-image: url(resimler/slider/<?php echo $slidercek['slider_resimyol']; ?>)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered">
                                    <h2 class="animation animated-item-1"><?php echo $slidercek['slider_ad']; ?></h2>
                                    <p class="animation animated-item-2">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <?php } ?>
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="icon-angle-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="icon-angle-right"></i>
        </a>

    </section><!--/#main-slider-->