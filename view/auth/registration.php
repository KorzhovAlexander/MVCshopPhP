<?php require 'view/temp/header.php'?>
<main>
<section class="container">
<div class="row">
    <!-- Page content body -->
    <div class="col s12">
        <div class="card login-form">
            <div class="card-content">
                <!-- title -->
                <div class="center-align border title-border m1">Создать учетную запись.</div>

                <?php if (isset($result)): ?>
                    <p>Вы зарегистрированы!</p>
                <?php header('Location:/'); else: ?>
                <?php if (isset($errors) && is_array($errors)): ?>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li class="red-text"> - <?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

                <!-- card body -->
                <div class="card-body">

                    <!-- form -->
                    <form action="#!" method="post">
                        <div class="row m-b-5">

                            <div class="input-field col s12">
                                <i class="material-icons prefix">account_box</i>
                                <input id="name" type="text" class="validate" name="name" value="<?php echo $name; ?>">
                                <label for="name">Имя</label>
                            </div>

                            <div class="input-field col s12">
                                <i class="material-icons prefix">email</i>
                                <input id="email" type="email" class="validate" name="email" value="<?php echo $email; ?>">
                                <label for="email">Email</label>
                            </div>
                            <?php endif; ?>

                            <div class="input-field col s12">
                                <i class="material-icons prefix">lock_outline</i>
                                <input id="password" type="password" class="validate" name="password">
                                <label for="password">Пароль</label>
                            </div>

                            <div class="input-field col s12">
                                <i class="material-icons prefix">lock</i>
                                <input id="confirm-password" type="password" class="validate">
                                <label for="confirm-password">Подтвердите Пароль</label>
                            </div>

                            <div class="col s12 center-align">
                                <p>
                                    <label>
                                        <input type="checkbox" class="filled-in" name="check">
                                        <span class="small">Я СОГЛАСЕН <b>на обработку</b> и хранение моих <b>персональных данных</b></span>
                                    </label>
                                </p>
                            </div>
<!---->
                            <div class="input-field col s12">
                                <button class="btn btn-block waves-effect waves-light" type="submit" name="action">Создать учетную запись
                                </button>
                            </div>
                        </div>
                    </form>
                    <!-- End form -->

                    <!-- form footer -->
                    <div class="center-align">
                        Уже есть аккаунт?
                        <a href="/login">Войти</a></div>
                    <!-- End form footer -->

                </div>
                <!-- End card body -->

            </div>
        </div>
    </div>
    <!-- End Page content body -->


</div>
</section>
</main>
<?php require 'view/temp/footer.php'?>
