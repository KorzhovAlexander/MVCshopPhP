<?php require 'view/temp/header.php'?>
<section class="container">
<div class="row">
    <!-- Page content body -->
    <div class="col s12">
        <div class="card login-form">
            <div class="card-content">
                <!-- title -->
                <div class="center-align border title-border m1">Сбросить пароль</div>

                <!-- card body -->
                <div class="card-body">
                    <p>Введите адрес электронной почты ниже, и мы вышлем Вам ссылку для сброса пароля.</p>
                    <!-- form -->
                    <form action="#">
                        <div class="row m-b-5">

                            <div class="input-field col s12">
                                <i class="material-icons prefix">email</i>
                                <input id="email" type="email" class="validate">
                                <label for="email" class="">Email</label>
                            </div>


                            <div class="input-field col s12">
                                <button class="btn btn-block waves-effect waves-light" type="submit" name="action">Отправить письмо для сброса пароля
                                </button>
                            </div>

                        </div>
                    </form>
                    <!-- End form -->

                    <!-- form footer -->
                    <div class="center-align">
                        Вспомнили свой пароль?
                        <a href="/login">Войти</a></div>

                    <div class="divider-or"></div>

                    <div class="center-align">
                        Нет аккаунта?
                        <a href="/registration">Зарегистрироваться</a></div>

                    <!-- End form footer -->

                </div>
                <!-- End card body -->

            </div>
        </div>
    </div>
    <!-- End Page content body -->


</div>
</section>
<?php require 'view/temp/footer.php'?>
