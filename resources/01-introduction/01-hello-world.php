<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            background-color:black;
            color:white;
        }
    </style>
  
</head>
<body>

<?php echo "Hello World!"; ?> 

<br><br>

<input type="button" onClick="sayHelloWorld();" value="Say Hello World">

<br><br>

<div id="divHelloWorld"></div>

<script>
    function sayHelloWorld()
    {
        document.getElementById("divHelloWorld").innerHTML = "Hello World";
    }
</script>

</body>
</html>