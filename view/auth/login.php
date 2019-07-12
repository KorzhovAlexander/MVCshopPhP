<?php require 'view/temp/header.php'?>

<div class="row">
    <!-- Page content body -->
    <div class="col s12">
        <div class="card login-form">
            <div class="card-content">
                <!-- title -->
                <div class="center-align border title-border m1">Добро пожаловать!</div>

                <!-- card body -->
                <div class="card-body">

                    <!-- form -->
                    <form action="#!">
                        <div class="row m-b-5">

                            <div class="input-field col s12">
                                <i class="material-icons prefix">email</i>
                                <input id="email" type="email" class="validate">
                                <label for="email" class="">Email</label>
                            </div>

                            <div class="input-field col s12">
                                <i class="material-icons prefix">lock_outline</i>
                                <input id="password" type="password" class="validate">
                                <label for="password" class="">Пароль</label>
                            </div>

                            <div class="col s12 center-align">
                                <p>
                                    <label>
                                        <input type="checkbox" class="filled-in" checked="checked">
                                        <span>Не выходить из системы</span>
                                    </label>
                                </p>
                            </div>

                            <div class="input-field col s12">
                                <button class="btn btn-block waves-effect waves-light" type="submit" name="action">Войдите в свой аккаунт
                                </button>
                            </div>

                        </div>
                    </form>
                    <!-- End form -->

                    <!-- form footer -->
                    <div class="center-align">
                        У вас нет аккаунта?
                        <a href="/registration">Зарегистрироваться</a></div>

                    <div class="divider-or"></div>

                    <div class="center-align">Забыли Ваш
                        <a href="/reset">пароль?</a></div>
                    <!-- End form footer -->

                </div>
                <!-- End card body -->

            </div>
        </div>
    </div>
    <!-- End Page content body -->
</div>
<?php require 'view/temp/footer.php'?>
