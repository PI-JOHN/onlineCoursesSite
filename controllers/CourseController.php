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
       $email = $_POST['email'];
       $message = $_POST['message'];
       SendMail::sendFeedback($email,$message);

     } else  {
       $errors[] = 'Заполните поля';
     }

    require_once __DIR__.'/../about.php';
    return true;
  }

  public function actionView($id)
  {
    $course = Course::getCourseById($id);
    //var_dump($course);
    require_once __DIR__.'/../templates/layouts/view.php';
    return true;
  }

  public function actionAuth()
  {

    if (isset($_POST['submitLogin'])){
      $email = $_POST['email'];
      $password = $_POST['password'];
      $userId = User::checkUser($email, $password);
      if($userId){
         User::auth($userId);
         header('Location: /');
      }
    }
    var_dump($_SESSION['user']);
    require_once __DIR__.'/../templates/layouts/auth.php';
    return true;
  }

//  public function actionRegister()
//  {
//
//  }
}
 ?>
