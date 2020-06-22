<?php require_once __DIR__.'/header.php'; ?>

<div class="container">
    <div class="row">

        <form method="post" action="#">
                <label for="InputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="Введите email">
                <small id="emailHelp" class="form-text text-muted">
                    Мы никогда не передадим вашу электронную почту кому-либо еще.</small>
                <label for="InputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="InputPassword1" placeholder="Пароль"><br>
            <button type="submit" name="submitLogin" class="btn btn-primary">Войти</button>
            <a href="/register/" class="btn btn-danger">Регистрация</a>
        </form>
        </div>


</div>

<?php require_once __DIR__ . '/footer.php'; ?>

