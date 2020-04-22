<?php

include_once "system/router/Router.php";

(new Router($_GET['url']));

include_once "routes/web.php";