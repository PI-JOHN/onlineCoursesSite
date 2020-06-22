<?php require_once __DIR__.'/header.php'; ?>
<div class="container">
    <div class="row col-md-9 text-center">
        <h2><?php echo $course['title']; ?></h2>

        <div class="row">
            <p><?php echo $course['content']; ?></p>
        </div>
    </div>
</div>
<?php require_once __DIR__ . '/footer.php'; ?>

