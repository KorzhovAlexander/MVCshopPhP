<?php require 'view/temp/header.php'?>
<div class="row">
    <!-- Page content body -->
    <div class="col s12">
        <div class="card login-form">
            <div class="card-content">
                <!-- title -->
                <div class="center-align border title-border m1">Reset your password</div>

                <!-- card body -->
                <div class="card-body">
                    <p>Enter your email address below and we'll send you a link to reset your password.</p>
                    <!-- form -->
                    <form action="#">
                        <div class="row m-b-5">

                            <div class="input-field col s12">
                                <i class="material-icons prefix">email</i>
                                <input id="email" type="email" class="validate">
                                <label for="email" class="">Email</label>
                            </div>


                            <div class="input-field col s12">
                                <button class="btn btn-block waves-effect waves-light" type="submit" name="action">Send reset password email
                                </button>
                            </div>

                        </div>
                    </form>
                    <!-- End form -->

                    <!-- form footer -->
                    <div class="center-align">
                        Remember your password?
                        <a href="/login">Sign in</a></div>

                    <div class="divider-or"></div>

                    <div class="center-align">
                        Don't have an account?
                        <a href="/registration">Sign up</a></div>

                    <!-- End form footer -->

                </div>
                <!-- End card body -->

            </div>
        </div>
    </div>
    <!-- End Page content body -->


</div>
<?php require 'view/temp/footer.php'?>
