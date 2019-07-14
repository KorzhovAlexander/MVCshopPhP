<?php


class userModel
{
    public static function checkName($name)
    {
        if (strlen($name) >= 2) {
            return true;
        }
        return false;
    }

    public static function checkEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }

    public static function checkPassword($password)
    {
        if (strlen($password) >= 6) {
            return true;
        }
        return false;
    }

    public static function checkFlag($flag)
    {
        if ($flag=='on'){
            return true;
        }
        return false;
    }

    public static function register(string $name, string $email, string $password)
    {
    }
}