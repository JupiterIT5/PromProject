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
    <link rel="stylesheet" href="css/reg.css">
    <link rel="stylesheet" href="css/pop_up.css">
    <title>My site</title>
</head>

<body>
    <?php include 'header.php' ?>
    <section class="section__reg">
        <h1>Регистрация</h1>
        <h2>Я заказчик</h2>
        <form>
            <?php if ($_SESSION['reg_error'] == 'email'): ?>
            <input type="text" placeholder="Электронная почта" class="email input-error" name="email">
            <p class="error" style="margin-bottom: 8px">Обязательное поле для заполнения</p>
            <?php else:?>
            <input type="text" placeholder="Электронная почта" class="email" name="email" style="margin-bottom: 30px;">
            <?php endif; ?>
            <?php if ($_SESSION['reg_error'] == 'password'):?>
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
            <!-- <button class="submit">Зарегистрироваться</button> --> <!-- После создание БД восстановить эту кнопку. -->
            <h3 class="submit" style="display: flex; justify-content: center; align-items: center">Зарегистрироваться</h3>
        </form>
        <div class="link__reg">
            <h3>Уже есть аккаунт?</h3>
            <a href="reg.php">Войти</a>
        </div>
        <a href="reg_provider.php">Зарегистрироваться проектировщиком</a>
    </section>
    <?php include 'footer.php' ?>
    <div class="pop-up">
        <div class="pop-up--container">
            <h2>Вы зарегистрировались!</h2>
            <p>Поздравляем, вы успешно зарегистрировались на сайте и теперь можете начать работу!</p>
            <a href="/profile_provider-red.php">Отлично</a>
        </div>
    </div>
    <script>
        document.querySelector('.submit').addEventListener('click', () => {
        window.scroll(
            {
                top: 0,
                left: 0
            }
        )
        document.querySelector('.pop-up').classList.add('active')
        document.querySelector('body').classList.add('stop')
        })
    </script>
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
    <?php unset($_SESSION['reg_error'])?>
    <?php unset($_SESSION['reg_ok'])?>

</body>

</html>