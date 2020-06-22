<?php
session_start();
require_once __DIR__.'/config/autoload.php';


$router = new Router();
$router->run();
