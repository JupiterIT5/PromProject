<?php session_start(); ?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/profile-reg.css">
    <link rel="stylesheet" href="css/pop_up.css">
    <title>My site</title>
</head>

<body>
    <?php include 'header.php' ?>
    <form class="nav">
        <section class="section__data">
            <div class="title">
                <h2>Профиль</h2>
                <a href="/">Выйти</a>
            </div>
            <div class="about">
                <div class="edit-avatar">
                    <div class="avatar">
                        <?php if ($_SESSION['user']['avatar']): ?>
                            <img src="<?php $_SESSION['user']['avatar'] ?>" alt="avatar">
                        <?php else: ?>
                            <img src="img/user_default.svg" alt="avatar">
                        <?php endif; ?>
                    </div>
                    <div class="edit">
                        <div>
                            <label>Изменить</label>
                            <input type="file" name="file" class="file" id="file" onchange="updateSize();" multiple="true" webkitfile="true">
                        </div>
                        <div class="delete"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22"><g id="www.flaticon.com" transform="translate(-0.234 -0.234)"><g id="Layer_2" data-name="Layer 2" transform="translate(0.234 0.234)"><circle id="Ellipse_32" data-name="Ellipse 32" cx="11" cy="11" r="11" transform="translate(0 0)" fill="#ff4848"/><g id="Group_967" data-name="Group 967" transform="translate(6.122 5.425)"><path id="Path_1424" data-name="Path 1424" d="M134.772,126a1.04,1.04,0,0,0,1.121,1.036h5.079a1.059,1.059,0,0,0,1.181-1.121c.118-1.992.413-6.848.434-7.244h-8.25C134.336,118.759,134.625,123.67,134.772,126Zm7.807-9.292c-.583,0-1.166-.009-1.749,0a.776.776,0,0,0-.773-.713h-3.2a.776.776,0,0,0-.773.71c-.6-.011-1.2-.007-1.8,0a.61.61,0,0,0-.616.454.656.656,0,0,0,.657.88c1.38,0,2.759,0,4.139,0h4.113a.668.668,0,1,0,.007-1.334Z" transform="translate(-133.631 -116)" fill="#fff"/></g></g></g></svg></div>
                    </div>
                </div>
                <div class="edit-about">
                    <textarea name="user-about" class="user-about" placeholder="Расскажите о себе" minlength="100"
                        maxlength="1200"></textarea>
                    <p id="count"><span class="count">0</span> из 1200 символов (минимум 100)</p>
                </div>
            </div>
            <div class="info">
            <div>
                    <?php if ($_SESSION['profile_error'] == 'name'): ?>
                        <input type="text" name="name" class="name input-error" placeholder="Имя">
                        <p class="error" style="margin-bottom: 8px">Обязательное поле для заполнения</p>
                        <?php unset($_SESSION['profile_error']) ?>
                    <?php else: ?>
                        <input type="text" name="name" class="name" placeholder="Имя" style="margin-bottom: 30px;">
                    <?php endif; ?>
                    <?php if ($_SESSION['profile_error'] == 'lastname'): ?>
                        <input type="text" name="lastname" class="lastname input-error" placeholder="Фамилия">
                        <p class="error" style="margin-bottom: 8px">Обязательное поле для заполнения</p>
                        <?php unset($_SESSION['profile_error']) ?>
                    <?php else: ?>
                        <input type="text" name="lastname" class="lastname" placeholder="Фамилия"
                            style="margin-bottom: 30px;">
                    <?php endif; ?>
                    <?php if ($_SESSION['profile_error'] == 'country'): ?>
                        <h3 class="country-btn btn-error" style="margin-bottom:7px;">
                            <span class="country">Страна</span>
                            <div class="btn-array" id="array"><img src="icon/arrow.svg" alt="arrow"
                                    class="array__menu--country"></div>
                        </h3>
                        <p class="error" style="margin-bottom: 8px">Обязательное поле для заполнения</p>
                        <?php unset($_SESSION['profile_error']) ?>
                    <?php else: ?>
                        <h3 class="country-btn" style="margin-bottom:30px;">
                            <span class="country">Страна</span>
                            <div class="btn-array" id="array"><img src="icon/arrow.svg" alt="arrow"
                                    class="array__menu--country"></div>
                        </h3>
                    <?php endif; ?>
                    <div class="country-menu" id='country-menu'>
                        <h4 class="country-list">Россия</h4>
                        <h4 class="country-list">Беларусь</h4>
                        <h4 class="country-list">Таджикистан</h4>
                        <h4 class="country-list">Украина</h4>
                        <h4 class="country-list">Канада</h4>
                        <h4 class="country-list">Узбекистан</h4>
                        <h4 class="country-list">Казахстан</h4>
                    </div>
                    <?php if ($_SESSION['profile_error'] == 'sity'): ?>
                        <h3 class="sity-btn btn-error" style="margin-bottom:7px;">
                            <span class="sity">Город</span>
                            <div class="btn-array" id="array"><img src="icon/arrow.svg" alt="arrow"
                                    class="array__menu--country"></div>
                        </h3>
                        <p class="error" style="margin-bottom: 8px">Обязательное поле для заполнения</p>
                        <?php unset($_SESSION['profile_error']) ?>
                    <?php else: ?>
                        <h3 class="sity-btn" style="margin-bottom:30px;">
                            <span class="sity">Город</span>
                            <div class="btn-array" id="array"><img src="icon/arrow.svg" alt="arrow"
                                    class="array__menu--sity"></div>
                        </h3>
                    <?php endif; ?>
                    <div class="sity-menu" id='sity-menu'>
                        <h4 class="sity-list">Челябинск</h4>
                        <h4 class="sity-list">Москва</h4>
                        <h4 class="sity-list">Волгоград</h4>
                        <h4 class="sity-list">Санкт-Петербург</h4>
                        <h4 class="sity-list">Стамбул</h4>
                        <h4 class="sity-list">Красноярск</h4>
                        <h4 class="sity-list">Новосибирск</h4>
                    </div>
                    <?php if ($_SESSION['profile_error'] == 'password'): ?>
                        <div class="input-password">
                            <img src="icon/eye.svg" alt="close" class="input-open">
                            <input type="password" placeholder="Пароль" class="password input-error" name="password">
                        </div>
                        <p class="error" style="margin-bottom: 8px">Обязательное поле для заполнения</p>
                        <?php unset($_SESSION['profile_error']) ?>
                    <?php else: ?>
                        <div class="input-password">
                            <img src="icon/eye.svg" alt="close" class="input-open">
                            <input type="password" placeholder="Пароль" class="password" name="password"
                                style="margin-bottom: 30px;">
                        </div>
                    <?php endif; ?>
                    <?php if ($_SESSION['profile_error'] == 'password-again'): ?>
                        <div class="input-password">
                            <img src="icon/eye.svg" alt="close" class="input-open-again">
                            <input type="password" placeholder="Пароль (повторно)" class="password-again input-error"
                                name="password">
                        </div>
                        <p class="error" style="margin-bottom: 8px">Обязательное поле для заполнения</p>
                        <?php unset($_SESSION['profile_error']) ?>
                    <?php else: ?>
                        <div class="input-password">
                            <img src="icon/eye.svg" alt="close" class="input-open-again">
                            <input type="password" placeholder="Пароль (повторно)" class="password-again" name="password"
                                style="margin-bottom: 30px;">
                        </div>
                    <?php endif; ?>
                </div>
                <div>
                    <?php if ($_SESSION['profile-error'] == 'email'): ?>
                        <input type="text" placeholder="Электронная почта" class="email input-error" name="email">
                        <p class="error" style="margin-bottom: 8px">Обязательное поле для заполнения</p>
                        <?php unset($_SESSION['profile_error']) ?>
                    <?php else: ?>
                        <input type="text" placeholder="Электронная почта" class="email" name="email"
                            style="margin-bottom: 30px;">
                    <?php endif; ?>

                    <?php if ($_SESSION['profile-error'] == 'phone'): ?>
                        <input type="text" placeholder="Телефон" class="phone input-error" name="phone">
                        <p class="error" style="margin-bottom: 8px">Обязательное поле для заполнения</p>
                        <?php unset($_SESSION['profile_error']) ?>
                    <?php else: ?>
                        <input type="text" placeholder="Телефон" class="phone" name="phone" style="margin-bottom: 30px;">
                    <?php endif; ?>

                    <?php if ($_SESSION['profile-error'] == 'whatapp'): ?>
                        <input type="text" placeholder="WhatApp" class="whatapp input-error" name="whatapp">
                        <p class="error" style="margin-bottom: 8px">Обязательное поле для заполнения</p>
                        <?php unset($_SESSION['profile_error']) ?>
                    <?php else: ?>
                        <input type="text" placeholder="WhatApp" class="whatapp" name="whatapp"
                            style="margin-bottom: 30px;">
                    <?php endif; ?>

                    <?php if ($_SESSION['profile-error'] == 'telegram'): ?>
                        <input type="text" placeholder="Telegram" class="telegram input-error" name="telegram">
                        <p class="error" style="margin-bottom: 8px">Обязательное поле для заполнения</p>
                        <?php unset($_SESSION['profile_error']) ?>
                    <?php else: ?>
                        <input type="text" placeholder="Telegram" class="telegram" name="telegram"
                            style="margin-bottom: 30px;">
                    <?php endif; ?>

                    <?php if ($_SESSION['profile-error'] == 'viber'): ?>
                        <input type="text" placeholder="Viber" class="viber input-error" name="viber">
                        <p class="error" style="margin-bottom: 8px">Обязательное поле для заполнения</p>
                        <?php unset($_SESSION['profile_error']) ?>
                    <?php else: ?>
                        <input type="text" placeholder="Viber" class="viber" name="viber" style="margin-bottom: 30px;">
                    <?php endif; ?>

                    <?php if ($_SESSION['profile-error'] == 'vk'): ?>
                        <input type="text" placeholder="ВКонтакте" class="vk input-error" name="vk">
                        <p class="error" style="margin-bottom: 8px">Обязательное поле для заполнения</p>
                        <?php unset($_SESSION['profile_error']) ?>
                    <?php else: ?>
                        <input type="text" placeholder="ВКонтакте" class="vk" name="vk" style="margin-bottom: 30px;">
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <section class="section__data--mobile">
            <div class="title">
                <h2>Профиль</h2>
                <a href="/">Выйти</a>
            </div>
            <div class="edit-avatar">
                <div class="avatar"><img src="img/user_default.svg" alt="avatar"></div>
                <div>
                    <div class="edit">
                        <label>Изменить</label>
                        <input type="file" name="file" multiple>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"viewBox="0 0 22 22"><g id="www.flaticon.com" transform="translate(-0.234 -0.234)"><g id="Layer_2" data-name="Layer 2" transform="translate(0.234 0.234)"><circle id="Ellipse_32" data-name="Ellipse 32" cx="11" cy="11" r="11"transform="translate(0 0)" fill="#ff4848" /><g id="Group_967" data-name="Group 967" transform="translate(6.122 5.425)"><path id="Path_1424" data-name="Path 1424"d="M134.772,126a1.04,1.04,0,0,0,1.121,1.036h5.079a1.059,1.059,0,0,0,1.181-1.121c.118-1.992.413-6.848.434-7.244h-8.25C134.336,118.759,134.625,123.67,134.772,126Zm7.807-9.292c-.583,0-1.166-.009-1.749,0a.776.776,0,0,0-.773-.713h-3.2a.776.776,0,0,0-.773.71c-.6-.011-1.2-.007-1.8,0a.61.61,0,0,0-.616.454.656.656,0,0,0,.657.88c1.38,0,2.759,0,4.139,0h4.113a.668.668,0,1,0,.007-1.334Z"transform="translate(-133.631 -116)" fill="#fff" /></g></g></g></svg>
                </div>
            </div>
            <div class="status--container">
                <div class="status-btn">
                    <h3 class="current-status mobile--current-status">
                        <span class="status mobile--status">Свободен</span>
                        <div class="btn-array" id="array"><img src="icon/arrow.svg" alt="arrow"
                                class="array__menu--status mobile--array"></div>
                    </h3>
                    <div class="status-menu mobile--status-menu">
                        <b style="color: #1AA248;" class="status-list" id="green">Свободен</b>
                        <b style="color: #FFAA00;" class="status-list" id="yellow">Частично занят</b>
                        <b style="color: #FF4848;" class="status-list" id="red">Занят</b>
                    </div>
                </div>
                <p>Установите рабочий статус</p>
            </div>
            <div class="tag">
                <div class="section__search--tag-container">
                    <div class="section__search--tag tag-1">ТХ</div>
                    <div class="section__search--tag tag-2">АР</div>
                    <div class="section__search--tag tag-3">ПБ</div>
                    <div class="section__search--tag tag-4">ВК</div>
                    <div class="section__search--tag tag-5">ОВ</div>
                    <div class="section__search--tag tag-6">ЭОМ</div>
                    <div class="section__search--tag tag-7">СКС</div>
                    <div class="section__search--tag tag-8">ХС</div>
                    <div class="section__search--tag tag-9">КМ</div>
                </div>
                <div class="help">
                    <h2>Установите по каким направлениям вас будут находить в поиске</h2>
                    <a href="#">Затрудняетесь? Мы подскажем!</a>
                </div>
            </div>
            <div class="edit-about">
                <textarea name="user-about" class="user-about mobile--user-about" placeholder="Расскажите о себе" minlength="100" maxlength="1200"></textarea>
                <p id="mobile-count"><span class="count mobile-count">0</span> из 1200 символов (минимум 100)</p>
            </div>
            <div class="info">
                <div>
                    <?php if ($_SESSION['profile_error'] == 'name'): ?>
                        <input type="text" name="name" class="name input-error" placeholder="Имя">
                        <p class="error" style="margin-bottom: 8px">Обязательное поле для заполнения</p>
                        <?php unset($_SESSION['profile_error']) ?>
                    <?php else: ?>
                        <input type="text" name="name" class="name" placeholder="Имя" style="margin-bottom: 30px;">
                    <?php endif; ?>
                    <?php if ($_SESSION['profile_error'] == 'lastname'): ?>
                        <input type="text" name="lastname" class="lastname input-error" placeholder="Фамилия">
                        <p class="error" style="margin-bottom: 8px">Обязательное поле для заполнения</p>
                        <?php unset($_SESSION['profile_error']) ?>
                    <?php else: ?>
                        <input type="text" name="lastname" class="lastname" placeholder="Фамилия"
                            style="margin-bottom: 30px;">
                    <?php endif; ?>
                    <?php if ($_SESSION['profile_error'] == 'country'): ?>
                        <h3 class="country-btn btn-error" style="margin-bottom:7px;">
                            <span class="country">Страна</span>
                            <div class="btn-array" id="array"><img src="icon/arrow.svg" alt="arrow"
                                    class="array__menu--country"></div>
                        </h3>
                        <p class="error" style="margin-bottom: 8px">Обязательное поле для заполнения</p>
                        <?php unset($_SESSION['profile_error']) ?>
                    <?php else: ?>
                        <h3 class="country-btn" style="margin-bottom:30px;">
                            <span class="country">Страна</span>
                            <div class="btn-array" id="array"><img src="icon/arrow.svg" alt="arrow"
                                    class="array__menu--country"></div>
                        </h3>
                    <?php endif; ?>
                    <div class="country-menu" id='country-menu'>
                        <h4 class="country-list">Россия</h4>
                        <h4 class="country-list">Беларусь</h4>
                        <h4 class="country-list">Таджикистан</h4>
                        <h4 class="country-list">Украина</h4>
                        <h4 class="country-list">Канада</h4>
                        <h4 class="country-list">Узбекистан</h4>
                        <h4 class="country-list">Казахстан</h4>
                    </div>
                    <?php if ($_SESSION['profile_error'] == 'sity'): ?>
                        <h3 class="sity-btn btn-error" style="margin-bottom:7px;">
                            <span class="sity">Город</span>
                            <div class="btn-array" id="array"><img src="icon/arrow.svg" alt="arrow"
                                    class="array__menu--country"></div>
                        </h3>
                        <p class="error" style="margin-bottom: 8px">Обязательное поле для заполнения</p>
                        <?php unset($_SESSION['profile_error']) ?>
                    <?php else: ?>
                        <h3 class="sity-btn" style="margin-bottom:30px;">
                            <span class="sity">Город</span>
                            <div class="btn-array" id="array"><img src="icon/arrow.svg" alt="arrow"
                                    class="array__menu--sity" style="transition: 0.3s linear;"></div>
                        </h3>
                    <?php endif; ?>
                    <div class="sity-menu" id='sity-menu'>
                        <h4 class="sity-list">Челябинск</h4>
                        <h4 class="sity-list">Москва</h4>
                        <h4 class="sity-list">Волгоград</h4>
                        <h4 class="sity-list">Санкт-Петербург</h4>
                        <h4 class="sity-list">Стамбул</h4>
                        <h4 class="sity-list">Красноярск</h4>
                        <h4 class="sity-list">Новосибирск</h4>
                    </div>
                    <?php if ($_SESSION['profile_error'] == 'password'): ?>
                        <div class="input-password">
                            <img src="icon/eye.svg" alt="close" class="input-open">
                            <input type="password" placeholder="Пароль" class="password input-error" name="password">
                        </div>
                        <p class="error" style="margin-bottom: 8px">Обязательное поле для заполнения</p>
                        <?php unset($_SESSION['profile_error']) ?>
                    <?php else: ?>
                        <div class="input-password">
                            <img src="icon/eye.svg" alt="close" class="input-open">
                            <input type="password" placeholder="Пароль" class="password" name="password"
                                style="margin-bottom: 30px;">
                        </div>
                    <?php endif; ?>
                    <?php if ($_SESSION['profile_error'] == 'password-again'): ?>
                        <div class="input-password">
                            <img src="icon/eye.svg" alt="close" class="input-open-again">
                            <input type="password" placeholder="Пароль (повторно)" class="password-again input-error"
                                name="password">
                        </div>
                        <p class="error" style="margin-bottom: 8px">Обязательное поле для заполнения</p>
                        <?php unset($_SESSION['profile_error']) ?>
                    <?php else: ?>
                        <div class="input-password">
                            <img src="icon/eye.svg" alt="close" class="input-open-again">
                            <input type="password" placeholder="Пароль (повторно)" class="password-again" name="password"
                                style="margin-bottom: 30px;">
                        </div>
                    <?php endif; ?>
                </div>
                <div>
                    <?php if ($_SESSION['profile-error'] == 'email'): ?>
                        <input type="text" placeholder="Электронная почта" class="email input-error" name="email">
                        <p class="error" style="margin-bottom: 8px">Обязательное поле для заполнения</p>
                        <?php unset($_SESSION['profile_error']) ?>
                    <?php else: ?>
                        <input type="text" placeholder="Электронная почта" class="email" name="email"
                            style="margin-bottom: 30px;">
                    <?php endif; ?>

                    <?php if ($_SESSION['profile-error'] == 'phone'): ?>
                        <input type="text" placeholder="Телефон" class="phone input-error" name="phone">
                        <p class="error" style="margin-bottom: 8px">Обязательное поле для заполнения</p>
                        <?php unset($_SESSION['profile_error']) ?>
                    <?php else: ?>
                        <input type="text" placeholder="Телефон" class="phone" name="phone" style="margin-bottom: 30px;">
                    <?php endif; ?>

                    <?php if ($_SESSION['profile-error'] == 'whatapp'): ?>
                        <input type="text" placeholder="WhatApp" class="whatapp input-error" name="whatapp">
                        <p class="error" style="margin-bottom: 8px">Обязательное поле для заполнения</p>
                        <?php unset($_SESSION['profile_error']) ?>
                    <?php else: ?>
                        <input type="text" placeholder="WhatApp" class="whatapp" name="whatapp"
                            style="margin-bottom: 30px;">
                    <?php endif; ?>

                    <?php if ($_SESSION['profile-error'] == 'telegram'): ?>
                        <input type="text" placeholder="Telegram" class="telegram input-error" name="telegram">
                        <p class="error" style="margin-bottom: 8px">Обязательное поле для заполнения</p>
                        <?php unset($_SESSION['profile_error']) ?>
                    <?php else: ?>
                        <input type="text" placeholder="Telegram" class="telegram" name="telegram"
                            style="margin-bottom: 30px;">
                    <?php endif; ?>

                    <?php if ($_SESSION['profile-error'] == 'viber'): ?>
                        <input type="text" placeholder="Viber" class="viber input-error" name="viber">
                        <p class="error" style="margin-bottom: 8px">Обязательное поле для заполнения</p>
                        <?php unset($_SESSION['profile_error']) ?>
                    <?php else: ?>
                        <input type="text" placeholder="Viber" class="viber" name="viber" style="margin-bottom: 30px;">
                    <?php endif; ?>

                    <?php if ($_SESSION['profile-error'] == 'vk'): ?>
                        <input type="text" placeholder="ВКонтакте" class="vk input-error" name="vk">
                        <p class="error" style="margin-bottom: 8px">Обязательное поле для заполнения</p>
                        <?php unset($_SESSION['profile_error']) ?>
                    <?php else: ?>
                        <input type="text" placeholder="ВКонтакте" class="vk" name="vk" style="margin-bottom: 30px;">
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <div class="section__btn">
            <button class="submit">Сохранить</button>
            <div class="cancel">Отменить</div>
        </div>
    </form>
    <?php include 'footer.php' ?>
    <div class="pop-up"> 
        <div class="pop-up--container">
            <h2>Сохранено</h2>
            <p style="margin-bottom: 58px">Ваши данные изменены и сохранены в систему</p>
            <a href="/profile_provider.php" style="margin-top: 58px;">Отлично</a>
        </div>
    </div>
    <script>
            document.querySelector('.cancel').addEventListener('click', () => {
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
        const value_text = document.querySelector('.user-about'),
            count = document.querySelector('.count')

        value_text.addEventListener('input', () => {
            count.innerHTML = value_text.value.trim().length
            if (value_text.value.trim().length <= 100) {
                document.getElementById('count').style.color = 'red'
            } else {
                document.getElementById('count').style.color = '#9a9a9a'
            }
        })
    </script>
    <script>
        const btn_password = document.querySelector(".input-open");
        const btn_password_again = document.querySelector('.input-open-again')
        const input = document.querySelector(".password");
        const input_again = document.querySelector(".password-again");

        btn_password.addEventListener("click", () => {
            input.classList.toggle('text')
            if (input.classList.contains('text')) {
                input.setAttribute("type", "text");
            } else {
                input.setAttribute("type", "password");
            }
        });

        btn_password_again.addEventListener("click", () => {
            input_again.classList.toggle('text')
            if (input_again.classList.contains('text')) {
                input_again.setAttribute("type", "text");
            } else {
                input_again.setAttribute("type", "password");
            }
        });
    </script>
    <script src="js/menu.js"></script>
    <script src="js/upload.js"></script>
    <?php unset($_SESSION['profile_error'])?>
    <?php unset($_SESSION['profile_ok'])?>
</body>

</html>