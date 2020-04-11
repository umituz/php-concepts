<?php

setcookie('cookie_name_umut','My name is Umut');
$cookie = $_COOKIE['cookie_name_umut'] ?? 'Çerez Yok';
echo $cookie;
