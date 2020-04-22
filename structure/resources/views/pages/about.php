<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php include_once dirname(__DIR__, 1) . "/layouts/style.php" ?>
</head>
<body>
<h1>ABOUT</h1>
<p>
    <?php echo hello_world("about"); ?>
</p>
<div id="test">
    test
</div>
<?php include_once dirname(__DIR__, 1) . "/layouts/script.php" ?>
</body>
</html>