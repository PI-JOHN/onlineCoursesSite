<?php

class Db
{
  protected $dbh;
  public static function getConnection()
  {
    $params = (include __DIR__.'/../../config/db_params.php')['db'];

    try{
    $dbh = new PDO('mysql:host=' . $params['host'] . '; dbname=' . $params['dbname'], $params['user'], $params['password']);
    return $dbh;
  } catch (PDOException $e) {
          echo 'Подключение не удалось: ' . $e->getMessage();
      }

  }
}
 ?>
