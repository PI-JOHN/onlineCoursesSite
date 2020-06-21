<?php
spl_autoload_register(function($class)
{
  $array_path = [
    '/controllers/',
    '/models/',
    '/models/App/',
  ];

  foreach ($array_path as $path){
    $path = __DIR__.'/../' . $path . $class . '.php';
    if(is_file($path)){
      include_once $path;
    }
  }
});
 ?>
