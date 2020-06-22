<?php require_once __DIR__.'/header.php'; ?>

<div class="container mt-5">
    <a href="/"><h3 class="mb-5">Php Courses</h3></a>
    <div class="d-flex flex-wrap">
            <div class="mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal"><?php echo $course['title']; ?></h4>
                </div>
                <div class="card-body">
                    <img src="/templates/img/<?php echo $course['id']; ?>.jpg" class="img-thumbnail mb-5" alt="">
                <div class="row col-md-12"><br>
                     <p><?php echo $course['content']; ?></p>
                </div>
                    <a href="<?php echo $course['source']; ?>"> Перейти к курсу на сайт-источник</a>
                </div>
            </div>

    </div>

</div>
<!--<div class="container">-->
<!--    <div class="row col-md-12 text-center">-->
<!--        <h2>--><?php //echo $course['title']; ?><!--</h2>-->
<!---->
<!--        <div class="row">-->
<!--            <div class="col-md-6">-->
<!--                <p>--><?php //echo $course['content']; ?><!--</p>-->
<!--            </div>-->
<!--            <div class="card mb-4 shadow-sm">-->
<!--                <div class="card-header">-->
<!--                    <h4 class="my-0 font-weight-normal">Free</h4>-->
<!--                </div>-->
<!--                <div class="card-body">-->
<!--                    -->
<!--                    <img src="/../img/--><?php //echo $course['id']; ?><!--.jpg" class="" alt="">-->
<!---->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<?php require_once __DIR__ . '/footer.php'; ?>

