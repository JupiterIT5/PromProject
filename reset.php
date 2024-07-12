<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/pop_up.css">
    <title>My site</title>
</head>
<body>
    <?php include 'header.php'?>
    <div class="section__reset">
        <h2>Сбросить пароль</h2>
        <p>Введите вашу эл. почту, мы вышлем письмо со ссылкой для сброса пароля</p>
        <form>
            <?php if($_SESSION['reset-error']):?>
            <input type="text" placeholder="Электронная почта" class="email input-error" name="email">
            <p class="error" style="margin-bottom: 18px">Обязательное поле для заполнения</p>
            <?php unset($_SESSION['reset_error'])?>
            <?php else:?>
            <input type="text" placeholder="Электронная почта" class="email" name="email" style="margin-bottom: 30px;">
            <?php endif; ?>
            <!-- <button class="submit">Отправить письмо</button> --> <!-- После создание БД восстановить эту кнопку. -->
            <h3 class="submit" style="display: flex; justify-content: center; align-items: center">Отправить письмо</h3>
        </form>
    </div>
    <?php include 'footer.php'?>
    <div class="pop-up">
        <div class="pop-up--container">
            <h2>Отправлено</h2>
            <p>Письмо с ссылкой для сброса пароля отправлено на вашу эл. почту, проверьте вашу эл. почту</p>
            <a href="/login.php">Отлично</a>
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
</body>
</html>