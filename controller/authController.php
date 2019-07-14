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
        $name='';
        $email='';
        $password='';
        $flag=false;
        if (isset($_POST['action'])){
            $name=trim($_POST['name']);
            $email=trim($_POST['email']);
            $password=trim($_POST['password']);
            $flag=isset($_POST['check']);

            // Флаг ошибок
            $errors = false;


            // Валидация полей
            if (!userModel::checkName($name)) {
                $errors[] = 'Имя не должно быть короче 2-х символов';
            }
            if (!userModel::checkEmail($email)) {
                $errors[] = 'Неправильный email';
            }
            if (!userModel::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }
            if (!userModel::checkFlag($flag)) {
                $errors[] = 'Необходимо принять согласие на обработку персональных данных';
            }

            if ($errors == false) {
                // Если ошибок нет
                // Регистрируем пользователя
//                $result = userModel::register($name, $email, $password);
                $result=true;
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