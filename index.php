<?php
require 'config/site.php';
require 'config/server.php';
require 'system/autoloader.php';
$registry = new Registry();
$router = new Router($registry);
$router->dispatch();

?>