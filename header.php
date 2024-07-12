
    <header class="header">
        <div class="header__logo"><a href="/"><img src="icon/logo.svg" alt="logo"></a></div>
        <?php if ($_SESSION['user']): ?>
            <div class="entrance__menu">
                <a href="profile.php"><?php $_SESSION['user']['name']?></a>
            </div>
            <div class="header__profile"><a href="profile.php"><?php $_SESSION['user']['name']?></a></div>
            <div class="header__profile--mobile">
                <span></span>
                <span></span>
                <span></span>
            </div>
        <?php else: ?>
            <div class="header__profile"><button class='btn__entrance'>Войти</button></div>
            <div class="header__profile--mobile">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="entrance__menu">
                <a href="login_provider.php">Я проектировщик</a>
                <a href="login_customer.php">Я заказчик</a>
            </div>
        <?php endif; ?>
    </header>