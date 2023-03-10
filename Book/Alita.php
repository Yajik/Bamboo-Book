<?php
session_start()
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bamboo Book-Алита боевой ангел</title>
    <link rel="stylesheet" href="../assets/css/main/main.css">
    <link rel="stylesheet" href="../assets/css/Book/book.css">
    <link rel="stylesheet" href="../assets/css/Book/Alita/Alita.css">
    <script src="../assets/script.js" defer></script>

    <link rel="shortcut icon" href="/assets/img/main/favicon.ico" type="image/x-icon">

</head>
<body>
<header>
    <div class="header__row">
        <div class="header__row-top">
            <div class="header__row-left">
                <a href="./../index.php">
                    <div class="logotype">
                        <img src="./../assets/img/main/header/2223150%206.png" alt="">
                        <p class="logoText">bamboo book</p>
                    </div>
                </a>

                <div class="header__row-links tabletNone">
                    <button>
                        <a href="./../index.php">Главная</a>
                    </button>

                    <button>
                        <a href="./../catalog.php">Каталог</a>
                    </button>

                    <button>
                        <a href="./../aboutUs.php">О нас</a>
                    </button>
                </div>
            </div>

            <div class="header__row-right tabletNone" <?php if(!isset($_SESSION['login'])){echo 'style="display:none"';}?>>
                <button style="display: flex; gap: 10px; align-items: center">
                    <a href="./../profile.php"><?=$_SESSION['login']?></a>
                    <a href="./../profile.php"><?="<img src='$_SESSION[img]' alt=''>"?></a>
                </button>

                <button class="button__logout"><a href="./../logout.php">Выйти</a></button>
            </div>

            <div class="header__row-right tabletNone" <?php if(isset($_SESSION['login'])){echo 'style="display:none"';}?>>
                <button style="display: flex; gap: 10px; align-items: center">
                    <a href="./../login.php">Войти</a>
                </button>

                <button class="button__logout"><a href="./../registration.php">Регистрация</a></button>
            </div>

            <div class="header__row-burgerMenu">
                <img src="./../assets/img/main/menu.png" alt="">
            </div>
        </div>

        <div class="header__row-menu none">
            <div class="header__row-links">
                <a href="./../index.php" style="color: black; border-bottom: 1px solid #78AB2B">Главная</a>

                <a href="./../catalog.php" style="color: black; border-bottom: 1px solid #78AB2B">Каталог</a>

                <a href="./../aboutUs.php" style="color: black; border-bottom: 1px solid #78AB2B">О нас</a>
            </div>

            <div class="header__row-right" <?php if(!isset($_SESSION['login'])){echo 'style="display:none"';}?>>
                <a href="./../profile.php"><?="<img src='$_SESSION[img]' alt=''>"?></a>

                <a href="./../logout.php" style="color: black; border-bottom: 1px solid  #78AB2B">Выйти</a>
            </div>

            <div class="header__row-right" <?php if(isset($_SESSION['login'])){echo 'style="display:none"';}?>>
                <a href="./../login.php" style="color: black; border-bottom: 1px solid  #78AB2B">Войти</a>
                <a href="./../registration.php" style="color: black; border-bottom: 1px solid  #78AB2B">Регистрация</a>
            </div>
        </div>

        <div class="header__row-bottom ">
            <form style="display: flex; flex-wrap: nowrap; gap: 10px; align-items: center">
                <label style="width: 100%">
                    <input type="search" placeholder="Поиск по сайту...">
                </label>

                <label>
                    <input class="search__submit" type="submit" value="Поиск">
                </label>
            </form>
        </div>
    </div>
</header>

<div class="mangaCover Alita"></div>

