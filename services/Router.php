<?php

use Services\LoaderFile;

require_once '../vendor/altorouter/altorouter/AltoRouter.php';

$router = new AltoRouter();

LoaderFile::set("routes", '../config/Routes.yaml');
$routes = LoaderFile::get("routes");

var_dump($routes);