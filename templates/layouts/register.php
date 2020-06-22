<?php require_once __DIR__.'/header.php'; ?>

    <div class="container">
        <div class="row">
            <?php if($errors && is_array($errors)): ?>
            <ul>
            <?php foreach($errors as $error): ?>
            <li class="mr-5" ><?php echo $error; ?></li><br>
            <?php endforeach; ?>
            </ul>
            <?php endif; ?>
            <form method="post" action="#">
                <label for="InputName">Name</label>
                <input type="text" name="name" class="form-control" id="InputName" aria-describedby="nameHelp" placeholder="Введите имя">
                <label for="InputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="Введите email">
                <small id="emailHelp" class="form-text text-muted">
                    Мы никогда не передадим вашу электронную почту кому-либо еще.</small>
                <label for="InputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="InputPassword1" placeholder="Пароль"><br>
                <a href="/register/"><button type="submit" name="submitRegister" class="btn btn-danger">Регистрация</button></a>
            </form>
        </div>


    </div>

<?php require_once __DIR__ . '/footer.php'; ?>