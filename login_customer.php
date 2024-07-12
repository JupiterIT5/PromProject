<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/pop_up.css">
    <title>My site</title>
</head>

<body>
    <?php include 'header.php' ?>
    <section class="section__login">
        <h1>Войти</h1>
        <h2>Я заказчик</h2>
        <form>
            <?php if ($_SESSION['login_error'] == 'email'): ?>
            <input type="text" placeholder="Электронная почта" class="email input-error" name="email">
            <p class="error" style="margin-bottom: 8px">Обязательное поле для заполнения</p>
            <?php else:?>
            <input type="text" placeholder="Электронная почта" class="email" name="email" style="margin-bottom: 30px;">
            <?php endif; ?>
            <?php if ($_SESSION['login_error'] == 'password'):?>
            <div>
                <img src="icon/eye.svg" alt="close" class="input-open">
                <input type="password" placeholder="Пароль" class="password input-error" name="password">
            </div>
            <p class="error" style="margin-bottom: 8px">Обязательное поле для заполнения</p>
            <?php else:?>
            <div>
                <img src="icon/eye.svg" alt="close" class="input-open">
                <input type="password" placeholder="Пароль" class="password" name="password">
            </div>
            <?php endif; ?>
            <button class="submit">Войти</button>
        </form>
        <a href="login_provider.php">Войти как проектировщик</a>
        <a href="reset.php">Забыль пароль?</a>
        <div class="link__reg">
            <h3>Ещё нет аккаунта?</h3>
            <a href="reg.php">Зарегистрироваться</a>
        </div>
    </section>
    <?php include 'footer.php' ?>
    <?php if($_SESSION['login_ok']):?>
    <div class="pop-up">
        <div class="pop-up--container">
            <h2>Вы вошли!</h2>
            <p>Поздравляем, вы успешно вошли в свой профиль на сайте и теперь можете начать работу!</p>
            <a href="/profile_customer.php">Отлично</a>
        </div>
    </div>
    <script>
        document.querySelector('body').classList.toggle('stop')
    </script>
    <?php endif;?>
    <script>
        const btn_password = document.querySelector(".input-open");
        const input = document.querySelector(".password");

        btn_password.addEventListener("click", () => {
            input.classList.toggle('text')
            if (input.classList.contains('text')) {
                input.setAttribute("type", "text");
            } else {
                input.setAttribute("type", "password");
            }
        });
    </script>
    <?php unset($_SESSION['login_error'])?>
    <?php unset($_SESSION['login_ok'])?>
</body>

</html>