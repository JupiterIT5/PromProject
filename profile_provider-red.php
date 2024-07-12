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
                <div>
                    <h2>Профиль</h2>
                    <div class="status-btn">
                        <h3 class="current-status">
                            <span class="status">Свободен</span>
                            <div class="btn-array" id="array"><img src="icon/arrow.svg" alt="arrow"
                                    class="array__menu--status"></div>
                        </h3>
                        <div class="status-menu">
                            <b style="color: #1AA248;" class="status-list" id="green">Свободен</b>
                            <b style="color: #FFAA00;" class="status-list" id="yellow">Частично занят</b>
                            <b style="color: #FF4848;" class="status-list" id="red">Занят</b>
                        </div>
                    </div>
                    <p>Установите рабочий статус</p>
                </div>
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
                            <input type="file" name="file" class="file" id="file">
                        </div>
                        <div class="delete"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                viewBox="0 0 22 22">
                                <g id="www.flaticon.com" transform="translate(-0.234 -0.234)">
                                    <g id="Layer_2" data-name="Layer 2" transform="translate(0.234 0.234)">
                                        <circle id="Ellipse_32" data-name="Ellipse 32" cx="11" cy="11" r="11"
                                            transform="translate(0 0)" fill="#ff4848" />
                                        <g id="Group_967" data-name="Group 967" transform="translate(6.122 5.425)">
                                            <path id="Path_1424" data-name="Path 1424"
                                                d="M134.772,126a1.04,1.04,0,0,0,1.121,1.036h5.079a1.059,1.059,0,0,0,1.181-1.121c.118-1.992.413-6.848.434-7.244h-8.25C134.336,118.759,134.625,123.67,134.772,126Zm7.807-9.292c-.583,0-1.166-.009-1.749,0a.776.776,0,0,0-.773-.713h-3.2a.776.776,0,0,0-.773.71c-.6-.011-1.2-.007-1.8,0a.61.61,0,0,0-.616.454.656.656,0,0,0,.657.88c1.38,0,2.759,0,4.139,0h4.113a.668.668,0,1,0,.007-1.334Z"
                                                transform="translate(-133.631 -116)" fill="#fff" />
                                        </g>
                                    </g>
                                </g>
                            </svg></div>
                    </div>
                </div>
                <div class="edit-about">
                    <textarea name="user-about" class="user-about" placeholder="Расскажите о себе" minlength="100"
                        maxlength="1200"></textarea>
                    <p id="count"><span class="count">0</span> из 1200 символов (минимум 100)</p>
                </div>
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
                    <a href="/#help">Затрудняетесь? Мы подскажем!</a>
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
        <section class="section__service">
            <div class="title">
                <h2>Услуги</h2>
                <span>Укажите до 10 услуг</span>
            </div>
            <div class="service--container">
                <div class="service">
                    <input type="text" name="name-service" class="name-service" placeholder="Наименование услуги">
                    <input type="number" name="price-service" class="price-service" placeholder="от ₽">
                    <h3 class="service-btn" data-num="1">
                        <span class="service__name" data-num="1" id="name-1">Услугу</span>
                        <div class="btn-array" id="array"><img src="icon/arrow.svg" alt="arrow"
                                class="array__menu--service" data-num="1" id="array-1"></div>
                    </h3>
                    <div class="service-menu" id='service-menu' data-num="1">
                        <h4 class="service-list" data-num="1">за услугу</h4>
                        <h4 class="service-list" data-num="1">за метр</h4>
                        <h4 class="service-list" data-num="1">за м²</h4>
                        <h4 class="service-list" data-num="1">за час</h4>
                        <h4 class="service-list" data-num="1">за день</h4>
                        <h4 class="service-list" data-num="1">за месяц</h4>
                    </div>
                </div>
                <div class="service">
                    <input type="text" name="name-service" class="name-service" placeholder="Наименование услуги">
                    <input type="number" name="price-service" class="price-service" placeholder="от ₽">
                    <h3 class="service-btn" data-num="2">
                        <span class="service__name" data-num="2" id="name-2">Услугу</span>
                        <div class="btn-array" id="array"><img src="icon/arrow.svg" alt="arrow"
                                class="array__menu--service" data-num="2" id="array-2"></div>
                    </h3>
                    <div class="service-menu" id='service-menu' data-num="2">
                        <h4 class="service-list" data-num="2">за услугу</h4>
                        <h4 class="service-list" data-num="2">за метр</h4>
                        <h4 class="service-list" data-num="2">за м²</h4>
                        <h4 class="service-list" data-num="2">за час</h4>
                        <h4 class="service-list" data-num="2">за день</h4>
                        <h4 class="service-list" data-num="2">за месяц</h4>
                    </div>
                </div>
                <div class="service">
                    <input type="text" name="name-service" class="name-service" placeholder="Наименование услуги">
                    <input type="number" name="price-service" class="price-service" placeholder="от ₽">
                    <h3 class="service-btn" data-num="3">
                        <span class="service__name" data-num="3" id="name-3">Услугу</span>
                        <div class="btn-array" id="array"><img src="icon/arrow.svg" alt="arrow"
                                class="array__menu--service" data-num="3" id="array-3"></div>
                    </h3>
                    <div class="service-menu" id='service-menu' data-num="3">
                        <h4 class="service-list" data-num="3">за услугу</h4>
                        <h4 class="service-list" data-num="3">за метр</h4>
                        <h4 class="service-list" data-num="3">за м²</h4>
                        <h4 class="service-list" data-num="3">за час</h4>
                        <h4 class="service-list" data-num="3">за день</h4>
                        <h4 class="service-list" data-num="3">за месяц</h4>
                    </div>
                </div>
                <div class="service">
                    <input type="text" name="name-service" class="name-service" placeholder="Наименование услуги">
                    <input type="number" name="price-service" class="price-service" placeholder="от ₽">
                    <h3 class="service-btn" data-num="4">
                        <span class="service__name" data-num="4" id="name-4">Услугу</span>
                        <div class="btn-array" id="array"><img src="icon/arrow.svg" alt="arrow"
                                class="array__menu--service" data-num="4" id="array-4"></div>
                    </h3>
                    <div class="service-menu" id='service-menu' data-num="4">
                        <h4 class="service-list" data-num="4">за услугу</h4>
                        <h4 class="service-list" data-num="4">за метр</h4>
                        <h4 class="service-list" data-num="4">за м²</h4>
                        <h4 class="service-list" data-num="4">за час</h4>
                        <h4 class="service-list" data-num="4">за день</h4>
                        <h4 class="service-list" data-num="4">за месяц</h4>
                    </div>
                </div>
                <div class="service">
                    <input type="text" name="name-service" class="name-service" placeholder="Наименование услуги">
                    <input type="number" name="price-service" class="price-service" placeholder="от ₽">
                    <h3 class="service-btn" data-num="5">
                        <span class="service__name" data-num="5" id="name-5">Услугу</span>
                        <div class="btn-array" id="array"><img src="icon/arrow.svg" alt="arrow"
                                class="array__menu--service" data-num="5" id="array-5"></div>
                    </h3>
                    <div class="service-menu" id='service-menu' data-num="5">
                        <h4 class="service-list" data-num="5">за услугу</h4>
                        <h4 class="service-list" data-num="5">за метр</h4>
                        <h4 class="service-list" data-num="5">за м²</h4>
                        <h4 class="service-list" data-num="5">за час</h4>
                        <h4 class="service-list" data-num="5">за день</h4>
                        <h4 class="service-list" data-num="5">за месяц</h4>
                    </div>
                </div>
                <div class="service">
                    <input type="text" name="name-service" class="name-service" placeholder="Наименование услуги">
                    <input type="number" name="price-service" class="price-service" placeholder="от ₽">
                    <h3 class="service-btn" data-num="6">
                        <span class="service__name" data-num="6" id="name-6">Услугу</span>
                        <div class="btn-array" id="array"><img src="icon/arrow.svg" alt="arrow"
                                class="array__menu--service" data-num="6" id="array-6"></div>
                    </h3>
                    <div class="service-menu" id='service-menu' data-num="6">
                        <h4 class="service-list" data-num="6">за услугу</h4>
                        <h4 class="service-list" data-num="6">за метр</h4>
                        <h4 class="service-list" data-num="6">за м²</h4>
                        <h4 class="service-list" data-num="6">за час</h4>
                        <h4 class="service-list" data-num="6">за день</h4>
                        <h4 class="service-list" data-num="6">за месяц</h4>
                    </div>
                </div>
                <div class="service">
                    <input type="text" name="name-service" class="name-service" placeholder="Наименование услуги">
                    <input type="number" name="price-service" class="price-service" placeholder="от ₽">
                    <h3 class="service-btn" data-num="7">
                        <span class="service__name" data-num="7" id="name-7">Услугу</span>
                        <div class="btn-array" id="array"><img src="icon/arrow.svg" alt="arrow"
                                class="array__menu--service" data-num="7" id="array-7"></div>
                    </h3>
                    <div class="service-menu" id='service-menu' data-num="7">
                        <h4 class="service-list" data-num="7">за услугу</h4>
                        <h4 class="service-list" data-num="7">за метр</h4>
                        <h4 class="service-list" data-num="7">за м²</h4>
                        <h4 class="service-list" data-num="7">за час</h4>
                        <h4 class="service-list" data-num="7">за день</h4>
                        <h4 class="service-list" data-num="7">за месяц</h4>
                    </div>
                </div>
                <div class="service">
                    <input type="text" name="name-service" class="name-service" placeholder="Наименование услуги">
                    <input type="number" name="price-service" class="price-service" placeholder="от ₽">
                    <h3 class="service-btn" data-num="8">
                        <span class="service__name" data-num="8" id="name-8">Услугу</span>
                        <div class="btn-array" id="array"><img src="icon/arrow.svg" alt="arrow"
                                class="array__menu--service" data-num="8" id="array-8"></div>
                    </h3>
                    <div class="service-menu" id='service-menu' data-num="8">
                        <h4 class="service-list" data-num="8">за услугу</h4>
                        <h4 class="service-list" data-num="8">за метр</h4>
                        <h4 class="service-list" data-num="8">за м²</h4>
                        <h4 class="service-list" data-num="8">за час</h4>
                        <h4 class="service-list" data-num="8">за день</h4>
                        <h4 class="service-list" data-num="8">за месяц</h4>
                    </div>
                </div>
                <div class="service">
                    <input type="text" name="name-service" class="name-service" placeholder="Наименование услуги">
                    <input type="number" name="price-service" class="price-service" placeholder="от ₽">
                    <h3 class="service-btn" data-num="9">
                        <span class="service__name" data-num="9" id="name-9">Услугу</span>
                        <div class="btn-array" id="array"><img src="icon/arrow.svg" alt="arrow"
                                class="array__menu--service" data-num="9" id="array-9"></div>
                    </h3>
                    <div class="service-menu" id='service-menu' data-num="9">
                        <h4 class="service-list" data-num="9">за услугу</h4>
                        <h4 class="service-list" data-num="9">за метр</h4>
                        <h4 class="service-list" data-num="9">за м²</h4>
                        <h4 class="service-list" data-num="9">за час</h4>
                        <h4 class="service-list" data-num="9">за день</h4>
                        <h4 class="service-list" data-num="9">за месяц</h4>
                    </div>
                </div>
                <div class="service">
                    <input type="text" name="name-service" class="name-service" placeholder="Наименование услуги">
                    <input type="number" name="price-service" class="price-service" placeholder="от ₽">
                    <h3 class="service-btn" data-num="10">
                        <span class="service__name" data-num="10" id="name-10">Услугу</span>
                        <div class="btn-array" id="array"><img src="icon/arrow.svg" alt="arrow"
                                class="array__menu--service" data-num="10" id="array-10"></div>
                    </h3>
                    <div class="service-menu" id='service-menu' data-num="10">
                        <h4 class="service-list" data-num="10">за услугу</h4>
                        <h4 class="service-list" data-num="10">за метр</h4>
                        <h4 class="service-list" data-num="10">за м²</h4>
                        <h4 class="service-list" data-num="10">за час</h4>
                        <h4 class="service-list" data-num="10">за день</h4>
                        <h4 class="service-list" data-num="10">за месяц</h4>
                    </div>
                </div>
            </div>
        </section>
        <section class="section__photo">
            <div class="title">
                <h2>Фотографии</h2><span>Добавьте до 10 фотографий</span>
            </div>
            <div class="photo--container">
                <div class="photo">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" class="download">
                        <g id="www.flaticon.com_1_" data-name="www.flaticon.com (1)" transform="translate(-2.5 -2.5)">
                            <path id="Path_1430" data-name="Path 1430"
                                d="M22.5,2.5a20,20,0,1,0,20,20A20.02,20.02,0,0,0,22.5,2.5Zm0,9.333A2.661,2.661,0,0,1,25.167,14.5v5.333H30.5a2.667,2.667,0,0,1,0,5.333H25.167V30.5a2.667,2.667,0,0,1-5.333,0V25.167H14.5a2.667,2.667,0,0,1,0-5.333h5.333V14.5A2.661,2.661,0,0,1,22.5,11.833Z"
                                fill="#455a64" fill-rule="evenodd" />
                        </g>
                    </svg>
                </div>
                <div class="photo">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" class="download">
                        <g id="www.flaticon.com_1_" data-name="www.flaticon.com (1)" transform="translate(-2.5 -2.5)">
                            <path id="Path_1430" data-name="Path 1430"
                                d="M22.5,2.5a20,20,0,1,0,20,20A20.02,20.02,0,0,0,22.5,2.5Zm0,9.333A2.661,2.661,0,0,1,25.167,14.5v5.333H30.5a2.667,2.667,0,0,1,0,5.333H25.167V30.5a2.667,2.667,0,0,1-5.333,0V25.167H14.5a2.667,2.667,0,0,1,0-5.333h5.333V14.5A2.661,2.661,0,0,1,22.5,11.833Z"
                                fill="#455a64" fill-rule="evenodd" />
                        </g>
                    </svg>
                </div>
                <div class="photo">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" class="download">
                        <g id="www.flaticon.com_1_" data-name="www.flaticon.com (1)" transform="translate(-2.5 -2.5)">
                            <path id="Path_1430" data-name="Path 1430"
                                d="M22.5,2.5a20,20,0,1,0,20,20A20.02,20.02,0,0,0,22.5,2.5Zm0,9.333A2.661,2.661,0,0,1,25.167,14.5v5.333H30.5a2.667,2.667,0,0,1,0,5.333H25.167V30.5a2.667,2.667,0,0,1-5.333,0V25.167H14.5a2.667,2.667,0,0,1,0-5.333h5.333V14.5A2.661,2.661,0,0,1,22.5,11.833Z"
                                fill="#455a64" fill-rule="evenodd" />
                        </g>
                    </svg>
                </div>
                <div class="photo">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" class="download">
                        <g id="www.flaticon.com_1_" data-name="www.flaticon.com (1)" transform="translate(-2.5 -2.5)">
                            <path id="Path_1430" data-name="Path 1430"
                                d="M22.5,2.5a20,20,0,1,0,20,20A20.02,20.02,0,0,0,22.5,2.5Zm0,9.333A2.661,2.661,0,0,1,25.167,14.5v5.333H30.5a2.667,2.667,0,0,1,0,5.333H25.167V30.5a2.667,2.667,0,0,1-5.333,0V25.167H14.5a2.667,2.667,0,0,1,0-5.333h5.333V14.5A2.661,2.661,0,0,1,22.5,11.833Z"
                                fill="#455a64" fill-rule="evenodd" />
                        </g>
                    </svg>
                </div>
                <div class="photo">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" class="download">
                        <g id="www.flaticon.com_1_" data-name="www.flaticon.com (1)" transform="translate(-2.5 -2.5)">
                            <path id="Path_1430" data-name="Path 1430"
                                d="M22.5,2.5a20,20,0,1,0,20,20A20.02,20.02,0,0,0,22.5,2.5Zm0,9.333A2.661,2.661,0,0,1,25.167,14.5v5.333H30.5a2.667,2.667,0,0,1,0,5.333H25.167V30.5a2.667,2.667,0,0,1-5.333,0V25.167H14.5a2.667,2.667,0,0,1,0-5.333h5.333V14.5A2.661,2.661,0,0,1,22.5,11.833Z"
                                fill="#455a64" fill-rule="evenodd" />
                        </g>
                    </svg>
                </div>
                <div class="photo">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" class="download">
                        <g id="www.flaticon.com_1_" data-name="www.flaticon.com (1)" transform="translate(-2.5 -2.5)">
                            <path id="Path_1430" data-name="Path 1430"
                                d="M22.5,2.5a20,20,0,1,0,20,20A20.02,20.02,0,0,0,22.5,2.5Zm0,9.333A2.661,2.661,0,0,1,25.167,14.5v5.333H30.5a2.667,2.667,0,0,1,0,5.333H25.167V30.5a2.667,2.667,0,0,1-5.333,0V25.167H14.5a2.667,2.667,0,0,1,0-5.333h5.333V14.5A2.661,2.661,0,0,1,22.5,11.833Z"
                                fill="#455a64" fill-rule="evenodd" />
                        </g>
                    </svg>
                </div>
                <div class="photo">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" class="download">
                        <g id="www.flaticon.com_1_" data-name="www.flaticon.com (1)" transform="translate(-2.5 -2.5)">
                            <path id="Path_1430" data-name="Path 1430"
                                d="M22.5,2.5a20,20,0,1,0,20,20A20.02,20.02,0,0,0,22.5,2.5Zm0,9.333A2.661,2.661,0,0,1,25.167,14.5v5.333H30.5a2.667,2.667,0,0,1,0,5.333H25.167V30.5a2.667,2.667,0,0,1-5.333,0V25.167H14.5a2.667,2.667,0,0,1,0-5.333h5.333V14.5A2.661,2.661,0,0,1,22.5,11.833Z"
                                fill="#455a64" fill-rule="evenodd" />
                        </g>
                    </svg>
                </div>
                <div class="photo">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" class="download">
                        <g id="www.flaticon.com_1_" data-name="www.flaticon.com (1)" transform="translate(-2.5 -2.5)">
                            <path id="Path_1430" data-name="Path 1430"
                                d="M22.5,2.5a20,20,0,1,0,20,20A20.02,20.02,0,0,0,22.5,2.5Zm0,9.333A2.661,2.661,0,0,1,25.167,14.5v5.333H30.5a2.667,2.667,0,0,1,0,5.333H25.167V30.5a2.667,2.667,0,0,1-5.333,0V25.167H14.5a2.667,2.667,0,0,1,0-5.333h5.333V14.5A2.661,2.661,0,0,1,22.5,11.833Z"
                                fill="#455a64" fill-rule="evenodd" />
                        </g>
                    </svg>
                </div>
                <div class="photo">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" class="download">
                        <g id="www.flaticon.com_1_" data-name="www.flaticon.com (1)" transform="translate(-2.5 -2.5)">
                            <path id="Path_1430" data-name="Path 1430"
                                d="M22.5,2.5a20,20,0,1,0,20,20A20.02,20.02,0,0,0,22.5,2.5Zm0,9.333A2.661,2.661,0,0,1,25.167,14.5v5.333H30.5a2.667,2.667,0,0,1,0,5.333H25.167V30.5a2.667,2.667,0,0,1-5.333,0V25.167H14.5a2.667,2.667,0,0,1,0-5.333h5.333V14.5A2.661,2.661,0,0,1,22.5,11.833Z"
                                fill="#455a64" fill-rule="evenodd" />
                        </g>
                    </svg>
                </div>
                <div class="photo">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" class="download">
                        <g id="www.flaticon.com_1_" data-name="www.flaticon.com (1)" transform="translate(-2.5 -2.5)">
                            <path id="Path_1430" data-name="Path 1430"
                                d="M22.5,2.5a20,20,0,1,0,20,20A20.02,20.02,0,0,0,22.5,2.5Zm0,9.333A2.661,2.661,0,0,1,25.167,14.5v5.333H30.5a2.667,2.667,0,0,1,0,5.333H25.167V30.5a2.667,2.667,0,0,1-5.333,0V25.167H14.5a2.667,2.667,0,0,1,0-5.333h5.333V14.5A2.661,2.661,0,0,1,22.5,11.833Z"
                                fill="#455a64" fill-rule="evenodd" />
                        </g>
                    </svg>
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
        const value_text = document.querySelectorAll('.user-about'),
            count = document.querySelector('.count'),
            mobile_count = document.querySelector('.mobile-count')

        value_text.forEach((valueText) => {
            if (valueText.classList.contains('mobile--user-about')) {
                valueText.addEventListener('input', () => {
                    mobile_count.innerHTML = valueText.value.trim().length
                    if (valueText.value.trim().length <= 100) {
                        document.getElementById('mobile-count').style.color = 'red'
                    } else {
                        document.getElementById('mobile-count').style.color = '#9a9a9a'
                    }
                })
            } else {
            valueText.addEventListener('input', () => {
                count.innerHTML = valueText.value.trim().length
                if (valueText.value.trim().length <= 100) {
                    document.getElementById('count').style.color = 'red'
                } else {
                    document.getElementById('count').style.color = '#9a9a9a'
                }
            })
        }
        }) 
    </script>
    <script>
        const btn_password = document.querySelectorAll(".input-open");
        const btn_password_again = document.querySelectorAll('.input-open-again')
        const input = document.querySelectorAll(".password");
        const input_again = document.querySelectorAll(".password-again");

        btn_password.forEach((btnPassword) => {
            btnPassword.addEventListener("click", () => {
                input.forEach((input) => {
                    input.classList.toggle('text')
                    if (input.classList.contains('text')) {
                        input.setAttribute("type", "text");
                    } else {
                        input.setAttribute("type", "password");
                }
                })
            });
        })

        btn_password_again.forEach((btnPassword) => {
            btnPassword.addEventListener("click", () => {
                input_again.forEach((input) => {
                    input.classList.toggle('text')
                    if (input.classList.contains('text')) {
                        input.setAttribute("type", "text");
                    } else {
                        input.setAttribute("type", "password");
                }
                })
            });
        })
    </script>
    <script src="js/menu.js"></script>
    <script src="js/upload.js"></script>
    <?php unset($_SESSION['profile_error']) ?>
    <?php unset($_SESSION['profile_ok']) ?>
</body>

</html>