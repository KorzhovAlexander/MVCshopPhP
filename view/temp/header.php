<!DOCTYPE html>
<html lang="ru">
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="/view/resources/css/materialize.css" media="screen,projection"/>
    <link rel="stylesheet" href="/view/resources/css/style.css">

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
                <li class="waves-effect"><a href="#!">Товары</a></li>
                <li class="waves-effect"><a href="#!">Доставка</a></li>
            </ul>
            <ul class="right hide-on-med-and-down">
                <a href="#!" class="btn-floating waves-effect waves-light orange darken-4 "><i class="material-icons tiny">shopping_cart</i></a>
                <li class="waves-effect"><a href="/login"><i class="material-icons left">person</i>Войти</a></li>
                <li class="waves-effect"><a href="/registration"><i class="material-icons left">person_add</i>Регистрация</a></li>
            </ul>
        </div>
    </nav>
</div>
<ul class="sidenav" id="mobile-nav">
    <li><a href="/"><i class="material-icons left">home</i>Главная</a></li>
    <li><a href="#!"><i class="material-icons left">store</i>Товары</a></li>
    <li><a href="#!"><i class="material-icons left">directions_car</i>Доставка</a></li>
    <br>
    <li><a href="/login"><i class="material-icons left">person</i>Войти</a></li>
    <li><a href="/registration"><i class="material-icons left">person_add</i>Регистрация</a></li>
</ul>

<script>

</script>