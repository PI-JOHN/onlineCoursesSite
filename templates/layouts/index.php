<?php require_once __DIR__.'/header.php';

?>

    <div class="container mt-5">
      <h3 class="mb-5">Php Courses</h3>
      <div class="d-flex flex-wrap">
      <?php foreach ($courses as $course): ?>

        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Free</h4>
          </div>
          <div class="card-body">
            <img src="/templates/img/<?php echo $course['id']; ?>.jpg" class="img-thumbnail" alt="">
            <ul class="list-unstyled mt-3 mb-4">

              <li><?php echo $course['title']; ?>.</li><br>
              <li>Количество уроков: <?php echo $course['count_lessons']; ?></li>
              <li>Категория: <?php echo $course['category']; ?></li>
              <li><a href="https://itproger.com/courses/web">itProger</a> </li>

            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary"><a href="/view/<?php echo $course['id']; ?>">Подробнее</a></button>
          </div>
        </div>

      <?php endforeach; ?>
    </div>

    </div>
    <?php require_once __DIR__.'/footer.php'; ?>
