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
    <title>Bamboo Book-Профиль</title>
    <link rel="stylesheet" href="assets/css/main/main.css">
    <link rel="stylesheet" href="assets/css/profile/profile.css">
    <script src="assets/script.js" defer></script>
    <script src="assets/script2.js" defer></script>

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

<div class="content">
    <h1 style="text-align: left; width: 100%;">Твой чудесный профиль!</h1>

    <div class="profile ">
        <div class="profile__cover">
            <div class="profile__cover-left">
                <a href=""><?="<img src='$_SESSION[img]' alt=''>"; ?></a>
                <h2><?=$_SESSION['login']?></h2>
            </div>

            <div class="profile__cover-right">
                <button class="button__large">
                    <a href="">Настройки</a>
                </button>
            </div>
        </div>
        <div class="profile__select">
            <p class="profile__select-selected" style="cursor: pointer">Читательский лист</p>
            <p style="cursor: pointer">Отзывы</p>
            <p style="cursor: pointer">Сообщения</p>
            <p style="cursor: pointer">Уведомления</p>
        </div>
    </div>

    <div class="profile-mobile">
        <div class="profile-mobile-row">
            <div class="profile-mobile-left">
                <img src="<?="<img src='$_SESSION[img]' alt=''>"; ?>" alt="">
                <h2><?=$_SESSION['login']?></h2>
            </div>

            <div class="profile-mobile-right">
                <img src="./assets/img/main/menu.png" alt="" class="">
            </div>
        </div>

        <div class="profile-mobile-select none">
            <p class="profile__select-selected" style="cursor: pointer">Читательский лист</p>
            <p style="cursor: pointer">Отзывы</p>
            <p style="cursor: pointer">Сообщения</p>
            <p style="cursor: pointer">Уведомления</p>

            <button class="button__large">
                <a href="">Настройки</a>
            </button>
        </div>
    </div>

    <div class="reader__list">
        <div class="reader__list-options">
            <div class="reader__list-option">
                <p>Все</p>
                <p style="color: #868686">2</p>
            </div>

            <div class="reader__list-option reader__list-option-selected">
                <p class="">Читаю</p>
                <p style="color: #868686">2</p>
            </div>

            <div class="reader__list-option">
                <p>В планах</p>
                <p style="color: #868686">0</p>
            </div>

            <div class="reader__list-option">
                <p>Прочитано</p>
                <p style="color: #868686">1</p>
            </div>

            <div class="reader__list-option">
                <p>Брошено</p>
                <p style="color: #868686">0</p>
            </div>

            <div class="reader__list-option">
                <p>Избранное</p>
                <p style="color: #868686">1</p>
            </div>
        </div>

        <div class="reader__list-block" style="">
            <div class="reader__list-search">
                <form style="display: flex; flex-wrap: nowrap; gap: 10px; align-items: center">
                    <label style="width: 100%">
                        <input type="search" placeholder="Поиск по сайту...">
                    </label>

                    <label>
                        <input class="search__submit" type="submit" value="Поиск">
                    </label>
                </form>
            </div>

            <div class="reader__list-list">
                <div class="reader__list-list__block" style="">
                    <a href="./Book/Alita.php"><img src="./assets/img/profile/Battle_Angel_Alita_vol01%202.png" alt=""></a>

                    <div class="list__block-text" style="">
                        <div class="list__block-title">
                            <h2>Боевой Ангел Алита</h2>
                            <p style="color: #868686">(GUNNM)</p>
                        </div>
                        <div class="list__block-date">
                            <p>Добавленно:</p>
                            <p style="color: #868686">17.12.2022</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="reader__list-list">
                <div class="reader__list-list__block" >
                    <a href="./Book/GhostInTheShell.php"><img src="./assets/img/profile/GiS.manga%201.png" alt=""></a>

                    <div class="list__block-text">
                        <div class="list__block-title" >
                            <h2>Призрак в доспехах</h2>
                            <p style="color: #868686">(Ghost in the shell)</p>
                        </div>
                        <div class="list__block-date">
                            <p>Добавленно:</p>
                            <p style="color: #868686">17.12.2022</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="toRec" style="">
        <img src="./assets/img/profile/Без%20имени-1%202.png" alt="">

        <div class="toRec__block">
            <h2>Наш Панди составил для тебя рекомендации!</h2>

            <button class="button__large">
                <a href="">К рекомендациям</a>
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