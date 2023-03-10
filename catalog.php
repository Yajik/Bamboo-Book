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
    <title>Bamboo Book-Каталог</title>
    <link rel="stylesheet" href="assets/css/main/main.css">
    <script src="assets/script.js" defer></script>
    <link rel="stylesheet" href="assets/css/catalog/catalog.css">

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

    <div class="cover coverFirst">
        <div class="cover-block">
            <h2 style="margin-bottom: 15px;">Добро пожаловать в каталог</h2>
            <h1>Найдётся всё, что душе угодно!</h1>
        </div>
    </div>

    <div class="content__block-column" style="display: flex; flex-direction: column; gap: 50px;">
        <h1>Выбор читателей!</h1>
        <div class="content__blocks-row">
            <a href="" class="mangaLink"><img src="./assets/img/Book/Hobbit/150515-dzhon-tolkin-hobbit-150515.webp" alt=""></a>
            <a href="" class="mangaLink"><img src="./assets/img/Book/450/39507162--.webp" alt=""></a>
            <a href="" class="mangaLink mobileNone"><img src="./assets/img/Book/onePunch/MV5BMTNmZDE2NDEtNTg3MS00OTE1LThlZGUtOGZkZTg0NTUyNGVmXkEyXkFqcGdeQXVyNTgyNTA4MjM@._V1_.jpg" alt=""></a>
            <a href="" class="mangaLink mobileNone"><img src="./assets/img/Book/Galaxy/166312-duglas-adams-avtostopom-po-galaktike-restoran-u-konca-vselennoy.webp" alt=""></a>
        </div>
    </div>

    <div class="catalog">
        <h1 style="margin-bottom: 50px;">Каталог</h1>
        <div class="catalog__genre">
            <div class="catalog__genre-options mobileNone catalogNone">
                <div class="catalog__genre-option catalog__genre-selected">
                    <p>Все</p>
                </div>

                <div class="catalog__genre-option">
                    <p>Фентези</p>
                </div>

                <div class="catalog__genre-option">
                    <p>Фантастика</p>
                </div>

                <div class="catalog__genre-option">
                    <p>Детективы</p>
                </div>

                <div class="catalog__genre-option">
                    <p>Киберпанк</p>
                </div>

                <div class="catalog__genre-option">
                    <p>Драма</p>
                </div>

            </div>

            <div class="catalog__genre-block">
                <div class="catalog__genre-search mobileNone catalogNone">
                    <form style="display: flex; flex-wrap: nowrap; gap: 10px; align-items: center">
                        <label style="width: 100%">
                            <input type="search" placeholder="Поиск по сайту...">
                        </label>

                        <label>
                            <input class="search__submit" type="submit" value="Поиск">
                        </label>
                    </form>
                </div>

                <div class="catalog__genre-title">
                    <div class="catalog__genre-title-text">
                        <h2>Все</h2>
                        <h2>Рекомендации</h2>
                    </div>

                    <div class="catalog__genre-burger">
                        <img src="./assets/img/main/menu.png" alt="">
                    </div>
                </div>

                <div class="catalog__genre-menu none">
                    <div class="catalog__genre-menu-options">
                        <div class="catalog__genre-option catalog__genre-selected">
                            <p>Все</p>
                        </div>

                        <div class="catalog__genre-option">
                            <p>Фентези</p>
                        </div>

                        <div class="catalog__genre-option">
                            <p>Фантастика</p>
                        </div>

                        <div class="catalog__genre-option">
                            <p>Детективы</p>
                        </div>

                        <div class="catalog__genre-option">
                            <p>Киберпанк</p>
                        </div>

                        <div class="catalog__genre-option">
                            <p>Драма</p>
                        </div>

                    </div>

                    <div class="catalog__genre-menu-search">
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

                <div class="content__block-column">
                    <div class="content__blocks-row">
                        <a href="./Book/Alita.html" class="mangaLink"><img src="./assets/img/Book/main/Recomendation/Alita/Battle_Angel_Alita_vol01%201.png" alt=""></a>
                        <a href="" class="mangaLink"><img src="./assets/img/Book/main/Recomendation/Gold/cover.webp" alt=""></a>
                        <a href="./Book/GhostInTheShell.html" class="mangaLink mobileNone"><img src="./assets/img/Book/main/Recomendation/GITS/GiS.manga.cover%20(1).jpg" alt=""></a>
                    </div>
                    <div class="content__blocks-row mobileNone">
                        <a href="./Book/Alita.html" class="mangaLink"><img src="./assets/img/Book/main/Recomendation/Alita/Battle_Angel_Alita_vol01%201.png" alt=""></a>
                        <a href="" class="mangaLink"><img src="./assets/img/Book/main/Recomendation/Gold/cover.webp" alt=""></a>
                        <a href="./Book/GhostInTheShell.html" class="mangaLink mobileNone"><img src="./assets/img/Book/main/Recomendation/GITS/GiS.manga.cover%20(1).jpg" alt=""></a>
                    </div>
                    <div class="content__blocks-row tabletNone">
                        <a href="./Book/Alita.html" class="mangaLink"><img src="./assets/img/Book/main/Recomendation/Alita/Battle_Angel_Alita_vol01%201.png" alt=""></a>
                        <a href="" class="mangaLink mobileNone"><img src="./assets/img/Book/main/Recomendation/Gold/cover.webp" alt=""></a>
                        <a href="./Book/GhostInTheShell.html" class="mangaLink mobileNone"><img src="./assets/img/Book/main/Recomendation/GITS/GiS.manga.cover%20(1).jpg" alt=""></a>
                    </div>

                    <img src="./assets/img/main/view-more%201.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="content_toAboutUs">
        <img src="./assets/img/main/Без%20имени-1%201.png" alt="">

        <div class="content_toAboutUs-block" style="">
            <h2>Есть вопрос?</h2>
            <button class="button__large">
                <a href="aboutUs.html">Напиши нам!</a>
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