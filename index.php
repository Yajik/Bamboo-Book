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
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/main/main.css">
    <script src="assets/script.js" defer></script>

    <link rel="shortcut icon" href="assets/img/main/favicon.ico" type="image/x-icon">
</head>
<body>
<header>
    <div class="header__row">
        <div class="header__row-top">
            <div class="header__row-left">
                <a href="./index.php">
                    <div class="logotype">
                        <img src="./assets/img/main/header/2223150%206.png" alt="">
                        <p class="logoText">bamboo book</p>
                    </div>
                </a>

                <div class="header__row-links tabletNone">
                    <button>
                        <a href="./index.php">Главная</a>
                    </button>

                    <button>
                        <a href="./catalog.php">Каталог</a>
                    </button>

                    <button>
                        <a href="./aboutUs.php">О нас</a>
                    </button>
                </div>
            </div>

            <div class="header__row-right tabletNone" <?php if(!isset($_SESSION['login'])){echo 'style="display:none"';}?>>
                <button style="display: flex; gap: 10px; align-items: center">
                    <a href="./profile.php"><?=$_SESSION['login']?></a>
                    <a href="./profile.php"><?="<img src='$_SESSION[img]' alt=''>"?></a>
                </button>

                <button class="button__logout"><a href="./logout.php">Выйти</a></button>
            </div>

            <div class="header__row-right tabletNone" <?php if(isset($_SESSION['login'])){echo 'style="display:none"';}?>>
                <button style="display: flex; gap: 10px; align-items: center">
                    <a href="./login.php">Войти</a>
                </button>

                <button class="button__logout"><a href="registration.php">Регистрация</a></button>
            </div>

            <div class="header__row-burgerMenu">
                <img src="./assets/img/main/menu.png" alt="">
            </div>
        </div>

        <div class="header__row-menu none">
            <div class="header__row-links">
                <a href="./index.php" style="color: black; border-bottom: 1px solid #78AB2B">Главная</a>

                <a href="./catalog.php" style="color: black; border-bottom: 1px solid #78AB2B">Каталог</a>

                <a href="./aboutUs.php" style="color: black; border-bottom: 1px solid #78AB2B">О нас</a>
            </div>

            <div class="header__row-right" <?php if(!isset($_SESSION['login'])){echo 'style="display:none"';}?>>
                <a href="./profile.php"><?="<img src='$_SESSION[img]' alt=''>"?></a>

                <a href="./logout.php" style="color: black; border-bottom: 1px solid  #78AB2B">Выйти</a>
            </div>

            <div class="header__row-right" <?php if(isset($_SESSION['login'])){echo 'style="display:none"';}?>>
                <a href="./login.php" style="color: black; border-bottom: 1px solid  #78AB2B">Войти</a>
                <a href="./registration.php" style="color: black; border-bottom: 1px solid  #78AB2B">Регистрация</a>
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

<div class="slider slider__first">
    <div class="slider-block">
        <h1>Берсерк-Манга дня!</h1>
        <h2>It's literally me!</h2>
        <button class="button__large">
            <a href="./Book/Berserk.php">Унать больше</a>
        </button>
    </div>
</div>

