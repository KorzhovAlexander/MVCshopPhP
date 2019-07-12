<?php require 'view/temp/header.php'?>

<div class="row">
    <!-- Page content body -->
    <div class="col s12">
        <div class="card login-form">
            <div class="card-content">
                <!-- title -->
                <div class="center-align border title-border m1">Welcome back!</div>

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
                                <label for="password" class="">Password</label>
                            </div>

                            <div class="col s12">
                                <p>
                                    <label>
                                        <input type="checkbox">
                                        <span>Keep me logged in</span>
                                    </label>
                                </p>
                            </div>

                            <div class="input-field col s12">
                                <button class="btn btn-block waves-effect waves-light" type="submit" name="action">Sign In Your Account
                                </button>
                            </div>

                        </div>
                    </form>
                    <!-- End form -->

                    <!-- form footer -->
                    <div class="center-align">
                        Don't have an account?
                        <a href="#!">Sign up</a></div>

                    <div class="divider-or"></div>

                    <div class="center-align">Forgot your
                        <a href="#!">password?</a></div>
                    <!-- End form footer -->

                </div>
                <!-- End card body -->

            </div>
        </div>
    </div>
    <!-- End Page content body -->
</div>
<?php require 'view/temp/footer.php'?>
