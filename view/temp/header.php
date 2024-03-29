<!DOCTYPE html>
<html lang="ru">
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="/view/resources/css/materialize.css" media="screen,projection"/>

    <!--Import font-awesome.css-->
    <link type="text/css" rel="stylesheet" href="/view/resources/css/font-awesome.min.css">

    <!--Import main.css-->
    <link rel="stylesheet" href="/view/resources/css/style.css">

    <!--Import jquery lib-->
    <script type="text/javascript" src="/view/resources/js/jquery-3.4.1.min.js"></script>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>WebApp</title>
</head>
<body>
<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper container">
            <a href="/" class="brand-logo center">SmallShop</a>
            <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="left hide-on-med-and-down">
                <li class="waves-effect"><a href="/">Главная</a></li>
                <li class="waves-effect"><a href="/products">Товары</a></li>
                <li class="waves-effect"><a href="/send">Доставка</a></li>
            </ul>
            <ul class="right hide-on-med-and-down">
                <a href="#modal1" class="btn-floating waves-effect waves-light orange darken-4 hoverable modal-trigger
                <?php if (isset($_COOKIE['productID'])) echo 'pulse'?>">
                    <i class="material-icons tiny">shopping_cart</i></a>
                <?php if (userModel::isGuest()): ?>
                    <li class="waves-effect"><a href="/login"><i class="material-icons left">person</i>Войти</a></li>
                    <li class="waves-effect"><a href="/registration"><i class="material-icons left">person_add</i>Регистрация</a></li>
                <?php else: ?>
                    <li><a href="/cabinet/" disabled><i class="fa fa-user"></i> Аккаунт</a></li>
                    <li><a href="/logout/"><i class="fa fa-unlock"></i> Выход</a></li>
                <?php endif; ?>

            </ul>
        </div>
    </nav>
</div>
<!-- Modal Structure -->
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4>Ваши товары</h4>
        <span class="small grey-text">я слишком ленив, чтобы json просматривать и проверять каждый id в базе, просто поверьте мне, что
        я смогу это реализовать =_=" (первое значение id товара, второе - колличество. Все в куках)</span>
        <div id="cart-count">
            <?php if (isset($_COOKIE['productID'])) echo json_encode($_COOKIE['productID']) ?>
        </div>
    </div>
    <div class="modal-footer">
        <a href="/send" class="waves-effect waves-green btn-flat">Оформить заказ</a>
        <a href="#!" class="modal-close waves-effect waves-red btn-flat red-text">Закрыть</a>
    </div>
</div>
<ul class="sidenav" id="mobile-nav">
    <li><a href="/"><i class="material-icons left">home</i>Главная</a></li>
    <li><a href="/products"><i class="material-icons left">store</i>Товары</a></li>
    <li><a href="/send"><i class="material-icons left">directions_car</i>Доставка</a></li>
    <br>
    <li><a href="/login"><i class="material-icons left">person</i>Войти</a></li>
    <li><a href="/registration"><i class="material-icons left">person_add</i>Регистрация</a></li>
</ul>
