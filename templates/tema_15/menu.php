    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><strong>Ümit</strong> UZ</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Sipariş Ver</a></li>
                    <li><a href="#">Giriş Yap</a></li>
                    <li><a href="#">Kaydol</a></li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">7/24 Destek <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><strong>Telefon: </strong><?php echo $ayarcek['ayar_tel']; ?></a></li>
                            <li><a href="#"><strong>Mail: </strong><?php echo $ayarcek['ayar_mail']; ?></a></li>
                            <li class="divider"></li>
                            <li><a href="#"><strong>Adres: </strong>
                                <div>
                                    <?php echo $ayarcek['ayar_adres']; ?><br />
                                    <?php echo $ayarcek['ayar_ilce']; ?> / <?php echo $ayarcek['ayar_il']; ?>
                                </div>
                            </a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                        <input type="text" placeholder="Bir şeyler arayın..." class="form-control">
                    </div>
                    &nbsp; 
                    <button type="submit" class="btn btn-primary">Ara</button>
                </form>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>