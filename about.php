<?php require_once __DIR__.'/templates/layouts/header.php'; ?>
<div class="container mt-5">
  <h3>Обратная связь</h3>
    <?php if ($errors && is_array($errors)): ?>
    <?php foreach ($errors as $error): ?>
    <p><?php echo $error; ?></p>
    <?php endforeach; ?>
    <?php endif; ?>
      <form class="" action="#" method="post">
        <input class="form-control" type="email" name="email" value="" placeholder="Email"><br>
        <textarea name="message" class="form-control" placeholder="Сообщение" ></textarea><br>
        <button type="submit" name="submit" class="btn btn-success" >Отправить</button>
      </form>
</div>

      <?php require_once __DIR__.'/templates/layouts/footer.php'; ?>
