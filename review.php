<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/review.css">
    <link rel="stylesheet" href="css/pop_up.css">
    <title>My site</title>
</head>
<body>
    <?php include 'header.php'?>
    <div class="section__review">
        <div class="title">Оцените проектировщика</div>
        <div class="info">
            <div class="avatar"><img src="img/user_default.svg" alt="avatar"></div>
            <div>
                <div class="name">Константин Константинопольски</div>
                <div class="star__container">
                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" class="active"><path id="star" d="M13.7,16.122,8.437,12.336,3.176,16.122,5.2,10.008-.063,6.246H6.43L8.437.122l2.008,6.124h6.492l-5.258,3.762Z" transform="translate(0.063 -0.122)" fill="#F7DB48"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" class="active"><path id="star" d="M13.7,16.122,8.437,12.336,3.176,16.122,5.2,10.008-.063,6.246H6.43L8.437.122l2.008,6.124h6.492l-5.258,3.762Z" transform="translate(0.063 -0.122)" fill="#F7DB48"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" class="active"><path id="star" d="M13.7,16.122,8.437,12.336,3.176,16.122,5.2,10.008-.063,6.246H6.43L8.437.122l2.008,6.124h6.492l-5.258,3.762Z" transform="translate(0.063 -0.122)" fill="#F7DB48"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16"><path id="star" d="M13.7,16.122,8.437,12.336,3.176,16.122,5.2,10.008-.063,6.246H6.43L8.437.122l2.008,6.124h6.492l-5.258,3.762Z" transform="translate(0.063 -0.122)" fill="#F7DB48"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16"><path id="star" d="M13.7,16.122,8.437,12.336,3.176,16.122,5.2,10.008-.063,6.246H6.43L8.437.122l2.008,6.124h6.492l-5.258,3.762Z" transform="translate(0.063 -0.122)" fill="#F7DB48"/></svg>
                </div>
            </div>
        </div>
        <form>
            <div class="review__container">
                <?php if ($_SESSION['review_error']):?>
                <textarea name="review" minlength="10"  maxlength="500" class="review input-error" placeholder="Напишите ваш отзыв о проектировщике"></textarea>
                <h2 class='error'>Обязательное поле для ввода!</h2>
                <p>Вы написали <span class="count">0</span> из 500 символов</p>
                <?php else:?>
                <textarea name="review" minlength="10"  maxlength="500" class="review" placeholder="Напишите ваш отзыв о проектировщике"></textarea>
                <p>Вы написали <span class="count">0</span> из 500 символов</p>
                <?php endif;?>
            </div>
            <div class="send_review">
                <!-- <button class="submit">Отправить</button> --> <!-- После создания БД установить эту кнопку -->
                <a href="#" class="submit" style="display: flex; justify-content: center; align-items: center">Отправить</a>
                <svg xmlns="http://www.w3.org/2000/svg" width="51" height="51" viewBox="0 0 51 51" alt="delete" class="delete" style="cursor: pointer"><g id="Group_971" data-name="Group 971" transform="translate(-1081 -1227)"><rect id="Rectangle_660" data-name="Rectangle 660" width="51" height="51" rx="8" transform="translate(1081 1227)" fill="#ff4848"/><g id="Group_967" data-name="Group 967" transform="translate(1095.604 1240.031)"><path id="Path_1424" data-name="Path 1424" d="M136.208,138.6a2.349,2.349,0,0,0,2.533,2.34h11.475a2.394,2.394,0,0,0,2.667-2.532c.267-4.5.933-15.473.98-16.368h-18.64C135.224,122.234,135.876,133.329,136.208,138.6ZM153.847,117.6c-1.317-.008-2.635-.02-3.952.007a1.753,1.753,0,0,0-1.746-1.61H140.91a1.753,1.753,0,0,0-1.747,1.6c-1.355-.024-2.712-.016-4.068,0a1.378,1.378,0,0,0-1.392,1.025,1.482,1.482,0,0,0,1.484,1.988c3.117.01,6.234,0,9.351,0h9.293a1.508,1.508,0,1,0,.015-3.013Z" transform="translate(-133.631 -116)" fill="#fff"/></g></g></svg>
            </div>
        </form>
    </div>
    <?php include 'footer.php'?>
    <div class="pop-up">
        <div class="pop-up--container">
            <h2>Отзыв отправлен.</h2>
            <p>Ваш отзыв отправлен. Он проходит модерацию, после модерации отзыв будет опубликован</p>
            <a href="/">Отлично</a>
        </div>
    </div>
    <div class="pop-up pop-up--delete">
        <div class="pop-up--container">
            <h2>Удалить отзыв?</h2>
            <p>Вы уверены что хотите удалить отзыв? Отзыв можно удалить и потом оставить новый</p>
            <div>
                <a href="/review.php" style="margin-left: 0">Я передумал</a>
                <h3 class="delete-review">Удалить</h3>
            </div>
        </div>
    </div>
    <div class="pop-up pop-up-ok--delete">
        <div class="pop-up--container">
            <h2>Отзыв удалён</h2>
            <p>Ваш отзыв удален. Но вы сможете вернуться и написать другой отзыв, если передумаете</p>
            <a href="/">Отлично</a>
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
        document.querySelector('.delete').addEventListener('click', () => {
        window.scroll(
            {
                top: 0,
                left: 0
            }
        )
        document.querySelector('.pop-up--delete').classList.add('active')
        document.querySelector('body').classList.add('stop')
        })
        document.querySelector('.delete-review').addEventListener('click', () => {
            window.scroll(
            {
                top: 0,
                left: 0
            }
        )
        document.querySelector('.pop-up-ok--delete').classList.add('active')
        document.querySelector('.pop-up--delete').classList.remove('active')
        })
    </script>
    <script>
        const review = document.querySelector('.review')
        const count_review = document.querySelector('.count')

        review.addEventListener('input', () => {
            count_review.innerHTML = review.value.trim().length
        })
    </script>
    <?php unset($_SESSION['review_error'])?>
    <?php unset($_SESSION['review_ok'])?>
</body>
</html>