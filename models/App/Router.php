<?php

class Router
{
  private $routes;

  public function __construct()
  {
    $routesPath = __DIR__.'/../../config/routes.php';
    $this->routes = include($routesPath);
  }

  private function getUri()
  {
    if(!empty($_SERVER['REQUEST_URI'])){
      return trim($_SERVER['REQUEST_URI'],'/');
    }
  }

  public function run()
  {
    $uri = $this->getUri();

    foreach ($this->routes as $uriPattern => $path){
      if (preg_match("~$uriPattern~", $uri)){
        $internalRoute = preg_replace("~$uriPattern~", $path, $uri);

        $segments = explode('/', $internalRoute);
        $controllerName = ucfirst(array_shift($segments)) . 'Controller';
        $actionName = 'action' . ucfirst(array_shift($segments));
        $parameters = $segments;
        $controllerFile = __DIR__.'/../../controllers/'. $controllerName . '.php';
        if(file_exists($controllerFile)){
          require_once ($controllerFile);
        }
        $controllerObject = new $controllerName;
        $result = call_user_func_array(array($controllerObject, $actionName), $parameters );
        if($result != null){
          break;
        }
      }
    }
  }
}