<div class="content">
    <div class="manga__block" style="">
        <div class="manga__block-cover">
            <img src="../assets/img/Book/Alita/Battle_Angel_Alita_vol01%201.png" alt="">

            <div class="manga__block-cover-buttons">
                <button class="button__large">
                    <a href="">Читать онлайн</a>
                </button>

                <button class="button__large">
                    <a href="">Скачать</a>
                </button>
            </div>
        </div>

        <div class="manga__block-info">
            <div class="manga__block-title">
                <h1 style="color: #78AB2B">Боевой Ангел Алита</h1>
                <p>(англ. GUNNM)</p>
            </div>

            <div class="manga__block-about">
                <p>Действие манги разворачивается в постапокалиптическом будущем. Город Тифарес парит высоко над землёй. В нём обитает высшая раса - Тифареанцы, они очень развиты. А на поверхности земли обитают отбросы общества - обычные люди, для которых Тифарес недоступен. Хотя мир и Людей и Тифареанцев высоко развит, городов на земле почти нет, люди вынуждены жить в руинах, на свалках... На поверхности повсеместно процветает преступность и наркобизнес.</p>
            </div>

            <div class="manga__block-subBlock" style="">
                <div class="manga__block-genre" style="">
                    <p style="color: #78AB2B">Жанры:</p>
                    <button class="tag">
                        <a href="">Киберпанк</a>
                    </button>

                    <button class="tag">
                        <a href="">Научная фантастика</a>
                    </button>

                    <button class="tag">
                        <a href="">Боевик</a>
                    </button>
                </div>
                <div class="manga__block-blockReview" style="">
                    <div class="manga__block-review">
                        <p style="color: #78AB2B">Оценки:</p>
                        <div class="manga__block-stars">
                            <img src="../assets/img/main/header/2223150%206.png" alt="">
                            <img src="../assets/img/main/header/2223150%206.png" alt="">
                            <img src="../assets/img/main/header/2223150%206.png" alt="">
                            <img src="../assets/img/main/header/2223150%206.png" alt="">
                            <img src="../assets/img/main/header/2223150%206.png" alt="">
                        </div>
                    </div>

                    <div class="manga__block-button">
                        <button><a href="">Оценить</a></button>
                        <button><a href="">Избранное</a></button>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="manga__block-mini">
        <div class="manga__block-mini-cover">
            <div class="manga__block-title">
                <h1 style="color: #78AB2B">Боевой Ангел Алита</h1>
                <p>(англ. GUNNM)</p>
            </div>
            <div class="manga__block-cover">
                <img src="../assets/img/Book/Alita/Battle_Angel_Alita_vol01%201.png" alt="">
            </div>
        </div>

        <div class="manga__block-info">
            <div class="manga__block-about">
                <p>Действие манги разворачивается в постапокалиптическом будущем. Город Тифарес парит высоко над землёй. В нём обитает высшая раса - Тифареанцы, они очень развиты. А на поверхности земли обитают отбросы общества - обычные люди, для которых Тифарес недоступен. Хотя мир и Людей и Тифареанцев высоко развит, городов на земле почти нет, люди вынуждены жить в руинах, на свалках... На поверхности повсеместно процветает преступность и наркобизнес.</p>
            </div>

            <div class="manga__block-cover-buttons">
                <button class="button__large">
                    <a href="">Читать онлайн</a>
                </button>

                <button class="button__large">
                    <a href="">Скачать</a>
                </button>
            </div>
        </div>
    </div>

    <div class="recomendation">
        <h1>Так же рекомендуем!</h1>

        <div class="content__blocks-row">
            <a href="" class="mangaLink"><img src="../assets/img/Book/Hobbit/150515-dzhon-tolkin-hobbit-150515.webp" alt=""></a>
            <a href="" class="mangaLink"><img src="../assets/img/Book/450/39507162--.webp" alt=""></a>
            <a href="" class="mangaLink mobileNone"><img src="../assets/img/Book/onePunch/MV5BMTNmZDE2NDEtNTg3MS00OTE1LThlZGUtOGZkZTg0NTUyNGVmXkEyXkFqcGdeQXVyNTgyNTA4MjM@._V1_.jpg" alt=""></a>
            <a href="" class="mangaLink mobileNone"><img src="../assets/img/Book/Galaxy/166312-duglas-adams-avtostopom-po-galaktike-restoran-u-konca-vselennoy.webp" alt=""></a>
        </div>
    </div>


</div>

<footer>
    <div class="footer-left" style="">
        <a href="">
            <div class="logotype">
                <img src="../assets/img/main/header/2223150%206.png" alt="">
                <p class="logoText">bamboo book</p>
            </div>
        </a>
        <p>Email: ruewgenru@gmail.com</p>
    </div>

    <div class="footer__right" style="">
        <p>Подписаться на рассылку новостей</p>
        <div class="footer__right-email">
            <form class="footer__right-form">
                <label>
                    <input class="email" type="text" placeholder="Введите email">
                </label>

                <label>
                    <input class="OK" type="submit" value="ОК">
                </label>
            </form>
        </div>
    </div>
</footer>
</body>
</html>