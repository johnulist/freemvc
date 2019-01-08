<?php

include '../vendor/autoload.php';

require '../app/init.php';


$http = $_SERVER['REQUEST_SCHEME'];
$addr = $_SERVER['SERVER_ADDR'];
$request_url = $_SERVER['REQUEST_URI'];

$app = new App();

