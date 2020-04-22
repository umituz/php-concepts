<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>CONTACT</h1>
<p>
    <?php echo hello_world("iletişim"); ?>
</p>
<p>
    <?php dump(config('session')) ?>
    <?php dump(config('app')) ?>
    <?php dump(config('app')['base_url']) ?>
</p>
</body>
</html>