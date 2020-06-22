<?php

class CabinetController
{
  public function actionIndex()
  {
    if(isset($_SESSION['user'])){
      require_once __DIR__.'/../templates/layouts/cabinet.php';
    } else {
      header('Location: /');
    }


    return true;
  }

  public function actionLogout()
  {
    User::logout();
    header('Location: /');
  }
}
 ?>
