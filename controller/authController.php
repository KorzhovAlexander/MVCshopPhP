<?php


class authController
{
    public function loginAction()
    {

        require_once (ROOT.'/view/auth/login.php');
        return true;
    }

    public function registrationAction()
    {
        if (isset($_POST['action'])){
            $name=trim($_POST['name']);
            $email=trim($_POST['email']);
            $password=trim($_POST['password']);
            $flag=$_POST['check'];


            if (isset($name)){
                echo "<br>$name";
            }
            if (isset($email)){
                echo "<br>$email";
            }
            if (isset($password)){
                echo "<br>$password";
            }
            if (isset($flag)){
                echo "<br>$flag";
            }


        }
        require_once (ROOT.'/view/auth/registration.php');
        return true;
    }

    public function resetAction()
    {
        require_once (ROOT.'/view/auth/resetpas.php');
        return true;
    }

}