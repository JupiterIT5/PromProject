<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/search.css">
    <title>My site</title>
</head>

<body>
    <?php include 'header.php' ?>
    <section class="section__search">
        <div>
            <div class="title">Поиск проектировщиков</div>
            <div class="subtitle">Выберите по каким разделам искать проектировщиков</div>
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
        </div>
        <div class="search">
            <button class="search-btn">Найти</button>
            <a href="/#help" class="scroll-to-help">Затрудняетесь с выбором? Мы подскажем!</a>
        </div>
    </section>
    <section class="section_provider">
    <div class="provider">
            <div class="contact">
                <img src="img/people-01.webp" alt="avatar" class="avatar">
                <div class="grade">
                    <img src="icon/star-03.svg" alt="star" class="star">
                    <h2>3.2</h2>
                    <p>7 оценок</p>
                </div>
                <a href="profile_provider.php">Профиль</a>
                <a href="tel: +79002342387">+7 900 234-23-87</a>
                <div class="link_message">
                    <div class="link"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                viewBox="0 0 40 40">
                                <g id="Group_1178" data-name="Group 1178" transform="translate(-551 -948)">
                                    <rect id="Rectangle_2" data-name="Rectangle 2" width="40" height="40" rx="8"
                                        transform="translate(551 948)" fill="transparent" />
                                    <g id="Group_684" data-name="Group 684" transform="translate(561.601 958)">
                                        <path id="Path_275" data-name="Path 275"
                                            d="M50.635,36a10.047,10.047,0,0,0-16.1,11.623L33.473,52.8a.383.383,0,0,0,.061.3.388.388,0,0,0,.412.16l5.072-1.2A10.045,10.045,0,0,0,50.635,36ZM49.053,48.625A7.869,7.869,0,0,1,39.991,50.1l-.707-.35-3.11.736.009-.039.644-3.13-.346-.683A7.866,7.866,0,0,1,49.053,37.5a.419.419,0,0,0,.04.041A7.865,7.865,0,0,1,49.053,48.625Z"
                                            transform="translate(-33.447 -33.024)" fill="#3881e0" />
                                        <path id="Path_276" data-name="Path 276"
                                            d="M70.86,69.366a3.267,3.267,0,0,1-1.74,1.517c-1.326.32-3.36.011-5.892-2.349l-.031-.028c-2.226-2.064-2.8-3.782-2.664-5.144a3.256,3.256,0,0,1,1.265-1.93.724.724,0,0,1,1.132.26l.819,1.841a.72.72,0,0,1-.09.736l-.414.538a.713.713,0,0,0-.064.8,7.74,7.74,0,0,0,1.4,1.559,8.2,8.2,0,0,0,1.946,1.394.7.7,0,0,0,.771-.162l.481-.484a.736.736,0,0,1,.718-.184l1.946.552a.736.736,0,0,1,.412,1.088Z"
                                            transform="translate(-55.53 -56.061)" fill="#3881e0" />
                                    </g>
                                </g>
                            </svg></a></div>
                    <div class="link"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                viewBox="0 0 40 40">
                                <g id="Group_1177" data-name="Group 1177" transform="translate(-599 -948)">
                                    <rect id="Rectangle_660" data-name="Rectangle 660" width="40" height="40" rx="8"
                                        transform="translate(599 948)" fill="transparent" />
                                    <path id="Path_1069" data-name="Path 1069"
                                        d="M51.959,45.23l-.335.122L33.437,51.9a.609.609,0,0,0,.053,1.178L38.2,54.371l.878,2.578.878,2.578a.836.836,0,0,0,1.348.3l2.432-2.3,4.776,3.239a1.02,1.02,0,0,0,1.565-.552l3.163-13.976A.933.933,0,0,0,51.959,45.23Zm-2.322,3.1L41.42,55.049l-.387.317a.418.418,0,0,0-.155.272l-.087.714-.238,2.007a.092.092,0,0,1-.184.015L39.7,56.369l-.69-2.053a.416.416,0,0,1,.2-.492l8.55-4.9L49.371,48C49.6,47.867,49.844,48.163,49.638,48.332Z"
                                        transform="translate(575.992 914.831)" fill="#3881E0" />
                                </g>
                            </svg></a></div>
                    <div class="link"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                viewBox="0 0 40 40">
                                <g id="Group_1180" data-name="Group 1180" transform="translate(-695 -948)">
                                    <rect id="Rectangle_680" data-name="Rectangle 680" width="40" height="40" rx="8"
                                        transform="translate(695 948)" fill="transparent" />
                                    <path id="Path_1399" data-name="Path 1399"
                                        d="M18.77,119.531q.452-.6.717-.97,1.907-2.624,1.653-3.354l-.066-.114a.638.638,0,0,0-.342-.188,1.685,1.685,0,0,0-.705-.028l-3.174.023a.873.873,0,0,0-.221.005.6.6,0,0,0-.143.034l-.055.028-.044.034a.5.5,0,0,0-.121.12.782.782,0,0,0-.11.2,18.912,18.912,0,0,1-1.179,2.567q-.408.707-.749,1.226a5.829,5.829,0,0,1-.573.764,4.029,4.029,0,0,1-.419.394c-.125.1-.221.141-.286.126s-.125-.029-.187-.046a.744.744,0,0,1-.248-.279,1.287,1.287,0,0,1-.127-.445c-.022-.179-.035-.333-.038-.462s0-.312.006-.548.011-.4.011-.479q0-.433.017-.941t.027-.8q.011-.3.011-.628a2.708,2.708,0,0,0-.039-.519,1.864,1.864,0,0,0-.116-.365.607.607,0,0,0-.226-.274,1.25,1.25,0,0,0-.369-.154,7.1,7.1,0,0,0-1.488-.148,7.017,7.017,0,0,0-2.634.274,1.5,1.5,0,0,0-.419.342q-.2.251-.055.274a1.338,1.338,0,0,1,.937.491l.066.137a2.262,2.262,0,0,1,.154.525,5.5,5.5,0,0,1,.1.833,9.176,9.176,0,0,1,0,1.426q-.055.594-.1.924a1.9,1.9,0,0,1-.149.536,2.266,2.266,0,0,1-.132.251.2.2,0,0,1-.055.057.8.8,0,0,1-.3.057.686.686,0,0,1-.375-.16,2.644,2.644,0,0,1-.457-.439,5.842,5.842,0,0,1-.535-.782q-.3-.5-.617-1.186l-.176-.331q-.165-.319-.452-.93t-.507-1.181a.754.754,0,0,0-.265-.365l-.055-.034a.741.741,0,0,0-.176-.1,1.157,1.157,0,0,0-.254-.074l-3.02.023a.752.752,0,0,0-.628.217l-.044.068a.379.379,0,0,0-.033.183.935.935,0,0,0,.066.308q.661,1.609,1.438,3.1t1.35,2.408q.573.913,1.168,1.723t.788,1.038q.193.229.3.342l.276.274a6.614,6.614,0,0,0,.777.656,13.033,13.033,0,0,0,1.135.753,6.036,6.036,0,0,0,1.449.6,4.832,4.832,0,0,0,1.609.188h1.268a.859.859,0,0,0,.584-.251l.044-.057a.789.789,0,0,0,.083-.211,1.206,1.206,0,0,0,.039-.314,3.882,3.882,0,0,1,.072-.884,2.394,2.394,0,0,1,.187-.594,1.456,1.456,0,0,1,.237-.337.957.957,0,0,1,.187-.165.88.88,0,0,1,.088-.04.683.683,0,0,1,.623.177,3.725,3.725,0,0,1,.672.662q.314.394.755.884a5.226,5.226,0,0,0,.771.73l.221.137a2.66,2.66,0,0,0,.573.251,1.2,1.2,0,0,0,.617.057l2.822-.046a1.24,1.24,0,0,0,.65-.143.558.558,0,0,0,.276-.314.916.916,0,0,0,.006-.388,1.456,1.456,0,0,0-.077-.3,1.571,1.571,0,0,0-.072-.143,11.273,11.273,0,0,0-2.105-2.522l-.022-.023-.011-.012-.011-.011h-.011a12.906,12.906,0,0,1-.893-.936.9.9,0,0,1-.154-.924,8.544,8.544,0,0,1,.991-1.5Z"
                                        transform="translate(704 847.697)" fill="#3881e0" />
                                </g>
                            </svg></a></div>
                </div>
            </div>
            <div class="info">
                <div class="provider_header">
                    <b>Свободен</b>
                    <p>На сайте с 02.05.2024</p>
                </div>
                <div class="name"><a href="profile_customer.php">Константин Константинопольский</a></div>
                <p class="about">Опыт в любимой работе более 16 лет. Выполняю архитектурные малоэтажные проекты домов,
                    Дизайн проекты частных и общественных помещений.</p>
                <div class="project">
                    <img src="img/project-01.webp" alt="project">
                    <img src="img/project-02.webp" alt="project">
                    <img src="img/project-03.webp" alt="project">
                    <img src="img/project-04.webp" alt="project">
                    <img src="img/project-05.webp" alt="project">
                </div>
                <div class="service--container">
                    <div class="service">
                        <h2>Проектирование отопления</h2>
                        <p>от 250 ₽ / м²</p>
                    </div>
                    <div class="service">
                        <h2>Проектирование канализации</h2>
                        <p>от 50 ₽ / м²</p>
                    </div>
                    <div class="service">
                        <h2>Проектирование зданий</h2>
                        <p>от 50000 ₽</p>
                    </div>
                    <a href="#" class="profile_provider">Ещё 5 услуг</a>
                </div>
            </div>
        </div>
        <div class="provider">
            <div class="contact">
                <img src="img/people-02.webp" alt="avatar" class="avatar">
                <div class="grade">
                    <img src="icon/star-02.svg" alt="star" class="star">
                    <h2>4.2</h2>
                    <p>26 оценок</p>
                </div>
                <a href="profile_provider.php">Профиль</a>
                <a href="tel: +79002342387">+7 900 234-23-87</a>
                <div class="link_message">
                    <div class="link"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                viewBox="0 0 40 40">
                                <g id="Group_1178" data-name="Group 1178" transform="translate(-551 -948)">
                                    <rect id="Rectangle_2" data-name="Rectangle 2" width="40" height="40" rx="8"
                                        transform="translate(551 948)" fill="transparent" />
                                    <g id="Group_684" data-name="Group 684" transform="translate(561.601 958)">
                                        <path id="Path_275" data-name="Path 275"
                                            d="M50.635,36a10.047,10.047,0,0,0-16.1,11.623L33.473,52.8a.383.383,0,0,0,.061.3.388.388,0,0,0,.412.16l5.072-1.2A10.045,10.045,0,0,0,50.635,36ZM49.053,48.625A7.869,7.869,0,0,1,39.991,50.1l-.707-.35-3.11.736.009-.039.644-3.13-.346-.683A7.866,7.866,0,0,1,49.053,37.5a.419.419,0,0,0,.04.041A7.865,7.865,0,0,1,49.053,48.625Z"
                                            transform="translate(-33.447 -33.024)" fill="#3881e0" />
                                        <path id="Path_276" data-name="Path 276"
                                            d="M70.86,69.366a3.267,3.267,0,0,1-1.74,1.517c-1.326.32-3.36.011-5.892-2.349l-.031-.028c-2.226-2.064-2.8-3.782-2.664-5.144a3.256,3.256,0,0,1,1.265-1.93.724.724,0,0,1,1.132.26l.819,1.841a.72.72,0,0,1-.09.736l-.414.538a.713.713,0,0,0-.064.8,7.74,7.74,0,0,0,1.4,1.559,8.2,8.2,0,0,0,1.946,1.394.7.7,0,0,0,.771-.162l.481-.484a.736.736,0,0,1,.718-.184l1.946.552a.736.736,0,0,1,.412,1.088Z"
                                            transform="translate(-55.53 -56.061)" fill="#3881e0" />
                                    </g>
                                </g>
                            </svg></a></div>
                </div>
            </div>
            <div class="info">
                <div class="provider_header">
                    <b>Свободен</b>
                    <p>На сайте с 02.05.2024</p>
                </div>
                <div class="name"><a href="profile_customer.php">Анастасия Шиншиловская</a></div>
                <p class="about">Опыт в любимой работе более 16 лет. Выполняю архитектурные малоэтажные проекты домов,
                    Дизайн проекты частных и общественных помещений.</p>
                <div class="project">
                    <img src="img/project-01.webp" alt="project">
                    <img src="img/project-02.webp" alt="project">
                    <img src="img/project-03.webp" alt="project">
                    <img src="img/project-04.webp" alt="project">
                    <img src="img/project-05.webp" alt="project">
                </div>
                <div class="service--container">
                    <div class="service">
                        <h2>Проектирование отопления</h2>
                        <p>от 250 ₽ / м²</p>
                    </div>
                    <div class="service">
                        <h2>Проектирование канализации</h2>
                        <p>от 50 ₽ / м²</p>
                    </div>
                    <div class="service">
                        <h2>Проектирование зданий</h2>
                        <p>от 50000 ₽</p>
                    </div>
                    <a href="#" class="profile_provider">Ещё 5 услуг</a>
                </div>
            </div>
        </div>
        <div class="provider">
            <div class="contact">
                <img src="img/people-03.webp" alt="avatar" class="avatar">
                <div class="grade">
                    <img src="icon/star-01.svg" alt="star" class="star">
                    <h2>2.7</h2>
                    <p>235 оценок</p>
                </div>
                <a href="profile_provider.php">Профиль</a>
                <a href="tel: +79002342387">+7 900 234-23-87</a>
                <div class="link_message">
                    <div class="link"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                viewBox="0 0 40 40">
                                <g id="Group_1178" data-name="Group 1178" transform="translate(-551 -948)">
                                    <rect id="Rectangle_2" data-name="Rectangle 2" width="40" height="40" rx="8"
                                        transform="translate(551 948)" fill="transparent" />
                                    <g id="Group_684" data-name="Group 684" transform="translate(561.601 958)">
                                        <path id="Path_275" data-name="Path 275"
                                            d="M50.635,36a10.047,10.047,0,0,0-16.1,11.623L33.473,52.8a.383.383,0,0,0,.061.3.388.388,0,0,0,.412.16l5.072-1.2A10.045,10.045,0,0,0,50.635,36ZM49.053,48.625A7.869,7.869,0,0,1,39.991,50.1l-.707-.35-3.11.736.009-.039.644-3.13-.346-.683A7.866,7.866,0,0,1,49.053,37.5a.419.419,0,0,0,.04.041A7.865,7.865,0,0,1,49.053,48.625Z"
                                            transform="translate(-33.447 -33.024)" fill="#3881e0" />
                                        <path id="Path_276" data-name="Path 276"
                                            d="M70.86,69.366a3.267,3.267,0,0,1-1.74,1.517c-1.326.32-3.36.011-5.892-2.349l-.031-.028c-2.226-2.064-2.8-3.782-2.664-5.144a3.256,3.256,0,0,1,1.265-1.93.724.724,0,0,1,1.132.26l.819,1.841a.72.72,0,0,1-.09.736l-.414.538a.713.713,0,0,0-.064.8,7.74,7.74,0,0,0,1.4,1.559,8.2,8.2,0,0,0,1.946,1.394.7.7,0,0,0,.771-.162l.481-.484a.736.736,0,0,1,.718-.184l1.946.552a.736.736,0,0,1,.412,1.088Z"
                                            transform="translate(-55.53 -56.061)" fill="#3881e0" />
                                    </g>
                                </g>
                            </svg></a></div>
                    <div class="link"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                viewBox="0 0 40 40">
                                <g id="Group_1177" data-name="Group 1177" transform="translate(-599 -948)">
                                    <rect id="Rectangle_660" data-name="Rectangle 660" width="40" height="40" rx="8"
                                        transform="translate(599 948)" fill="transparent" />
                                    <path id="Path_1069" data-name="Path 1069"
                                        d="M51.959,45.23l-.335.122L33.437,51.9a.609.609,0,0,0,.053,1.178L38.2,54.371l.878,2.578.878,2.578a.836.836,0,0,0,1.348.3l2.432-2.3,4.776,3.239a1.02,1.02,0,0,0,1.565-.552l3.163-13.976A.933.933,0,0,0,51.959,45.23Zm-2.322,3.1L41.42,55.049l-.387.317a.418.418,0,0,0-.155.272l-.087.714-.238,2.007a.092.092,0,0,1-.184.015L39.7,56.369l-.69-2.053a.416.416,0,0,1,.2-.492l8.55-4.9L49.371,48C49.6,47.867,49.844,48.163,49.638,48.332Z"
                                        transform="translate(575.992 914.831)" fill="#3881E0" />
                                </g>
                            </svg></a></div>
                    <div class="link"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                viewBox="0 0 40 40">
                                <g id="Group_1180" data-name="Group 1180" transform="translate(-695 -948)">
                                    <rect id="Rectangle_680" data-name="Rectangle 680" width="40" height="40" rx="8"
                                        transform="translate(695 948)" fill="transparent" />
                                    <path id="Path_1399" data-name="Path 1399"
                                        d="M18.77,119.531q.452-.6.717-.97,1.907-2.624,1.653-3.354l-.066-.114a.638.638,0,0,0-.342-.188,1.685,1.685,0,0,0-.705-.028l-3.174.023a.873.873,0,0,0-.221.005.6.6,0,0,0-.143.034l-.055.028-.044.034a.5.5,0,0,0-.121.12.782.782,0,0,0-.11.2,18.912,18.912,0,0,1-1.179,2.567q-.408.707-.749,1.226a5.829,5.829,0,0,1-.573.764,4.029,4.029,0,0,1-.419.394c-.125.1-.221.141-.286.126s-.125-.029-.187-.046a.744.744,0,0,1-.248-.279,1.287,1.287,0,0,1-.127-.445c-.022-.179-.035-.333-.038-.462s0-.312.006-.548.011-.4.011-.479q0-.433.017-.941t.027-.8q.011-.3.011-.628a2.708,2.708,0,0,0-.039-.519,1.864,1.864,0,0,0-.116-.365.607.607,0,0,0-.226-.274,1.25,1.25,0,0,0-.369-.154,7.1,7.1,0,0,0-1.488-.148,7.017,7.017,0,0,0-2.634.274,1.5,1.5,0,0,0-.419.342q-.2.251-.055.274a1.338,1.338,0,0,1,.937.491l.066.137a2.262,2.262,0,0,1,.154.525,5.5,5.5,0,0,1,.1.833,9.176,9.176,0,0,1,0,1.426q-.055.594-.1.924a1.9,1.9,0,0,1-.149.536,2.266,2.266,0,0,1-.132.251.2.2,0,0,1-.055.057.8.8,0,0,1-.3.057.686.686,0,0,1-.375-.16,2.644,2.644,0,0,1-.457-.439,5.842,5.842,0,0,1-.535-.782q-.3-.5-.617-1.186l-.176-.331q-.165-.319-.452-.93t-.507-1.181a.754.754,0,0,0-.265-.365l-.055-.034a.741.741,0,0,0-.176-.1,1.157,1.157,0,0,0-.254-.074l-3.02.023a.752.752,0,0,0-.628.217l-.044.068a.379.379,0,0,0-.033.183.935.935,0,0,0,.066.308q.661,1.609,1.438,3.1t1.35,2.408q.573.913,1.168,1.723t.788,1.038q.193.229.3.342l.276.274a6.614,6.614,0,0,0,.777.656,13.033,13.033,0,0,0,1.135.753,6.036,6.036,0,0,0,1.449.6,4.832,4.832,0,0,0,1.609.188h1.268a.859.859,0,0,0,.584-.251l.044-.057a.789.789,0,0,0,.083-.211,1.206,1.206,0,0,0,.039-.314,3.882,3.882,0,0,1,.072-.884,2.394,2.394,0,0,1,.187-.594,1.456,1.456,0,0,1,.237-.337.957.957,0,0,1,.187-.165.88.88,0,0,1,.088-.04.683.683,0,0,1,.623.177,3.725,3.725,0,0,1,.672.662q.314.394.755.884a5.226,5.226,0,0,0,.771.73l.221.137a2.66,2.66,0,0,0,.573.251,1.2,1.2,0,0,0,.617.057l2.822-.046a1.24,1.24,0,0,0,.65-.143.558.558,0,0,0,.276-.314.916.916,0,0,0,.006-.388,1.456,1.456,0,0,0-.077-.3,1.571,1.571,0,0,0-.072-.143,11.273,11.273,0,0,0-2.105-2.522l-.022-.023-.011-.012-.011-.011h-.011a12.906,12.906,0,0,1-.893-.936.9.9,0,0,1-.154-.924,8.544,8.544,0,0,1,.991-1.5Z"
                                        transform="translate(704 847.697)" fill="#3881e0" />
                                </g>
                            </svg></a></div>
                </div>
            </div>
            <div class="info">
                <div class="provider_header">
                    <b class="block">Занят</b>
                    <p>На сайте с 02.05.2024</p>
                </div>
                <div class="name"><a href="profile_customer.php">Константин Константинопольский</a></div>
                <p class="about">Опыт в любимой работе более 16 лет. Выполняю архитектурные малоэтажные проекты домов,
                    Дизайн проекты частных и общественных помещений.</p>
                <div class="project">
                    <img src="img/project-01.webp" alt="project">
                    <img src="img/project-02.webp" alt="project">
                    <img src="img/project-03.webp" alt="project">
                    <img src="img/project-04.webp" alt="project">
                    <img src="img/project-05.webp" alt="project">
                </div>
                <div class="service--container">
                    <div class="service">
                        <h2>Проектирование отопления</h2>
                        <p>от 250 ₽ / м²</p>
                    </div>
                    <div class="service">
                        <h2>Проектирование канализации</h2>
                        <p>от 50 ₽ / м²</p>
                    </div>
                    <div class="service">
                        <h2>Проектирование зданий</h2>
                        <p>от 50000 ₽</p>
                    </div>
                    <a href="#" class="profile_provider">Ещё 5 услуг</a>
                </div>
            </div>
        </div>
        <div class="provider">
            <div class="contact">
                <img src="img/people-04.webp" alt="avatar" class="avatar">
                <div class="grade">
                    <div>
                        <img src="icon/star-02.svg" alt="star" class="star">
                        <h2>4.1</h2>
                    </div>
                    <p>12 оценок</p>
                </div>
                <a href="profile_provider.php">Профиль</a>
                <a href="tel: +79002342387">+7 900 234-23-87</a>
                <div class="link_message">
                    <div class="link"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                viewBox="0 0 40 40">
                                <g id="Group_1178" data-name="Group 1178" transform="translate(-551 -948)">
                                    <rect id="Rectangle_2" data-name="Rectangle 2" width="40" height="40" rx="8"
                                        transform="translate(551 948)" fill="transparent" />
                                    <g id="Group_684" data-name="Group 684" transform="translate(561.601 958)">
                                        <path id="Path_275" data-name="Path 275"
                                            d="M50.635,36a10.047,10.047,0,0,0-16.1,11.623L33.473,52.8a.383.383,0,0,0,.061.3.388.388,0,0,0,.412.16l5.072-1.2A10.045,10.045,0,0,0,50.635,36ZM49.053,48.625A7.869,7.869,0,0,1,39.991,50.1l-.707-.35-3.11.736.009-.039.644-3.13-.346-.683A7.866,7.866,0,0,1,49.053,37.5a.419.419,0,0,0,.04.041A7.865,7.865,0,0,1,49.053,48.625Z"
                                            transform="translate(-33.447 -33.024)" fill="#3881e0" />
                                        <path id="Path_276" data-name="Path 276"
                                            d="M70.86,69.366a3.267,3.267,0,0,1-1.74,1.517c-1.326.32-3.36.011-5.892-2.349l-.031-.028c-2.226-2.064-2.8-3.782-2.664-5.144a3.256,3.256,0,0,1,1.265-1.93.724.724,0,0,1,1.132.26l.819,1.841a.72.72,0,0,1-.09.736l-.414.538a.713.713,0,0,0-.064.8,7.74,7.74,0,0,0,1.4,1.559,8.2,8.2,0,0,0,1.946,1.394.7.7,0,0,0,.771-.162l.481-.484a.736.736,0,0,1,.718-.184l1.946.552a.736.736,0,0,1,.412,1.088Z"
                                            transform="translate(-55.53 -56.061)" fill="#3881e0" />
                                    </g>
                                </g>
                            </svg></a></div>
                    <div class="link"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                viewBox="0 0 40 40">
                                <g id="Group_1177" data-name="Group 1177" transform="translate(-599 -948)">
                                    <rect id="Rectangle_660" data-name="Rectangle 660" width="40" height="40" rx="8"
                                        transform="translate(599 948)" fill="transparent" />
                                    <path id="Path_1069" data-name="Path 1069"
                                        d="M51.959,45.23l-.335.122L33.437,51.9a.609.609,0,0,0,.053,1.178L38.2,54.371l.878,2.578.878,2.578a.836.836,0,0,0,1.348.3l2.432-2.3,4.776,3.239a1.02,1.02,0,0,0,1.565-.552l3.163-13.976A.933.933,0,0,0,51.959,45.23Zm-2.322,3.1L41.42,55.049l-.387.317a.418.418,0,0,0-.155.272l-.087.714-.238,2.007a.092.092,0,0,1-.184.015L39.7,56.369l-.69-2.053a.416.416,0,0,1,.2-.492l8.55-4.9L49.371,48C49.6,47.867,49.844,48.163,49.638,48.332Z"
                                        transform="translate(575.992 914.831)" fill="#3881E0" />
                                </g>
                            </svg></a></div>
                    <div class="link"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                viewBox="0 0 40 40">
                                <g id="Group_1180" data-name="Group 1180" transform="translate(-695 -948)">
                                    <rect id="Rectangle_680" data-name="Rectangle 680" width="40" height="40" rx="8"
                                        transform="translate(695 948)" fill="transparent" />
                                    <path id="Path_1399" data-name="Path 1399"
                                        d="M18.77,119.531q.452-.6.717-.97,1.907-2.624,1.653-3.354l-.066-.114a.638.638,0,0,0-.342-.188,1.685,1.685,0,0,0-.705-.028l-3.174.023a.873.873,0,0,0-.221.005.6.6,0,0,0-.143.034l-.055.028-.044.034a.5.5,0,0,0-.121.12.782.782,0,0,0-.11.2,18.912,18.912,0,0,1-1.179,2.567q-.408.707-.749,1.226a5.829,5.829,0,0,1-.573.764,4.029,4.029,0,0,1-.419.394c-.125.1-.221.141-.286.126s-.125-.029-.187-.046a.744.744,0,0,1-.248-.279,1.287,1.287,0,0,1-.127-.445c-.022-.179-.035-.333-.038-.462s0-.312.006-.548.011-.4.011-.479q0-.433.017-.941t.027-.8q.011-.3.011-.628a2.708,2.708,0,0,0-.039-.519,1.864,1.864,0,0,0-.116-.365.607.607,0,0,0-.226-.274,1.25,1.25,0,0,0-.369-.154,7.1,7.1,0,0,0-1.488-.148,7.017,7.017,0,0,0-2.634.274,1.5,1.5,0,0,0-.419.342q-.2.251-.055.274a1.338,1.338,0,0,1,.937.491l.066.137a2.262,2.262,0,0,1,.154.525,5.5,5.5,0,0,1,.1.833,9.176,9.176,0,0,1,0,1.426q-.055.594-.1.924a1.9,1.9,0,0,1-.149.536,2.266,2.266,0,0,1-.132.251.2.2,0,0,1-.055.057.8.8,0,0,1-.3.057.686.686,0,0,1-.375-.16,2.644,2.644,0,0,1-.457-.439,5.842,5.842,0,0,1-.535-.782q-.3-.5-.617-1.186l-.176-.331q-.165-.319-.452-.93t-.507-1.181a.754.754,0,0,0-.265-.365l-.055-.034a.741.741,0,0,0-.176-.1,1.157,1.157,0,0,0-.254-.074l-3.02.023a.752.752,0,0,0-.628.217l-.044.068a.379.379,0,0,0-.033.183.935.935,0,0,0,.066.308q.661,1.609,1.438,3.1t1.35,2.408q.573.913,1.168,1.723t.788,1.038q.193.229.3.342l.276.274a6.614,6.614,0,0,0,.777.656,13.033,13.033,0,0,0,1.135.753,6.036,6.036,0,0,0,1.449.6,4.832,4.832,0,0,0,1.609.188h1.268a.859.859,0,0,0,.584-.251l.044-.057a.789.789,0,0,0,.083-.211,1.206,1.206,0,0,0,.039-.314,3.882,3.882,0,0,1,.072-.884,2.394,2.394,0,0,1,.187-.594,1.456,1.456,0,0,1,.237-.337.957.957,0,0,1,.187-.165.88.88,0,0,1,.088-.04.683.683,0,0,1,.623.177,3.725,3.725,0,0,1,.672.662q.314.394.755.884a5.226,5.226,0,0,0,.771.73l.221.137a2.66,2.66,0,0,0,.573.251,1.2,1.2,0,0,0,.617.057l2.822-.046a1.24,1.24,0,0,0,.65-.143.558.558,0,0,0,.276-.314.916.916,0,0,0,.006-.388,1.456,1.456,0,0,0-.077-.3,1.571,1.571,0,0,0-.072-.143,11.273,11.273,0,0,0-2.105-2.522l-.022-.023-.011-.012-.011-.011h-.011a12.906,12.906,0,0,1-.893-.936.9.9,0,0,1-.154-.924,8.544,8.544,0,0,1,.991-1.5Z"
                                        transform="translate(704 847.697)" fill="#3881e0" />
                                </g>
                            </svg></a></div>
                </div>
            </div>
            <div class="info">
                <div class="provider_header">
                    <b class="block">Занят</b>
                    <p>На сайте с 02.05.2024</p>
                </div>
                <div class="name"><a href="profile_customer.php">Валентина Бориславская</a></div>
                <p class="about">Опыт в любимой работе более 16 лет. Выполняю архитектурные малоэтажные проекты домов,
                    Дизайн проекты частных и общественных помещений.</p>
                <div class="project">
                    <img src="img/project-01.webp" alt="project">
                    <img src="img/project-02.webp" alt="project">
                    <img src="img/project-03.webp" alt="project">
                    <img src="img/project-04.webp" alt="project">
                    <img src="img/project-05.webp" alt="project">
                </div>
                <div class="service--container">
                    <div class="service">
                        <h2>Проектирование отопления</h2>
                        <p>от 250 ₽ / м²</p>
                    </div>
                    <div class="service">
                        <h2>Проектирование канализации</h2>
                        <p>от 50 ₽ / м²</p>
                    </div>
                    <div class="service">
                        <h2>Проектирование зданий</h2>
                        <p>от 50000 ₽</p>
                    </div>
                    <a href="#" class="profile_provider">Ещё 5 услуг</a>
                </div>
            </div>
        </div>
        <div class="provider">
            <div class="contact">
                <img src="img/people-05.webp" alt="avatar" class="avatar">
                <div class="grade">
                    <img src="icon/star-01.svg" alt="star" class="star">
                    <h2>2.0</h2>
                    <p>1 оценка</p>
                </div>
                <a href="profile_provider.php">Профиль</a>
                <a href="tel: +79002342387">+7 900 234-23-87</a>
                <div class="link_message">
                    <div class="link"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                viewBox="0 0 40 40">
                                <g id="Group_1178" data-name="Group 1178" transform="translate(-551 -948)">
                                    <rect id="Rectangle_2" data-name="Rectangle 2" width="40" height="40" rx="8"
                                        transform="translate(551 948)" fill="transparent" />
                                    <g id="Group_684" data-name="Group 684" transform="translate(561.601 958)">
                                        <path id="Path_275" data-name="Path 275"
                                            d="M50.635,36a10.047,10.047,0,0,0-16.1,11.623L33.473,52.8a.383.383,0,0,0,.061.3.388.388,0,0,0,.412.16l5.072-1.2A10.045,10.045,0,0,0,50.635,36ZM49.053,48.625A7.869,7.869,0,0,1,39.991,50.1l-.707-.35-3.11.736.009-.039.644-3.13-.346-.683A7.866,7.866,0,0,1,49.053,37.5a.419.419,0,0,0,.04.041A7.865,7.865,0,0,1,49.053,48.625Z"
                                            transform="translate(-33.447 -33.024)" fill="#3881e0" />
                                        <path id="Path_276" data-name="Path 276"
                                            d="M70.86,69.366a3.267,3.267,0,0,1-1.74,1.517c-1.326.32-3.36.011-5.892-2.349l-.031-.028c-2.226-2.064-2.8-3.782-2.664-5.144a3.256,3.256,0,0,1,1.265-1.93.724.724,0,0,1,1.132.26l.819,1.841a.72.72,0,0,1-.09.736l-.414.538a.713.713,0,0,0-.064.8,7.74,7.74,0,0,0,1.4,1.559,8.2,8.2,0,0,0,1.946,1.394.7.7,0,0,0,.771-.162l.481-.484a.736.736,0,0,1,.718-.184l1.946.552a.736.736,0,0,1,.412,1.088Z"
                                            transform="translate(-55.53 -56.061)" fill="#3881e0" />
                                    </g>
                                </g>
                            </svg></a></div>
                    <div class="link"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                viewBox="0 0 40 40">
                                <g id="Group_1177" data-name="Group 1177" transform="translate(-599 -948)">
                                    <rect id="Rectangle_660" data-name="Rectangle 660" width="40" height="40" rx="8"
                                        transform="translate(599 948)" fill="transparent" />
                                    <path id="Path_1069" data-name="Path 1069"
                                        d="M51.959,45.23l-.335.122L33.437,51.9a.609.609,0,0,0,.053,1.178L38.2,54.371l.878,2.578.878,2.578a.836.836,0,0,0,1.348.3l2.432-2.3,4.776,3.239a1.02,1.02,0,0,0,1.565-.552l3.163-13.976A.933.933,0,0,0,51.959,45.23Zm-2.322,3.1L41.42,55.049l-.387.317a.418.418,0,0,0-.155.272l-.087.714-.238,2.007a.092.092,0,0,1-.184.015L39.7,56.369l-.69-2.053a.416.416,0,0,1,.2-.492l8.55-4.9L49.371,48C49.6,47.867,49.844,48.163,49.638,48.332Z"
                                        transform="translate(575.992 914.831)" fill="#3881E0" />
                                </g>
                            </svg></a></div>
                </div>
            </div>
            <div class="info">
                <div class="provider_header">
                    <b class="block">Занят</b>
                    <p>На сайте с 02.05.2024</p>
                </div>
                <div class="name"><a href="profile_customer.php">Константин Константинопольский</a></div>
                <p class="about">Опыт в любимой работе более 16 лет. Выполняю архитектурные малоэтажные проекты домов,
                    Дизайн проекты частных и общественных помещений.</p>
                <div class="project">
                    <img src="img/project-01.webp" alt="project">
                    <img src="img/project-02.webp" alt="project">
                    <img src="img/project-03.webp" alt="project">
                    <img src="img/project-04.webp" alt="project">
                    <img src="img/project-05.webp" alt="project">
                </div>
                <div class="service--container">
                    <div class="service">
                        <h2>Проектирование отопления</h2>
                        <p>от 250 ₽ / м²</p>
                    </div>
                    <div class="service">
                        <h2>Проектирование канализации</h2>
                        <p>от 50 ₽ / м²</p>
                    </div>
                    <div class="service">
                        <h2>Проектирование зданий</h2>
                        <p>от 50000 ₽</p>
                    </div>
                    <a href="#" class="profile_provider">Ещё 5 услуг</a>
                </div>
            </div>
        </div>
        <div class="provider">
            <div class="contact">
                <img src="img/people-06.webp" alt="avatar" class="avatar">
                <div class="grade">
                    <img src="icon/star-02.svg" alt="star" class="star">
                    <h2>5.0</h2>
                    <p>3 оценки</p>
                </div>
                <a href="profile_provider.php">Профиль</a>
                <a href="tel: +79002342387">+7 900 234-23-87</a>
                <div class="link_message">
                    <div class="link"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                viewBox="0 0 40 40">
                                <g id="Group_1178" data-name="Group 1178" transform="translate(-551 -948)">
                                    <rect id="Rectangle_2" data-name="Rectangle 2" width="40" height="40" rx="8"
                                        transform="translate(551 948)" fill="transparent" />
                                    <g id="Group_684" data-name="Group 684" transform="translate(561.601 958)">
                                        <path id="Path_275" data-name="Path 275"
                                            d="M50.635,36a10.047,10.047,0,0,0-16.1,11.623L33.473,52.8a.383.383,0,0,0,.061.3.388.388,0,0,0,.412.16l5.072-1.2A10.045,10.045,0,0,0,50.635,36ZM49.053,48.625A7.869,7.869,0,0,1,39.991,50.1l-.707-.35-3.11.736.009-.039.644-3.13-.346-.683A7.866,7.866,0,0,1,49.053,37.5a.419.419,0,0,0,.04.041A7.865,7.865,0,0,1,49.053,48.625Z"
                                            transform="translate(-33.447 -33.024)" fill="#3881e0" />
                                        <path id="Path_276" data-name="Path 276"
                                            d="M70.86,69.366a3.267,3.267,0,0,1-1.74,1.517c-1.326.32-3.36.011-5.892-2.349l-.031-.028c-2.226-2.064-2.8-3.782-2.664-5.144a3.256,3.256,0,0,1,1.265-1.93.724.724,0,0,1,1.132.26l.819,1.841a.72.72,0,0,1-.09.736l-.414.538a.713.713,0,0,0-.064.8,7.74,7.74,0,0,0,1.4,1.559,8.2,8.2,0,0,0,1.946,1.394.7.7,0,0,0,.771-.162l.481-.484a.736.736,0,0,1,.718-.184l1.946.552a.736.736,0,0,1,.412,1.088Z"
                                            transform="translate(-55.53 -56.061)" fill="#3881e0" />
                                    </g>
                                </g>
                            </svg></a></div>
                </div>
            </div>
            <div class="info">
                <div class="provider_header">
                    <b>Свободен</b>
                    <p>На сайте с 02.05.2024</p>
                </div>
                <div class="name"><a href="profile_customer.php">Анастасия Шиншиловская</a></div>
                <p class="about">Опыт в любимой работе более 16 лет. Выполняю архитектурные малоэтажные проекты домов,
                    Дизайн проекты частных и общественных помещений.</p>
                <div class="project">
                    <img src="img/project-01.webp" alt="project">
                    <img src="img/project-02.webp" alt="project">
                    <img src="img/project-03.webp" alt="project">
                    <img src="img/project-04.webp" alt="project">
                    <img src="img/project-05.webp" alt="project">
                </div>
                <div class="service--container">
                    <div class="service">
                        <h2>Проектирование отопления</h2>
                        <p>от 250 ₽ / м²</p>
                    </div>
                    <div class="service">
                        <h2>Проектирование канализации</h2>
                        <p>от 50 ₽ / м²</p>
                    </div>
                    <div class="service">
                        <h2>Проектирование зданий</h2>
                        <p>от 50000 ₽</p>
                    </div>
                    <a href="#" class="profile_provider">Ещё 5 услуг</a>
                </div>
            </div>
        </div>
        <div class="provider__mobile">
            <div class="user__info">
                <?php if ($_SESSION['user']['avatar']): ?>
                    <div class="avatar"><img src="<?php $_SESSION['user']['avatar'] ?>" alt="avatar"></div>
                <?php else: ?>
                    <div class="avatar"><img src="img/user_default.svg" alt="avatar"></div>
                <?php endif; ?>
                <div class="info__text">
                    <h3><span style="color: #1AA248;">Свободен</span>На сайте с 02.05.2024</h3>
                    <a href="profile_provider.php">Константин Константинопольски</a>
                </div>
            </div>
            <div class="grade">
                <div>
                    <img src="icon/star-03.svg" alt="star" class="star">
                    <h2>3.2</h2>
                </div>
                <p>7 оценок</p>
            </div>
            <div class="about"><p>Опыт в любимой работе более 16 лет. Выполняю архитектурные малоэтажные проекты домов, Дизайн проекты частных и общественных помещений.</p></div>
            <div class="project">
                <img src="img/project-01.webp" alt="project">
                <img src="img/project-02.webp" alt="project">
                <img src="img/project-03.webp" alt="project">
                <img src="img/project-04.webp" alt="project">
            </div>
            <div class="service--container">
                    <div class="service">
                        <h2>Проектирование отопления</h2>
                        <p>от 250 ₽ / м²</p>
                    </div>
                    <div class="service">
                        <h2>Проектирование канализации</h2>
                        <p>от 50 ₽ / м²</p>
                    </div>
                    <div class="service">
                        <h2>Проектирование зданий</h2>
                        <p>от 50000 ₽</p>
                    </div>
                    <a href="#" class="profile_provider">Ещё 5 услуг</a>
            </div>
            <div class="contact">
                <a href="profile_provider.php">В профиль</a>
                <a href="tel: +79002342387">+7 900 234-23-87</a>
                <div class="icon">
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                                <g id="Group_1178" data-name="Group 1178" transform="translate(-551 -948)">
                                    <rect id="Rectangle_2" data-name="Rectangle 2" width="40" height="40" rx="8"
                                        transform="translate(551 948)" fill="transparent" />
                                    <g id="Group_684" data-name="Group 684" transform="translate(561.601 958)">
                                        <path id="Path_275" data-name="Path 275"
                                            d="M50.635,36a10.047,10.047,0,0,0-16.1,11.623L33.473,52.8a.383.383,0,0,0,.061.3.388.388,0,0,0,.412.16l5.072-1.2A10.045,10.045,0,0,0,50.635,36ZM49.053,48.625A7.869,7.869,0,0,1,39.991,50.1l-.707-.35-3.11.736.009-.039.644-3.13-.346-.683A7.866,7.866,0,0,1,49.053,37.5a.419.419,0,0,0,.04.041A7.865,7.865,0,0,1,49.053,48.625Z"
                                            transform="translate(-33.447 -33.024)" fill="#3881e0" />
                                        <path id="Path_276" data-name="Path 276"
                                            d="M70.86,69.366a3.267,3.267,0,0,1-1.74,1.517c-1.326.32-3.36.011-5.892-2.349l-.031-.028c-2.226-2.064-2.8-3.782-2.664-5.144a3.256,3.256,0,0,1,1.265-1.93.724.724,0,0,1,1.132.26l.819,1.841a.72.72,0,0,1-.09.736l-.414.538a.713.713,0,0,0-.064.8,7.74,7.74,0,0,0,1.4,1.559,8.2,8.2,0,0,0,1.946,1.394.7.7,0,0,0,.771-.162l.481-.484a.736.736,0,0,1,.718-.184l1.946.552a.736.736,0,0,1,.412,1.088Z"
                                            transform="translate(-55.53 -56.061)" fill="#3881e0" />
                                    </g>
                                </g>
                            </svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                                <g id="Group_1177" data-name="Group 1177" transform="translate(-599 -948)">
                                    <rect id="Rectangle_660" data-name="Rectangle 660" width="40" height="40" rx="8"
                                        transform="translate(599 948)" fill="transparent" />
                                    <path id="Path_1069" data-name="Path 1069"
                                        d="M51.959,45.23l-.335.122L33.437,51.9a.609.609,0,0,0,.053,1.178L38.2,54.371l.878,2.578.878,2.578a.836.836,0,0,0,1.348.3l2.432-2.3,4.776,3.239a1.02,1.02,0,0,0,1.565-.552l3.163-13.976A.933.933,0,0,0,51.959,45.23Zm-2.322,3.1L41.42,55.049l-.387.317a.418.418,0,0,0-.155.272l-.087.714-.238,2.007a.092.092,0,0,1-.184.015L39.7,56.369l-.69-2.053a.416.416,0,0,1,.2-.492l8.55-4.9L49.371,48C49.6,47.867,49.844,48.163,49.638,48.332Z"
                                        transform="translate(575.992 914.831)" fill="#3881E0" />
                                </g>
                            </svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                                <g id="Group_1179" data-name="Group 1179" transform="translate(-647 -948)">
                                    <rect id="Rectangle_421" data-name="Rectangle 421" width="40" height="40" rx="8"
                                        transform="translate(647 948)" fill="#eef6ff" />
                                    <g id="www.flaticon.com_6_" data-name="www.flaticon.com (6)"
                                        transform="translate(655.62 958.013)">
                                        <g id="Group_951" data-name="Group 951" transform="translate(1.38 -0.013)">
                                            <path id="Path_1409" data-name="Path 1409"
                                                d="M21.219,12.656c.652-5.491-.313-8.958-2.055-10.526h0C16.353-.548,6.857-.944,3.494,2.25c-1.511,1.563-2.043,3.856-2.1,6.695s-.128,8.16,4.83,9.6h0l0,2.2s-.034.893.537,1.072c.652.211.948-.2,2.976-2.627a18.566,18.566,0,0,0,6.295-.478c.685-.23,4.562-.743,5.189-6.062ZM10.07,17.646s-2.147,2.678-2.815,3.373c-.219.226-.458.2-.455-.243,0-.294.016-3.659.016-3.659-4.2-1.2-3.955-5.734-3.909-8.1S3.386,4.7,4.665,3.394c2.951-2.767,11.276-2.148,13.4-.155,2.593,2.3,1.67,8.793,1.675,9.014-.533,4.441-3.674,4.722-4.252,4.914a17.129,17.129,0,0,1-5.415.479Z"
                                                transform="translate(-1.38 0.013)" fill="#3881e0" />
                                            <path id="Path_1410" data-name="Path 1410"
                                                d="M12.2,4.3a.276.276,0,0,0,0,.551c2.721.021,4.963,1.918,4.987,5.4a.267.267,0,1,0,.533,0h0C17.686,6.492,15.239,4.318,12.2,4.3Z"
                                                transform="translate(-2.318 -0.37)" fill="#3881e0" />
                                            <path id="Path_1411" data-name="Path 1411"
                                                d="M15.269,9.73a.267.267,0,1,0,.533.013,3.69,3.69,0,0,0-3.625-3.95.277.277,0,0,0-.037.551,3.145,3.145,0,0,1,3.13,3.386Zm-.574,2.351a.842.842,0,0,0-1.1.158l-.4.513a.709.709,0,0,1-.578.226,5.288,5.288,0,0,1-3.48-3.6.766.766,0,0,1,.218-.6l.5-.41a.913.913,0,0,0,.152-1.136A11.84,11.84,0,0,0,8.651,5.274a.733.733,0,0,0-.986-.167H7.657c-.788.461-1.651,1.324-1.375,2.212a14.905,14.905,0,0,0,4.1,6.178A15.748,15.748,0,0,0,14.6,15.91l.008.013c.858.286,1.693-.61,2.138-1.422v-.006a.781.781,0,0,0-.157-1.008,10.741,10.741,0,0,0-1.891-1.4Z"
                                                transform="translate(-1.811 -0.432)" fill="#3881e0" />
                                            <path id="Path_1412" data-name="Path 1412"
                                                d="M13.145,8.05c.876.051,1.3.508,1.346,1.448a.267.267,0,1,0,.533-.026A1.829,1.829,0,0,0,13.174,7.5a.276.276,0,0,0-.029.551Z"
                                                transform="translate(-2.404 -0.655)" fill="#3881e0" />
                                        </g>
                                    </g>
                                </g>
                            </svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                                <g id="Group_1180" data-name="Group 1180" transform="translate(-695 -948)">
                                    <rect id="Rectangle_680" data-name="Rectangle 680" width="40" height="40" rx="8"
                                        transform="translate(695 948)" fill="transparent" />
                                    <path id="Path_1399" data-name="Path 1399"
                                        d="M18.77,119.531q.452-.6.717-.97,1.907-2.624,1.653-3.354l-.066-.114a.638.638,0,0,0-.342-.188,1.685,1.685,0,0,0-.705-.028l-3.174.023a.873.873,0,0,0-.221.005.6.6,0,0,0-.143.034l-.055.028-.044.034a.5.5,0,0,0-.121.12.782.782,0,0,0-.11.2,18.912,18.912,0,0,1-1.179,2.567q-.408.707-.749,1.226a5.829,5.829,0,0,1-.573.764,4.029,4.029,0,0,1-.419.394c-.125.1-.221.141-.286.126s-.125-.029-.187-.046a.744.744,0,0,1-.248-.279,1.287,1.287,0,0,1-.127-.445c-.022-.179-.035-.333-.038-.462s0-.312.006-.548.011-.4.011-.479q0-.433.017-.941t.027-.8q.011-.3.011-.628a2.708,2.708,0,0,0-.039-.519,1.864,1.864,0,0,0-.116-.365.607.607,0,0,0-.226-.274,1.25,1.25,0,0,0-.369-.154,7.1,7.1,0,0,0-1.488-.148,7.017,7.017,0,0,0-2.634.274,1.5,1.5,0,0,0-.419.342q-.2.251-.055.274a1.338,1.338,0,0,1,.937.491l.066.137a2.262,2.262,0,0,1,.154.525,5.5,5.5,0,0,1,.1.833,9.176,9.176,0,0,1,0,1.426q-.055.594-.1.924a1.9,1.9,0,0,1-.149.536,2.266,2.266,0,0,1-.132.251.2.2,0,0,1-.055.057.8.8,0,0,1-.3.057.686.686,0,0,1-.375-.16,2.644,2.644,0,0,1-.457-.439,5.842,5.842,0,0,1-.535-.782q-.3-.5-.617-1.186l-.176-.331q-.165-.319-.452-.93t-.507-1.181a.754.754,0,0,0-.265-.365l-.055-.034a.741.741,0,0,0-.176-.1,1.157,1.157,0,0,0-.254-.074l-3.02.023a.752.752,0,0,0-.628.217l-.044.068a.379.379,0,0,0-.033.183.935.935,0,0,0,.066.308q.661,1.609,1.438,3.1t1.35,2.408q.573.913,1.168,1.723t.788,1.038q.193.229.3.342l.276.274a6.614,6.614,0,0,0,.777.656,13.033,13.033,0,0,0,1.135.753,6.036,6.036,0,0,0,1.449.6,4.832,4.832,0,0,0,1.609.188h1.268a.859.859,0,0,0,.584-.251l.044-.057a.789.789,0,0,0,.083-.211,1.206,1.206,0,0,0,.039-.314,3.882,3.882,0,0,1,.072-.884,2.394,2.394,0,0,1,.187-.594,1.456,1.456,0,0,1,.237-.337.957.957,0,0,1,.187-.165.88.88,0,0,1,.088-.04.683.683,0,0,1,.623.177,3.725,3.725,0,0,1,.672.662q.314.394.755.884a5.226,5.226,0,0,0,.771.73l.221.137a2.66,2.66,0,0,0,.573.251,1.2,1.2,0,0,0,.617.057l2.822-.046a1.24,1.24,0,0,0,.65-.143.558.558,0,0,0,.276-.314.916.916,0,0,0,.006-.388,1.456,1.456,0,0,0-.077-.3,1.571,1.571,0,0,0-.072-.143,11.273,11.273,0,0,0-2.105-2.522l-.022-.023-.011-.012-.011-.011h-.011a12.906,12.906,0,0,1-.893-.936.9.9,0,0,1-.154-.924,8.544,8.544,0,0,1,.991-1.5Z"
                                        transform="translate(704 847.697)" fill="#3881e0" />
                                </g>
                            </svg></a>
                </div>
            </div>
        </div>
        <div class="provider__mobile">
            <div class="user__info">
                <?php if ($_SESSION['user']['avatar']): ?>
                    <div class="avatar"><img src="<?php $_SESSION['user']['avatar'] ?>" alt="avatar"></div>
                <?php else: ?>
                    <div class="avatar"><img src="img/user_default.svg" alt="avatar"></div>
                <?php endif; ?>
                <div class="info__text">
                    <h3><span style="color: #1AA248;">Свободен</span>На сайте с 02.05.2024</h3>
                    <a href="profile_provider.php">Константин Константинопольски</a>
                </div>
            </div>
            <div class="grade">
                <div>
                    <img src="icon/star-03.svg" alt="star" class="star">
                    <h2>3.2</h2>
                </div>
                <p>7 оценок</p>
            </div>
            <div class="about"><p>Опыт в любимой работе более 16 лет. Выполняю архитектурные малоэтажные проекты домов, Дизайн проекты частных и общественных помещений.</p></div>
            <div class="project">
                <img src="img/project-01.webp" alt="project">
                <img src="img/project-02.webp" alt="project">
                <img src="img/project-03.webp" alt="project">
                <img src="img/project-04.webp" alt="project">
            </div>
            <div class="service--container">
                    <div class="service">
                        <h2>Проектирование отопления</h2>
                        <p>от 250 ₽ / м²</p>
                    </div>
                    <div class="service">
                        <h2>Проектирование канализации</h2>
                        <p>от 50 ₽ / м²</p>
                    </div>
                    <div class="service">
                        <h2>Проектирование зданий</h2>
                        <p>от 50000 ₽</p>
                    </div>
                    <a href="#" class="profile_provider">Ещё 5 услуг</a>
            </div>
            <div class="contact">
                <a href="profile_provider.php">В профиль</a>
                <a href="tel: +79002342387">+7 900 234-23-87</a>
                <div class="icon">
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                                <g id="Group_1178" data-name="Group 1178" transform="translate(-551 -948)">
                                    <rect id="Rectangle_2" data-name="Rectangle 2" width="40" height="40" rx="8"
                                        transform="translate(551 948)" fill="transparent" />
                                    <g id="Group_684" data-name="Group 684" transform="translate(561.601 958)">
                                        <path id="Path_275" data-name="Path 275"
                                            d="M50.635,36a10.047,10.047,0,0,0-16.1,11.623L33.473,52.8a.383.383,0,0,0,.061.3.388.388,0,0,0,.412.16l5.072-1.2A10.045,10.045,0,0,0,50.635,36ZM49.053,48.625A7.869,7.869,0,0,1,39.991,50.1l-.707-.35-3.11.736.009-.039.644-3.13-.346-.683A7.866,7.866,0,0,1,49.053,37.5a.419.419,0,0,0,.04.041A7.865,7.865,0,0,1,49.053,48.625Z"
                                            transform="translate(-33.447 -33.024)" fill="#3881e0" />
                                        <path id="Path_276" data-name="Path 276"
                                            d="M70.86,69.366a3.267,3.267,0,0,1-1.74,1.517c-1.326.32-3.36.011-5.892-2.349l-.031-.028c-2.226-2.064-2.8-3.782-2.664-5.144a3.256,3.256,0,0,1,1.265-1.93.724.724,0,0,1,1.132.26l.819,1.841a.72.72,0,0,1-.09.736l-.414.538a.713.713,0,0,0-.064.8,7.74,7.74,0,0,0,1.4,1.559,8.2,8.2,0,0,0,1.946,1.394.7.7,0,0,0,.771-.162l.481-.484a.736.736,0,0,1,.718-.184l1.946.552a.736.736,0,0,1,.412,1.088Z"
                                            transform="translate(-55.53 -56.061)" fill="#3881e0" />
                                    </g>
                                </g>
                            </svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                                <g id="Group_1177" data-name="Group 1177" transform="translate(-599 -948)">
                                    <rect id="Rectangle_660" data-name="Rectangle 660" width="40" height="40" rx="8"
                                        transform="translate(599 948)" fill="transparent" />
                                    <path id="Path_1069" data-name="Path 1069"
                                        d="M51.959,45.23l-.335.122L33.437,51.9a.609.609,0,0,0,.053,1.178L38.2,54.371l.878,2.578.878,2.578a.836.836,0,0,0,1.348.3l2.432-2.3,4.776,3.239a1.02,1.02,0,0,0,1.565-.552l3.163-13.976A.933.933,0,0,0,51.959,45.23Zm-2.322,3.1L41.42,55.049l-.387.317a.418.418,0,0,0-.155.272l-.087.714-.238,2.007a.092.092,0,0,1-.184.015L39.7,56.369l-.69-2.053a.416.416,0,0,1,.2-.492l8.55-4.9L49.371,48C49.6,47.867,49.844,48.163,49.638,48.332Z"
                                        transform="translate(575.992 914.831)" fill="#3881E0" />
                                </g>
                            </svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                                <g id="Group_1179" data-name="Group 1179" transform="translate(-647 -948)">
                                    <rect id="Rectangle_421" data-name="Rectangle 421" width="40" height="40" rx="8"
                                        transform="translate(647 948)" fill="#eef6ff" />
                                    <g id="www.flaticon.com_6_" data-name="www.flaticon.com (6)"
                                        transform="translate(655.62 958.013)">
                                        <g id="Group_951" data-name="Group 951" transform="translate(1.38 -0.013)">
                                            <path id="Path_1409" data-name="Path 1409"
                                                d="M21.219,12.656c.652-5.491-.313-8.958-2.055-10.526h0C16.353-.548,6.857-.944,3.494,2.25c-1.511,1.563-2.043,3.856-2.1,6.695s-.128,8.16,4.83,9.6h0l0,2.2s-.034.893.537,1.072c.652.211.948-.2,2.976-2.627a18.566,18.566,0,0,0,6.295-.478c.685-.23,4.562-.743,5.189-6.062ZM10.07,17.646s-2.147,2.678-2.815,3.373c-.219.226-.458.2-.455-.243,0-.294.016-3.659.016-3.659-4.2-1.2-3.955-5.734-3.909-8.1S3.386,4.7,4.665,3.394c2.951-2.767,11.276-2.148,13.4-.155,2.593,2.3,1.67,8.793,1.675,9.014-.533,4.441-3.674,4.722-4.252,4.914a17.129,17.129,0,0,1-5.415.479Z"
                                                transform="translate(-1.38 0.013)" fill="#3881e0" />
                                            <path id="Path_1410" data-name="Path 1410"
                                                d="M12.2,4.3a.276.276,0,0,0,0,.551c2.721.021,4.963,1.918,4.987,5.4a.267.267,0,1,0,.533,0h0C17.686,6.492,15.239,4.318,12.2,4.3Z"
                                                transform="translate(-2.318 -0.37)" fill="#3881e0" />
                                            <path id="Path_1411" data-name="Path 1411"
                                                d="M15.269,9.73a.267.267,0,1,0,.533.013,3.69,3.69,0,0,0-3.625-3.95.277.277,0,0,0-.037.551,3.145,3.145,0,0,1,3.13,3.386Zm-.574,2.351a.842.842,0,0,0-1.1.158l-.4.513a.709.709,0,0,1-.578.226,5.288,5.288,0,0,1-3.48-3.6.766.766,0,0,1,.218-.6l.5-.41a.913.913,0,0,0,.152-1.136A11.84,11.84,0,0,0,8.651,5.274a.733.733,0,0,0-.986-.167H7.657c-.788.461-1.651,1.324-1.375,2.212a14.905,14.905,0,0,0,4.1,6.178A15.748,15.748,0,0,0,14.6,15.91l.008.013c.858.286,1.693-.61,2.138-1.422v-.006a.781.781,0,0,0-.157-1.008,10.741,10.741,0,0,0-1.891-1.4Z"
                                                transform="translate(-1.811 -0.432)" fill="#3881e0" />
                                            <path id="Path_1412" data-name="Path 1412"
                                                d="M13.145,8.05c.876.051,1.3.508,1.346,1.448a.267.267,0,1,0,.533-.026A1.829,1.829,0,0,0,13.174,7.5a.276.276,0,0,0-.029.551Z"
                                                transform="translate(-2.404 -0.655)" fill="#3881e0" />
                                        </g>
                                    </g>
                                </g>
                            </svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                                <g id="Group_1180" data-name="Group 1180" transform="translate(-695 -948)">
                                    <rect id="Rectangle_680" data-name="Rectangle 680" width="40" height="40" rx="8"
                                        transform="translate(695 948)" fill="transparent" />
                                    <path id="Path_1399" data-name="Path 1399"
                                        d="M18.77,119.531q.452-.6.717-.97,1.907-2.624,1.653-3.354l-.066-.114a.638.638,0,0,0-.342-.188,1.685,1.685,0,0,0-.705-.028l-3.174.023a.873.873,0,0,0-.221.005.6.6,0,0,0-.143.034l-.055.028-.044.034a.5.5,0,0,0-.121.12.782.782,0,0,0-.11.2,18.912,18.912,0,0,1-1.179,2.567q-.408.707-.749,1.226a5.829,5.829,0,0,1-.573.764,4.029,4.029,0,0,1-.419.394c-.125.1-.221.141-.286.126s-.125-.029-.187-.046a.744.744,0,0,1-.248-.279,1.287,1.287,0,0,1-.127-.445c-.022-.179-.035-.333-.038-.462s0-.312.006-.548.011-.4.011-.479q0-.433.017-.941t.027-.8q.011-.3.011-.628a2.708,2.708,0,0,0-.039-.519,1.864,1.864,0,0,0-.116-.365.607.607,0,0,0-.226-.274,1.25,1.25,0,0,0-.369-.154,7.1,7.1,0,0,0-1.488-.148,7.017,7.017,0,0,0-2.634.274,1.5,1.5,0,0,0-.419.342q-.2.251-.055.274a1.338,1.338,0,0,1,.937.491l.066.137a2.262,2.262,0,0,1,.154.525,5.5,5.5,0,0,1,.1.833,9.176,9.176,0,0,1,0,1.426q-.055.594-.1.924a1.9,1.9,0,0,1-.149.536,2.266,2.266,0,0,1-.132.251.2.2,0,0,1-.055.057.8.8,0,0,1-.3.057.686.686,0,0,1-.375-.16,2.644,2.644,0,0,1-.457-.439,5.842,5.842,0,0,1-.535-.782q-.3-.5-.617-1.186l-.176-.331q-.165-.319-.452-.93t-.507-1.181a.754.754,0,0,0-.265-.365l-.055-.034a.741.741,0,0,0-.176-.1,1.157,1.157,0,0,0-.254-.074l-3.02.023a.752.752,0,0,0-.628.217l-.044.068a.379.379,0,0,0-.033.183.935.935,0,0,0,.066.308q.661,1.609,1.438,3.1t1.35,2.408q.573.913,1.168,1.723t.788,1.038q.193.229.3.342l.276.274a6.614,6.614,0,0,0,.777.656,13.033,13.033,0,0,0,1.135.753,6.036,6.036,0,0,0,1.449.6,4.832,4.832,0,0,0,1.609.188h1.268a.859.859,0,0,0,.584-.251l.044-.057a.789.789,0,0,0,.083-.211,1.206,1.206,0,0,0,.039-.314,3.882,3.882,0,0,1,.072-.884,2.394,2.394,0,0,1,.187-.594,1.456,1.456,0,0,1,.237-.337.957.957,0,0,1,.187-.165.88.88,0,0,1,.088-.04.683.683,0,0,1,.623.177,3.725,3.725,0,0,1,.672.662q.314.394.755.884a5.226,5.226,0,0,0,.771.73l.221.137a2.66,2.66,0,0,0,.573.251,1.2,1.2,0,0,0,.617.057l2.822-.046a1.24,1.24,0,0,0,.65-.143.558.558,0,0,0,.276-.314.916.916,0,0,0,.006-.388,1.456,1.456,0,0,0-.077-.3,1.571,1.571,0,0,0-.072-.143,11.273,11.273,0,0,0-2.105-2.522l-.022-.023-.011-.012-.011-.011h-.011a12.906,12.906,0,0,1-.893-.936.9.9,0,0,1-.154-.924,8.544,8.544,0,0,1,.991-1.5Z"
                                        transform="translate(704 847.697)" fill="#3881e0" />
                                </g>
                            </svg></a>
                </div>
            </div>
        </div>
        <div class="provider__mobile">
            <div class="user__info">
                <?php if ($_SESSION['user']['avatar']): ?>
                    <div class="avatar"><img src="<?php $_SESSION['user']['avatar'] ?>" alt="avatar"></div>
                <?php else: ?>
                    <div class="avatar"><img src="img/user_default.svg" alt="avatar"></div>
                <?php endif; ?>
                <div class="info__text">
                    <h3><span style="color: #1AA248;">Свободен</span>На сайте с 02.05.2024</h3>
                    <a href="profile_provider.php">Константин Константинопольски</a>
                </div>
            </div>
            <div class="grade">
                <div>
                    <img src="icon/star-03.svg" alt="star" class="star">
                    <h2>3.2</h2>
                </div>
                <p>7 оценок</p>
            </div>
            <div class="about"><p>Опыт в любимой работе более 16 лет. Выполняю архитектурные малоэтажные проекты домов, Дизайн проекты частных и общественных помещений.</p></div>
            <div class="project">
                <img src="img/project-01.webp" alt="project">
                <img src="img/project-02.webp" alt="project">
                <img src="img/project-03.webp" alt="project">
                <img src="img/project-04.webp" alt="project">
            </div>
            <div class="service--container">
                    <div class="service">
                        <h2>Проектирование отопления</h2>
                        <p>от 250 ₽ / м²</p>
                    </div>
                    <div class="service">
                        <h2>Проектирование канализации</h2>
                        <p>от 50 ₽ / м²</p>
                    </div>
                    <div class="service">
                        <h2>Проектирование зданий</h2>
                        <p>от 50000 ₽</p>
                    </div>
                    <a href="#" class="profile_provider">Ещё 5 услуг</a>
            </div>
            <div class="contact">
                <a href="profile_provider.php">В профиль</a>
                <a href="tel: +79002342387">+7 900 234-23-87</a>
                <div class="icon">
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                                <g id="Group_1178" data-name="Group 1178" transform="translate(-551 -948)">
                                    <rect id="Rectangle_2" data-name="Rectangle 2" width="40" height="40" rx="8"
                                        transform="translate(551 948)" fill="transparent" />
                                    <g id="Group_684" data-name="Group 684" transform="translate(561.601 958)">
                                        <path id="Path_275" data-name="Path 275"
                                            d="M50.635,36a10.047,10.047,0,0,0-16.1,11.623L33.473,52.8a.383.383,0,0,0,.061.3.388.388,0,0,0,.412.16l5.072-1.2A10.045,10.045,0,0,0,50.635,36ZM49.053,48.625A7.869,7.869,0,0,1,39.991,50.1l-.707-.35-3.11.736.009-.039.644-3.13-.346-.683A7.866,7.866,0,0,1,49.053,37.5a.419.419,0,0,0,.04.041A7.865,7.865,0,0,1,49.053,48.625Z"
                                            transform="translate(-33.447 -33.024)" fill="#3881e0" />
                                        <path id="Path_276" data-name="Path 276"
                                            d="M70.86,69.366a3.267,3.267,0,0,1-1.74,1.517c-1.326.32-3.36.011-5.892-2.349l-.031-.028c-2.226-2.064-2.8-3.782-2.664-5.144a3.256,3.256,0,0,1,1.265-1.93.724.724,0,0,1,1.132.26l.819,1.841a.72.72,0,0,1-.09.736l-.414.538a.713.713,0,0,0-.064.8,7.74,7.74,0,0,0,1.4,1.559,8.2,8.2,0,0,0,1.946,1.394.7.7,0,0,0,.771-.162l.481-.484a.736.736,0,0,1,.718-.184l1.946.552a.736.736,0,0,1,.412,1.088Z"
                                            transform="translate(-55.53 -56.061)" fill="#3881e0" />
                                    </g>
                                </g>
                            </svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                                <g id="Group_1177" data-name="Group 1177" transform="translate(-599 -948)">
                                    <rect id="Rectangle_660" data-name="Rectangle 660" width="40" height="40" rx="8"
                                        transform="translate(599 948)" fill="transparent" />
                                    <path id="Path_1069" data-name="Path 1069"
                                        d="M51.959,45.23l-.335.122L33.437,51.9a.609.609,0,0,0,.053,1.178L38.2,54.371l.878,2.578.878,2.578a.836.836,0,0,0,1.348.3l2.432-2.3,4.776,3.239a1.02,1.02,0,0,0,1.565-.552l3.163-13.976A.933.933,0,0,0,51.959,45.23Zm-2.322,3.1L41.42,55.049l-.387.317a.418.418,0,0,0-.155.272l-.087.714-.238,2.007a.092.092,0,0,1-.184.015L39.7,56.369l-.69-2.053a.416.416,0,0,1,.2-.492l8.55-4.9L49.371,48C49.6,47.867,49.844,48.163,49.638,48.332Z"
                                        transform="translate(575.992 914.831)" fill="#3881E0" />
                                </g>
                            </svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                                <g id="Group_1179" data-name="Group 1179" transform="translate(-647 -948)">
                                    <rect id="Rectangle_421" data-name="Rectangle 421" width="40" height="40" rx="8"
                                        transform="translate(647 948)" fill="#eef6ff" />
                                    <g id="www.flaticon.com_6_" data-name="www.flaticon.com (6)"
                                        transform="translate(655.62 958.013)">
                                        <g id="Group_951" data-name="Group 951" transform="translate(1.38 -0.013)">
                                            <path id="Path_1409" data-name="Path 1409"
                                                d="M21.219,12.656c.652-5.491-.313-8.958-2.055-10.526h0C16.353-.548,6.857-.944,3.494,2.25c-1.511,1.563-2.043,3.856-2.1,6.695s-.128,8.16,4.83,9.6h0l0,2.2s-.034.893.537,1.072c.652.211.948-.2,2.976-2.627a18.566,18.566,0,0,0,6.295-.478c.685-.23,4.562-.743,5.189-6.062ZM10.07,17.646s-2.147,2.678-2.815,3.373c-.219.226-.458.2-.455-.243,0-.294.016-3.659.016-3.659-4.2-1.2-3.955-5.734-3.909-8.1S3.386,4.7,4.665,3.394c2.951-2.767,11.276-2.148,13.4-.155,2.593,2.3,1.67,8.793,1.675,9.014-.533,4.441-3.674,4.722-4.252,4.914a17.129,17.129,0,0,1-5.415.479Z"
                                                transform="translate(-1.38 0.013)" fill="#3881e0" />
                                            <path id="Path_1410" data-name="Path 1410"
                                                d="M12.2,4.3a.276.276,0,0,0,0,.551c2.721.021,4.963,1.918,4.987,5.4a.267.267,0,1,0,.533,0h0C17.686,6.492,15.239,4.318,12.2,4.3Z"
                                                transform="translate(-2.318 -0.37)" fill="#3881e0" />
                                            <path id="Path_1411" data-name="Path 1411"
                                                d="M15.269,9.73a.267.267,0,1,0,.533.013,3.69,3.69,0,0,0-3.625-3.95.277.277,0,0,0-.037.551,3.145,3.145,0,0,1,3.13,3.386Zm-.574,2.351a.842.842,0,0,0-1.1.158l-.4.513a.709.709,0,0,1-.578.226,5.288,5.288,0,0,1-3.48-3.6.766.766,0,0,1,.218-.6l.5-.41a.913.913,0,0,0,.152-1.136A11.84,11.84,0,0,0,8.651,5.274a.733.733,0,0,0-.986-.167H7.657c-.788.461-1.651,1.324-1.375,2.212a14.905,14.905,0,0,0,4.1,6.178A15.748,15.748,0,0,0,14.6,15.91l.008.013c.858.286,1.693-.61,2.138-1.422v-.006a.781.781,0,0,0-.157-1.008,10.741,10.741,0,0,0-1.891-1.4Z"
                                                transform="translate(-1.811 -0.432)" fill="#3881e0" />
                                            <path id="Path_1412" data-name="Path 1412"
                                                d="M13.145,8.05c.876.051,1.3.508,1.346,1.448a.267.267,0,1,0,.533-.026A1.829,1.829,0,0,0,13.174,7.5a.276.276,0,0,0-.029.551Z"
                                                transform="translate(-2.404 -0.655)" fill="#3881e0" />
                                        </g>
                                    </g>
                                </g>
                            </svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                                <g id="Group_1180" data-name="Group 1180" transform="translate(-695 -948)">
                                    <rect id="Rectangle_680" data-name="Rectangle 680" width="40" height="40" rx="8"
                                        transform="translate(695 948)" fill="transparent" />
                                    <path id="Path_1399" data-name="Path 1399"
                                        d="M18.77,119.531q.452-.6.717-.97,1.907-2.624,1.653-3.354l-.066-.114a.638.638,0,0,0-.342-.188,1.685,1.685,0,0,0-.705-.028l-3.174.023a.873.873,0,0,0-.221.005.6.6,0,0,0-.143.034l-.055.028-.044.034a.5.5,0,0,0-.121.12.782.782,0,0,0-.11.2,18.912,18.912,0,0,1-1.179,2.567q-.408.707-.749,1.226a5.829,5.829,0,0,1-.573.764,4.029,4.029,0,0,1-.419.394c-.125.1-.221.141-.286.126s-.125-.029-.187-.046a.744.744,0,0,1-.248-.279,1.287,1.287,0,0,1-.127-.445c-.022-.179-.035-.333-.038-.462s0-.312.006-.548.011-.4.011-.479q0-.433.017-.941t.027-.8q.011-.3.011-.628a2.708,2.708,0,0,0-.039-.519,1.864,1.864,0,0,0-.116-.365.607.607,0,0,0-.226-.274,1.25,1.25,0,0,0-.369-.154,7.1,7.1,0,0,0-1.488-.148,7.017,7.017,0,0,0-2.634.274,1.5,1.5,0,0,0-.419.342q-.2.251-.055.274a1.338,1.338,0,0,1,.937.491l.066.137a2.262,2.262,0,0,1,.154.525,5.5,5.5,0,0,1,.1.833,9.176,9.176,0,0,1,0,1.426q-.055.594-.1.924a1.9,1.9,0,0,1-.149.536,2.266,2.266,0,0,1-.132.251.2.2,0,0,1-.055.057.8.8,0,0,1-.3.057.686.686,0,0,1-.375-.16,2.644,2.644,0,0,1-.457-.439,5.842,5.842,0,0,1-.535-.782q-.3-.5-.617-1.186l-.176-.331q-.165-.319-.452-.93t-.507-1.181a.754.754,0,0,0-.265-.365l-.055-.034a.741.741,0,0,0-.176-.1,1.157,1.157,0,0,0-.254-.074l-3.02.023a.752.752,0,0,0-.628.217l-.044.068a.379.379,0,0,0-.033.183.935.935,0,0,0,.066.308q.661,1.609,1.438,3.1t1.35,2.408q.573.913,1.168,1.723t.788,1.038q.193.229.3.342l.276.274a6.614,6.614,0,0,0,.777.656,13.033,13.033,0,0,0,1.135.753,6.036,6.036,0,0,0,1.449.6,4.832,4.832,0,0,0,1.609.188h1.268a.859.859,0,0,0,.584-.251l.044-.057a.789.789,0,0,0,.083-.211,1.206,1.206,0,0,0,.039-.314,3.882,3.882,0,0,1,.072-.884,2.394,2.394,0,0,1,.187-.594,1.456,1.456,0,0,1,.237-.337.957.957,0,0,1,.187-.165.88.88,0,0,1,.088-.04.683.683,0,0,1,.623.177,3.725,3.725,0,0,1,.672.662q.314.394.755.884a5.226,5.226,0,0,0,.771.73l.221.137a2.66,2.66,0,0,0,.573.251,1.2,1.2,0,0,0,.617.057l2.822-.046a1.24,1.24,0,0,0,.65-.143.558.558,0,0,0,.276-.314.916.916,0,0,0,.006-.388,1.456,1.456,0,0,0-.077-.3,1.571,1.571,0,0,0-.072-.143,11.273,11.273,0,0,0-2.105-2.522l-.022-.023-.011-.012-.011-.011h-.011a12.906,12.906,0,0,1-.893-.936.9.9,0,0,1-.154-.924,8.544,8.544,0,0,1,.991-1.5Z"
                                        transform="translate(704 847.697)" fill="#3881e0" />
                                </g>
                            </svg></a>
                </div>
            </div>
        </div>
        <div class="provider__mobile">
            <div class="user__info">
                <?php if ($_SESSION['user']['avatar']): ?>
                    <div class="avatar"><img src="<?php $_SESSION['user']['avatar'] ?>" alt="avatar"></div>
                <?php else: ?>
                    <div class="avatar"><img src="img/user_default.svg" alt="avatar"></div>
                <?php endif; ?>
                <div class="info__text">
                    <h3><span style="color: #1AA248;">Свободен</span>На сайте с 02.05.2024</h3>
                    <a href="profile_provider.php">Константин Константинопольски</a>
                </div>
            </div>
            <div class="grade">
                <div>
                    <img src="icon/star-03.svg" alt="star" class="star">
                    <h2>3.2</h2>
                </div>
                <p>7 оценок</p>
            </div>
            <div class="about"><p>Опыт в любимой работе более 16 лет. Выполняю архитектурные малоэтажные проекты домов, Дизайн проекты частных и общественных помещений.</p></div>
            <div class="project">
                <img src="img/project-01.webp" alt="project">
                <img src="img/project-02.webp" alt="project">
                <img src="img/project-03.webp" alt="project">
                <img src="img/project-04.webp" alt="project">
            </div>
            <div class="service--container">
                    <div class="service">
                        <h2>Проектирование отопления</h2>
                        <p>от 250 ₽ / м²</p>
                    </div>
                    <div class="service">
                        <h2>Проектирование канализации</h2>
                        <p>от 50 ₽ / м²</p>
                    </div>
                    <div class="service">
                        <h2>Проектирование зданий</h2>
                        <p>от 50000 ₽</p>
                    </div>
                    <a href="#" class="profile_provider">Ещё 5 услуг</a>
            </div>
            <div class="contact">
                <a href="profile_provider.php">В профиль</a>
                <a href="tel: +79002342387">+7 900 234-23-87</a>
                <div class="icon">
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                                <g id="Group_1178" data-name="Group 1178" transform="translate(-551 -948)">
                                    <rect id="Rectangle_2" data-name="Rectangle 2" width="40" height="40" rx="8"
                                        transform="translate(551 948)" fill="transparent" />
                                    <g id="Group_684" data-name="Group 684" transform="translate(561.601 958)">
                                        <path id="Path_275" data-name="Path 275"
                                            d="M50.635,36a10.047,10.047,0,0,0-16.1,11.623L33.473,52.8a.383.383,0,0,0,.061.3.388.388,0,0,0,.412.16l5.072-1.2A10.045,10.045,0,0,0,50.635,36ZM49.053,48.625A7.869,7.869,0,0,1,39.991,50.1l-.707-.35-3.11.736.009-.039.644-3.13-.346-.683A7.866,7.866,0,0,1,49.053,37.5a.419.419,0,0,0,.04.041A7.865,7.865,0,0,1,49.053,48.625Z"
                                            transform="translate(-33.447 -33.024)" fill="#3881e0" />
                                        <path id="Path_276" data-name="Path 276"
                                            d="M70.86,69.366a3.267,3.267,0,0,1-1.74,1.517c-1.326.32-3.36.011-5.892-2.349l-.031-.028c-2.226-2.064-2.8-3.782-2.664-5.144a3.256,3.256,0,0,1,1.265-1.93.724.724,0,0,1,1.132.26l.819,1.841a.72.72,0,0,1-.09.736l-.414.538a.713.713,0,0,0-.064.8,7.74,7.74,0,0,0,1.4,1.559,8.2,8.2,0,0,0,1.946,1.394.7.7,0,0,0,.771-.162l.481-.484a.736.736,0,0,1,.718-.184l1.946.552a.736.736,0,0,1,.412,1.088Z"
                                            transform="translate(-55.53 -56.061)" fill="#3881e0" />
                                    </g>
                                </g>
                            </svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                                <g id="Group_1177" data-name="Group 1177" transform="translate(-599 -948)">
                                    <rect id="Rectangle_660" data-name="Rectangle 660" width="40" height="40" rx="8"
                                        transform="translate(599 948)" fill="transparent" />
                                    <path id="Path_1069" data-name="Path 1069"
                                        d="M51.959,45.23l-.335.122L33.437,51.9a.609.609,0,0,0,.053,1.178L38.2,54.371l.878,2.578.878,2.578a.836.836,0,0,0,1.348.3l2.432-2.3,4.776,3.239a1.02,1.02,0,0,0,1.565-.552l3.163-13.976A.933.933,0,0,0,51.959,45.23Zm-2.322,3.1L41.42,55.049l-.387.317a.418.418,0,0,0-.155.272l-.087.714-.238,2.007a.092.092,0,0,1-.184.015L39.7,56.369l-.69-2.053a.416.416,0,0,1,.2-.492l8.55-4.9L49.371,48C49.6,47.867,49.844,48.163,49.638,48.332Z"
                                        transform="translate(575.992 914.831)" fill="#3881E0" />
                                </g>
                            </svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                                <g id="Group_1179" data-name="Group 1179" transform="translate(-647 -948)">
                                    <rect id="Rectangle_421" data-name="Rectangle 421" width="40" height="40" rx="8"
                                        transform="translate(647 948)" fill="#eef6ff" />
                                    <g id="www.flaticon.com_6_" data-name="www.flaticon.com (6)"
                                        transform="translate(655.62 958.013)">
                                        <g id="Group_951" data-name="Group 951" transform="translate(1.38 -0.013)">
                                            <path id="Path_1409" data-name="Path 1409"
                                                d="M21.219,12.656c.652-5.491-.313-8.958-2.055-10.526h0C16.353-.548,6.857-.944,3.494,2.25c-1.511,1.563-2.043,3.856-2.1,6.695s-.128,8.16,4.83,9.6h0l0,2.2s-.034.893.537,1.072c.652.211.948-.2,2.976-2.627a18.566,18.566,0,0,0,6.295-.478c.685-.23,4.562-.743,5.189-6.062ZM10.07,17.646s-2.147,2.678-2.815,3.373c-.219.226-.458.2-.455-.243,0-.294.016-3.659.016-3.659-4.2-1.2-3.955-5.734-3.909-8.1S3.386,4.7,4.665,3.394c2.951-2.767,11.276-2.148,13.4-.155,2.593,2.3,1.67,8.793,1.675,9.014-.533,4.441-3.674,4.722-4.252,4.914a17.129,17.129,0,0,1-5.415.479Z"
                                                transform="translate(-1.38 0.013)" fill="#3881e0" />
                                            <path id="Path_1410" data-name="Path 1410"
                                                d="M12.2,4.3a.276.276,0,0,0,0,.551c2.721.021,4.963,1.918,4.987,5.4a.267.267,0,1,0,.533,0h0C17.686,6.492,15.239,4.318,12.2,4.3Z"
                                                transform="translate(-2.318 -0.37)" fill="#3881e0" />
                                            <path id="Path_1411" data-name="Path 1411"
                                                d="M15.269,9.73a.267.267,0,1,0,.533.013,3.69,3.69,0,0,0-3.625-3.95.277.277,0,0,0-.037.551,3.145,3.145,0,0,1,3.13,3.386Zm-.574,2.351a.842.842,0,0,0-1.1.158l-.4.513a.709.709,0,0,1-.578.226,5.288,5.288,0,0,1-3.48-3.6.766.766,0,0,1,.218-.6l.5-.41a.913.913,0,0,0,.152-1.136A11.84,11.84,0,0,0,8.651,5.274a.733.733,0,0,0-.986-.167H7.657c-.788.461-1.651,1.324-1.375,2.212a14.905,14.905,0,0,0,4.1,6.178A15.748,15.748,0,0,0,14.6,15.91l.008.013c.858.286,1.693-.61,2.138-1.422v-.006a.781.781,0,0,0-.157-1.008,10.741,10.741,0,0,0-1.891-1.4Z"
                                                transform="translate(-1.811 -0.432)" fill="#3881e0" />
                                            <path id="Path_1412" data-name="Path 1412"
                                                d="M13.145,8.05c.876.051,1.3.508,1.346,1.448a.267.267,0,1,0,.533-.026A1.829,1.829,0,0,0,13.174,7.5a.276.276,0,0,0-.029.551Z"
                                                transform="translate(-2.404 -0.655)" fill="#3881e0" />
                                        </g>
                                    </g>
                                </g>
                            </svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                                <g id="Group_1180" data-name="Group 1180" transform="translate(-695 -948)">
                                    <rect id="Rectangle_680" data-name="Rectangle 680" width="40" height="40" rx="8"
                                        transform="translate(695 948)" fill="transparent" />
                                    <path id="Path_1399" data-name="Path 1399"
                                        d="M18.77,119.531q.452-.6.717-.97,1.907-2.624,1.653-3.354l-.066-.114a.638.638,0,0,0-.342-.188,1.685,1.685,0,0,0-.705-.028l-3.174.023a.873.873,0,0,0-.221.005.6.6,0,0,0-.143.034l-.055.028-.044.034a.5.5,0,0,0-.121.12.782.782,0,0,0-.11.2,18.912,18.912,0,0,1-1.179,2.567q-.408.707-.749,1.226a5.829,5.829,0,0,1-.573.764,4.029,4.029,0,0,1-.419.394c-.125.1-.221.141-.286.126s-.125-.029-.187-.046a.744.744,0,0,1-.248-.279,1.287,1.287,0,0,1-.127-.445c-.022-.179-.035-.333-.038-.462s0-.312.006-.548.011-.4.011-.479q0-.433.017-.941t.027-.8q.011-.3.011-.628a2.708,2.708,0,0,0-.039-.519,1.864,1.864,0,0,0-.116-.365.607.607,0,0,0-.226-.274,1.25,1.25,0,0,0-.369-.154,7.1,7.1,0,0,0-1.488-.148,7.017,7.017,0,0,0-2.634.274,1.5,1.5,0,0,0-.419.342q-.2.251-.055.274a1.338,1.338,0,0,1,.937.491l.066.137a2.262,2.262,0,0,1,.154.525,5.5,5.5,0,0,1,.1.833,9.176,9.176,0,0,1,0,1.426q-.055.594-.1.924a1.9,1.9,0,0,1-.149.536,2.266,2.266,0,0,1-.132.251.2.2,0,0,1-.055.057.8.8,0,0,1-.3.057.686.686,0,0,1-.375-.16,2.644,2.644,0,0,1-.457-.439,5.842,5.842,0,0,1-.535-.782q-.3-.5-.617-1.186l-.176-.331q-.165-.319-.452-.93t-.507-1.181a.754.754,0,0,0-.265-.365l-.055-.034a.741.741,0,0,0-.176-.1,1.157,1.157,0,0,0-.254-.074l-3.02.023a.752.752,0,0,0-.628.217l-.044.068a.379.379,0,0,0-.033.183.935.935,0,0,0,.066.308q.661,1.609,1.438,3.1t1.35,2.408q.573.913,1.168,1.723t.788,1.038q.193.229.3.342l.276.274a6.614,6.614,0,0,0,.777.656,13.033,13.033,0,0,0,1.135.753,6.036,6.036,0,0,0,1.449.6,4.832,4.832,0,0,0,1.609.188h1.268a.859.859,0,0,0,.584-.251l.044-.057a.789.789,0,0,0,.083-.211,1.206,1.206,0,0,0,.039-.314,3.882,3.882,0,0,1,.072-.884,2.394,2.394,0,0,1,.187-.594,1.456,1.456,0,0,1,.237-.337.957.957,0,0,1,.187-.165.88.88,0,0,1,.088-.04.683.683,0,0,1,.623.177,3.725,3.725,0,0,1,.672.662q.314.394.755.884a5.226,5.226,0,0,0,.771.73l.221.137a2.66,2.66,0,0,0,.573.251,1.2,1.2,0,0,0,.617.057l2.822-.046a1.24,1.24,0,0,0,.65-.143.558.558,0,0,0,.276-.314.916.916,0,0,0,.006-.388,1.456,1.456,0,0,0-.077-.3,1.571,1.571,0,0,0-.072-.143,11.273,11.273,0,0,0-2.105-2.522l-.022-.023-.011-.012-.011-.011h-.011a12.906,12.906,0,0,1-.893-.936.9.9,0,0,1-.154-.924,8.544,8.544,0,0,1,.991-1.5Z"
                                        transform="translate(704 847.697)" fill="#3881e0" />
                                </g>
                            </svg></a>
                </div>
            </div>
        </div>
        <div class="provider__mobile">
            <div class="user__info">
                <?php if ($_SESSION['user']['avatar']): ?>
                    <div class="avatar"><img src="<?php $_SESSION['user']['avatar'] ?>" alt="avatar"></div>
                <?php else: ?>
                    <div class="avatar"><img src="img/user_default.svg" alt="avatar"></div>
                <?php endif; ?>
                <div class="info__text">
                    <h3><span style="color: #1AA248;">Свободен</span>На сайте с 02.05.2024</h3>
                    <a href="profile_provider.php">Константин Константинопольски</a>
                </div>
            </div>
            <div class="grade">
                <div>
                    <img src="icon/star-03.svg" alt="star" class="star">
                    <h2>3.2</h2>
                </div>
                <p>7 оценок</p>
            </div>
            <div class="about"><p>Опыт в любимой работе более 16 лет. Выполняю архитектурные малоэтажные проекты домов, Дизайн проекты частных и общественных помещений.</p></div>
            <div class="project">
                <img src="img/project-01.webp" alt="project">
                <img src="img/project-02.webp" alt="project">
                <img src="img/project-03.webp" alt="project">
                <img src="img/project-04.webp" alt="project">
            </div>
            <div class="service--container">
                    <div class="service">
                        <h2>Проектирование отопления</h2>
                        <p>от 250 ₽ / м²</p>
                    </div>
                    <div class="service">
                        <h2>Проектирование канализации</h2>
                        <p>от 50 ₽ / м²</p>
                    </div>
                    <div class="service">
                        <h2>Проектирование зданий</h2>
                        <p>от 50000 ₽</p>
                    </div>
                    <a href="#" class="profile_provider">Ещё 5 услуг</a>
            </div>
            <div class="contact">
                <a href="profile_provider.php">В профиль</a>
                <a href="tel: +79002342387">+7 900 234-23-87</a>
                <div class="icon">
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                                <g id="Group_1178" data-name="Group 1178" transform="translate(-551 -948)">
                                    <rect id="Rectangle_2" data-name="Rectangle 2" width="40" height="40" rx="8"
                                        transform="translate(551 948)" fill="transparent" />
                                    <g id="Group_684" data-name="Group 684" transform="translate(561.601 958)">
                                        <path id="Path_275" data-name="Path 275"
                                            d="M50.635,36a10.047,10.047,0,0,0-16.1,11.623L33.473,52.8a.383.383,0,0,0,.061.3.388.388,0,0,0,.412.16l5.072-1.2A10.045,10.045,0,0,0,50.635,36ZM49.053,48.625A7.869,7.869,0,0,1,39.991,50.1l-.707-.35-3.11.736.009-.039.644-3.13-.346-.683A7.866,7.866,0,0,1,49.053,37.5a.419.419,0,0,0,.04.041A7.865,7.865,0,0,1,49.053,48.625Z"
                                            transform="translate(-33.447 -33.024)" fill="#3881e0" />
                                        <path id="Path_276" data-name="Path 276"
                                            d="M70.86,69.366a3.267,3.267,0,0,1-1.74,1.517c-1.326.32-3.36.011-5.892-2.349l-.031-.028c-2.226-2.064-2.8-3.782-2.664-5.144a3.256,3.256,0,0,1,1.265-1.93.724.724,0,0,1,1.132.26l.819,1.841a.72.72,0,0,1-.09.736l-.414.538a.713.713,0,0,0-.064.8,7.74,7.74,0,0,0,1.4,1.559,8.2,8.2,0,0,0,1.946,1.394.7.7,0,0,0,.771-.162l.481-.484a.736.736,0,0,1,.718-.184l1.946.552a.736.736,0,0,1,.412,1.088Z"
                                            transform="translate(-55.53 -56.061)" fill="#3881e0" />
                                    </g>
                                </g>
                            </svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                                <g id="Group_1177" data-name="Group 1177" transform="translate(-599 -948)">
                                    <rect id="Rectangle_660" data-name="Rectangle 660" width="40" height="40" rx="8"
                                        transform="translate(599 948)" fill="transparent" />
                                    <path id="Path_1069" data-name="Path 1069"
                                        d="M51.959,45.23l-.335.122L33.437,51.9a.609.609,0,0,0,.053,1.178L38.2,54.371l.878,2.578.878,2.578a.836.836,0,0,0,1.348.3l2.432-2.3,4.776,3.239a1.02,1.02,0,0,0,1.565-.552l3.163-13.976A.933.933,0,0,0,51.959,45.23Zm-2.322,3.1L41.42,55.049l-.387.317a.418.418,0,0,0-.155.272l-.087.714-.238,2.007a.092.092,0,0,1-.184.015L39.7,56.369l-.69-2.053a.416.416,0,0,1,.2-.492l8.55-4.9L49.371,48C49.6,47.867,49.844,48.163,49.638,48.332Z"
                                        transform="translate(575.992 914.831)" fill="#3881E0" />
                                </g>
                            </svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                                <g id="Group_1179" data-name="Group 1179" transform="translate(-647 -948)">
                                    <rect id="Rectangle_421" data-name="Rectangle 421" width="40" height="40" rx="8"
                                        transform="translate(647 948)" fill="#eef6ff" />
                                    <g id="www.flaticon.com_6_" data-name="www.flaticon.com (6)"
                                        transform="translate(655.62 958.013)">
                                        <g id="Group_951" data-name="Group 951" transform="translate(1.38 -0.013)">
                                            <path id="Path_1409" data-name="Path 1409"
                                                d="M21.219,12.656c.652-5.491-.313-8.958-2.055-10.526h0C16.353-.548,6.857-.944,3.494,2.25c-1.511,1.563-2.043,3.856-2.1,6.695s-.128,8.16,4.83,9.6h0l0,2.2s-.034.893.537,1.072c.652.211.948-.2,2.976-2.627a18.566,18.566,0,0,0,6.295-.478c.685-.23,4.562-.743,5.189-6.062ZM10.07,17.646s-2.147,2.678-2.815,3.373c-.219.226-.458.2-.455-.243,0-.294.016-3.659.016-3.659-4.2-1.2-3.955-5.734-3.909-8.1S3.386,4.7,4.665,3.394c2.951-2.767,11.276-2.148,13.4-.155,2.593,2.3,1.67,8.793,1.675,9.014-.533,4.441-3.674,4.722-4.252,4.914a17.129,17.129,0,0,1-5.415.479Z"
                                                transform="translate(-1.38 0.013)" fill="#3881e0" />
                                            <path id="Path_1410" data-name="Path 1410"
                                                d="M12.2,4.3a.276.276,0,0,0,0,.551c2.721.021,4.963,1.918,4.987,5.4a.267.267,0,1,0,.533,0h0C17.686,6.492,15.239,4.318,12.2,4.3Z"
                                                transform="translate(-2.318 -0.37)" fill="#3881e0" />
                                            <path id="Path_1411" data-name="Path 1411"
                                                d="M15.269,9.73a.267.267,0,1,0,.533.013,3.69,3.69,0,0,0-3.625-3.95.277.277,0,0,0-.037.551,3.145,3.145,0,0,1,3.13,3.386Zm-.574,2.351a.842.842,0,0,0-1.1.158l-.4.513a.709.709,0,0,1-.578.226,5.288,5.288,0,0,1-3.48-3.6.766.766,0,0,1,.218-.6l.5-.41a.913.913,0,0,0,.152-1.136A11.84,11.84,0,0,0,8.651,5.274a.733.733,0,0,0-.986-.167H7.657c-.788.461-1.651,1.324-1.375,2.212a14.905,14.905,0,0,0,4.1,6.178A15.748,15.748,0,0,0,14.6,15.91l.008.013c.858.286,1.693-.61,2.138-1.422v-.006a.781.781,0,0,0-.157-1.008,10.741,10.741,0,0,0-1.891-1.4Z"
                                                transform="translate(-1.811 -0.432)" fill="#3881e0" />
                                            <path id="Path_1412" data-name="Path 1412"
                                                d="M13.145,8.05c.876.051,1.3.508,1.346,1.448a.267.267,0,1,0,.533-.026A1.829,1.829,0,0,0,13.174,7.5a.276.276,0,0,0-.029.551Z"
                                                transform="translate(-2.404 -0.655)" fill="#3881e0" />
                                        </g>
                                    </g>
                                </g>
                            </svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                                <g id="Group_1180" data-name="Group 1180" transform="translate(-695 -948)">
                                    <rect id="Rectangle_680" data-name="Rectangle 680" width="40" height="40" rx="8"
                                        transform="translate(695 948)" fill="transparent" />
                                    <path id="Path_1399" data-name="Path 1399"
                                        d="M18.77,119.531q.452-.6.717-.97,1.907-2.624,1.653-3.354l-.066-.114a.638.638,0,0,0-.342-.188,1.685,1.685,0,0,0-.705-.028l-3.174.023a.873.873,0,0,0-.221.005.6.6,0,0,0-.143.034l-.055.028-.044.034a.5.5,0,0,0-.121.12.782.782,0,0,0-.11.2,18.912,18.912,0,0,1-1.179,2.567q-.408.707-.749,1.226a5.829,5.829,0,0,1-.573.764,4.029,4.029,0,0,1-.419.394c-.125.1-.221.141-.286.126s-.125-.029-.187-.046a.744.744,0,0,1-.248-.279,1.287,1.287,0,0,1-.127-.445c-.022-.179-.035-.333-.038-.462s0-.312.006-.548.011-.4.011-.479q0-.433.017-.941t.027-.8q.011-.3.011-.628a2.708,2.708,0,0,0-.039-.519,1.864,1.864,0,0,0-.116-.365.607.607,0,0,0-.226-.274,1.25,1.25,0,0,0-.369-.154,7.1,7.1,0,0,0-1.488-.148,7.017,7.017,0,0,0-2.634.274,1.5,1.5,0,0,0-.419.342q-.2.251-.055.274a1.338,1.338,0,0,1,.937.491l.066.137a2.262,2.262,0,0,1,.154.525,5.5,5.5,0,0,1,.1.833,9.176,9.176,0,0,1,0,1.426q-.055.594-.1.924a1.9,1.9,0,0,1-.149.536,2.266,2.266,0,0,1-.132.251.2.2,0,0,1-.055.057.8.8,0,0,1-.3.057.686.686,0,0,1-.375-.16,2.644,2.644,0,0,1-.457-.439,5.842,5.842,0,0,1-.535-.782q-.3-.5-.617-1.186l-.176-.331q-.165-.319-.452-.93t-.507-1.181a.754.754,0,0,0-.265-.365l-.055-.034a.741.741,0,0,0-.176-.1,1.157,1.157,0,0,0-.254-.074l-3.02.023a.752.752,0,0,0-.628.217l-.044.068a.379.379,0,0,0-.033.183.935.935,0,0,0,.066.308q.661,1.609,1.438,3.1t1.35,2.408q.573.913,1.168,1.723t.788,1.038q.193.229.3.342l.276.274a6.614,6.614,0,0,0,.777.656,13.033,13.033,0,0,0,1.135.753,6.036,6.036,0,0,0,1.449.6,4.832,4.832,0,0,0,1.609.188h1.268a.859.859,0,0,0,.584-.251l.044-.057a.789.789,0,0,0,.083-.211,1.206,1.206,0,0,0,.039-.314,3.882,3.882,0,0,1,.072-.884,2.394,2.394,0,0,1,.187-.594,1.456,1.456,0,0,1,.237-.337.957.957,0,0,1,.187-.165.88.88,0,0,1,.088-.04.683.683,0,0,1,.623.177,3.725,3.725,0,0,1,.672.662q.314.394.755.884a5.226,5.226,0,0,0,.771.73l.221.137a2.66,2.66,0,0,0,.573.251,1.2,1.2,0,0,0,.617.057l2.822-.046a1.24,1.24,0,0,0,.65-.143.558.558,0,0,0,.276-.314.916.916,0,0,0,.006-.388,1.456,1.456,0,0,0-.077-.3,1.571,1.571,0,0,0-.072-.143,11.273,11.273,0,0,0-2.105-2.522l-.022-.023-.011-.012-.011-.011h-.011a12.906,12.906,0,0,1-.893-.936.9.9,0,0,1-.154-.924,8.544,8.544,0,0,1,.991-1.5Z"
                                        transform="translate(704 847.697)" fill="#3881e0" />
                                </g>
                            </svg></a>
                </div>
            </div>
        </div>
        
    </section>
    <div class="refresh-btn">
        <h2>Загрузить ещё</h2>
        <svg xmlns="http://www.w3.org/2000/svg" width="19.2" height="19.205" viewBox="0 0 19.2 19.205"><g id="refresh" transform="translate(-2.461)"><path id="Path_1280" data-name="Path 1280" d="M4.862,8.549A7.3,7.3,0,0,1,16.793,4.122l-.938.929a.792.792,0,0,0,0,1.128.809.809,0,0,0,.569.233h3.693a.8.8,0,0,0,.805-.8V1.958a.807.807,0,0,0-1.374-.564L18.5,2.431A9.749,9.749,0,0,0,4.83,3.208,9.548,9.548,0,0,0,2.477,8.2,1.209,1.209,0,0,0,3.485,9.586a1.233,1.233,0,0,0,.181.016A1.216,1.216,0,0,0,4.862,8.549Z" transform="translate(0 0)" fill="#3881e0"/><path id="Path_1281" data-name="Path 1281" d="M39.491,256.891a1.216,1.216,0,0,0-1.2,1.053,7.3,7.3,0,0,1-11.931,4.427l.938-.929a.792.792,0,0,0,0-1.128.809.809,0,0,0-.569-.233H23.04a.8.8,0,0,0-.805.8v3.657a.807.807,0,0,0,1.374.564l1.047-1.037a9.748,9.748,0,0,0,13.67-.775,9.547,9.547,0,0,0,2.354-4.994,1.209,1.209,0,0,0-1.007-1.386A1.227,1.227,0,0,0,39.491,256.891Z" transform="translate(-19.035 -247.289)" fill="#3881e0"/></g></svg>
    </div>
    <?php include 'footer.php' ?>
    <script src="js/tag.js"></script>
</body>   
</html>