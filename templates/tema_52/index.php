<?php 
include 'yonetmen/islemler/baglan.php';
include 'yonetmen/fonksiyonlar/seo.php';
$ayarsor=$db->prepare("SELECT * FROM ayarlar");
$ayarsor->execute();
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="tr">

<head>

    <meta charset="utf-8">
    <title><?php echo $ayarcek['ayar_title']; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $ayarcek['ayar_description']; ?>">
    <meta name="author" content="<?php echo $ayarcek['ayar_author']; ?>">

    <!-- CSS -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    <style>
        body {
            background: #f8f8f8 url(assets/img/pattern.jpg);
            font-family: 'PT Sans', Helvetica, Arial, sans-serif;
            font-size: 16px;
            font-weight: 400;
            color: #555;
            text-align: center;
        }
        h1 {
            display: inline-block;
            margin-top: 60px;
            padding-bottom: 10px;
            font-size: 36px;
            font-weight: 400;
            color: #2d2d2d;
            border-bottom: 1px dotted #aaa;
        }
        a {
            display: inline-block;
            margin-top: 30px;
            -o-transition: all .2s;
            -moz-transition: all .2s;
            -webkit-transition: all .2s;
            -ms-transition: all .2s;
        }
        a:hover { opacity: 0.7; }
        img {
            padding: 7px;
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            border-radius: 5px;
            -moz-box-shadow: 0 1px 3px 0 rgba(0,0,0,.15);
            -webkit-box-shadow: 0 1px 3px 0 rgba(0,0,0,.15);
            box-shadow: 0 1px 3px 0 rgba(0,0,0,.15);
        }
        p {
            margin-top: 15px;
        }
        .bottom {
            height: 60px;
        }
    </style>

</head>

<body>

    <div class="container">

        <div class="row">
            <div class="span10 offset1">
                <h1>Referanslar</h1>
            </div>
        </div>

        <div class="row">
            <div class="span5 offset1">
                <a class="video" href="video.php"><img src="assets/img/screenshots/video.jpg" alt=""></a>
                <p>Video</p>
            </div>
            <div class="span5">
                <a class="iphone" href="iphone.php"><img src="assets/img/screenshots/iphone.jpg" alt=""></a>
                <p>iPhone App</p>
            </div>
        </div>

        <div class="row">
            <div class="span5 offset1">
                <a class="ebook" href="ebook.php"><img src="assets/img/screenshots/ebook.jpg" alt=""></a>
                <p>eBook</p>
            </div>
            <div class="span5">
                <a class="coming-soon" href="yakinda-geliyor.php"><img src="assets/img/screenshots/coming-soon.jpg" alt=""></a>
                <p>Coming Soon</p>
            </div>
        </div>
        
    </div>

    <div class="bottom"></div>

</body>

</html>

