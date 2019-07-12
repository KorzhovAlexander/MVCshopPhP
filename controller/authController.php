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
        require_once (ROOT.'/view/auth/registration.php');
        return true;
    }

}