<div class="content">
    <div class="content__blocks">
        <div class="content__block-column">
            <h1>Новинки!</h1>
            <div class="content__blocks-row">
                <a href="" class="mangaLink"><img src="./assets/img/Book/main/News/Panda/vgIPKmDmrXtk_250x350.jpg" alt=""></a>
                <a href="" class="mangaLink"><img src="./assets/img/Book/main/News/Kiss/cover.webp" alt=""></a>
                <a href="" class="mangaLink mobileNone"><img src="./assets/img/Book/main/News/After/cover%20(1).webp" alt=""></a>
                <a href="" class="mangaLink none"><img src="./assets/img/Book/main/News/One_piece/One+Piece+100.jpg" alt=""></a>
            </div>
        </div>
        <div class="content__block-column">
            <h1>Рекомендации от нас!</h1>
            <div class="content__blocks-row" >
                <a href="" class="mangaLink"><img src="./assets/img/Book/main/Recomendation/Silmalirion/cover.webp" alt=""></a>
                <a href="./Book/Alita.php" class="mangaLink"><img src="./assets/img/Book/main/Recomendation/Alita/Battle_Angel_Alita_vol01%201.png" alt=""></a>
                <a href="" class="mangaLink mobileNone"><img src="./assets/img/Book/main/Recomendation/Gold/cover.webp" alt=""></a>
                <a href="./Book/GhostInTheShell.php" class="mangaLink none"><img src="./assets/img/Book/main/Recomendation/GITS/GiS.manga.cover%20(1).jpg" alt=""></a>
            </div>
        </div>
    </div>

    <div class="content__toCatalog">
        <img src="./assets/img/landing/9641cd58f239de7d3e2767abeae63d33%201.jpg" alt="" style="border-radius: 30px" class="tabletNone none">

        <div class="content__toCatalog-block">
            <div class="content__toCatalog-subBlocks" >
                <div class="content__toCatalog-subBlock">
                    <p class="whiteText">Огромная база манги на любой вкус!</p>
                    <img src="./assets/img/landing/697%202.png" alt="">
                </div>

                <div class="content__toCatalog-subBlock">
                    <p class="whiteText">Возможность читать онлайн или скачивать!</p>
                    <img src="./assets/img/landing/697%202.png" alt="">
                </div>

                <div class="content__toCatalog-subBlock">
                    <p class="whiteText">Удобный и лёгкий поиск по жанрам!</p>
                    <img src="./assets/img/landing/697%202.png" alt="">
                </div>

                <div class="content__toCatalog-subBlock">
                    <p class="whiteText">Регулярные и самые свежие обновления!</p>
                    <img src="./assets/img/landing/697%202.png" alt="">
                </div>
            </div>

            <div class="content__toCatalog-text">
                <h1 style="text-align: center">Отправься в каталог и найди свою мангу!</h1>
                <button class="button__large">
                    <a href="./catalog.php">Перейти в каталог</a>
                </button>
            </div>

        </div>
    </div>

    <div class="content__toRecommendation" <?php if(isset($_SESSION['login'])){echo 'style="display:none"';}?>>
        <div class="content__toRecommendation-block">
            <img src="./assets/img/main/1-2-red-panda-png-file.png" alt="">

            <div class="content__toRecommendation-subBlock">
                <p>Мы всегда анализируем, что читает и смотрит наш пользователь и помогаем находить что-то новое по вашему вкусу, составляя рекомендации специально для вас!</p>

                <h2>Зарегейстрируйся или войди на сайт, чтобы получить список своих рекомендаций!</h2>

                <div class="buttons">
                    <button class="button__large"><a href="./login.php">Войти</a></button>
                    <button class="button__large"><a href="./login.php">Регистрация</a></button>
                </div>
            </div>
        </div>
    </div>

    <div class="content__toRecommendation" <?php if(!isset($_SESSION['login'])){echo 'style="display:none"';}?>>
        <div class="content__toRecommendation-block">
            <img src="./assets/img/main/Без%20имени-1.png" alt="">

            <div class="content__toRecommendation-subBlock">
                <h2>Панди очень устал, составляя рекомендации специально для тебя, можешь посмотреть, что он подготовил!</h2>

                <div class="buttons">
                    <button class="button__large"><a href="./login.php">К рекоммендациям</a></button>
                </div>
            </div>
        </div>
    </div>

    <div class="content_toAboutUs">
        <img src="./assets/img/main/Без%20имени-1%201.png" alt="">

        <div class="content_toAboutUs-block" style="">
            <h2>Есть вопрос?</h2>
            <button class="button__large">
                <a href="./aboutUs.php">Напиши нам!</a>
            </button>
        </div>
    </div>
</div>

<footer>
    <div class="footer-left" style="">
        <a href="">
            <div class="logotype">
                <img src="./assets/img/main/header/2223150%206.png" alt="">
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