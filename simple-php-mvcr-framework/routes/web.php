<?php

Router::get("/about", function () {
    echo "baout";
});

Router::get("/class", function () {
    (new usercontroller())->show();
});

Router::get("/not", function () {
    (new usercontroller())->not();
});

Router::get("/model", function () {
    (new usercontroller())->model();
});