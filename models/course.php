<?php
require_once __DIR__.'/App/Db.php';

class Course
{
  public static function getCourses()
  {
    $db = Db::getConnection();
    $sql = 'SELECT id,title,count_lessons,category,content FROM courses ORDER BY id ASC';
    $result = $db->query($sql);
    $courses = array();
    $i = 0;
    while($row = $result->fetch()){
      $courses[$i]['id'] = $row['id'];
      $courses[$i]['title'] = $row['title'];
      $courses[$i]['count_lessons'] = $row['count_lessons'];
      $courses[$i]['category'] = $row['category'];
      $courses[$i]['content'] = $row['content'];
      $i++;
    }

    return $courses;
  }

  public static function getCourseById($id)
  {
    $db = Db::getConnection();
    $sql = 'SELECT * FROM courses WHERE id = :id';
    $result = $db->prepare($sql);
    $result->bindParam(':id', $id, PDO::PARAM_INT);
    $result->setFetchMode(PDO::FETCH_ASSOC);
    $result->execute();
    return $result->fetch();
  }
}
 ?>
