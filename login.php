<?php
session_start();
$loginError = '';
$login = 'Yajik';
$password = '12345';


if(isset($_POST['submit'])){
    if(($_POST['login']===$login) and ($_POST['password']===$password)){
        $_SESSION['img'] = './../assets/img/users/loginImg.png';
        $_SESSION['login'] = $_POST['login'];
        header('location: index.php');
    }
    else{
        $loginError = 'Неверный логин или пароль';
    }
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/main/main.css">
    <link rel="stylesheet" href="assets/css/login/login.css">
</head>
<body>

<header style="">
    <div class="header__row">
        <a href="./index.php">
            <div class="logotype" style="justify-content: center">
                <img src="./assets/img/main/header/2223150%206.png" alt="">
                <p class="logoText">bamboo book</p>
            </div>
        </a>
    </div>
</header>

<div class="content">

    <div class="content__login">
        <img src="./assets/img/login/loginImg.png" alt="">
        <form action="" method="post">
            <?php echo "<p style='color: red'>$loginError</p>"?>

            <label>
                <input type="text" name="login" placeholder="Введите свой логин">
            </label>

            <label>
                <input type="password" name="password" placeholder="Введите свой пароль">
            </label>

            <label>
                <input type="submit" name="submit" value="Войти">
            </label>
        </form>
    </div>

</div>

</body>
</html>
