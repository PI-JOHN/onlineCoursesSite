<?php

class CourseController
{
  public function actionIndex()
  {
    
    $courses = Course::getCourses();
    //print_r($courses);
    require_once __DIR__.'/../templates/layouts/index.php';
    return true;
  }

  public function actionAbout()
  {
     if(isset($_POST['submit']) && !empty(trim($_POST['email'])) && !empty(trim($_POST['message']))){
    //   $email = $_POST['email'];
    //   $message = $_POST['message']

     } else {
       $errors[] = 'Заполните поля';
     }

    require_once __DIR__.'/../about.php';
    return true;
  }
}
 ?>
