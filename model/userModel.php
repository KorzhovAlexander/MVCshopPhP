<?php


class userModel
{
    public static function auth($userId)
    {
        // Записываем идентификатор пользователя в сессию
        $_SESSION['user'] = $userId;
    }

    public static function checkUserData($name, $password)
    {
        // Соединение с БД
        $db = DAO::getConnection();
        // Текст запроса к БД
        $sql = 'SELECT * FROM users WHERE username = :username AND password = :password';
        // Получение результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':username', $name, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        $result->execute();
        // Обращаемся к записи
        $user = $result->fetch();
        if ($user) {
            // Если запись существует, возвращаем id пользователя
            return $user['id'];
        }
        return false;
    }


    public static function register($name, $email, $password)
    {
        // Соединение с БД
        $db = DAO::getConnection();
        // Текст запроса к БД
        $sql = 'INSERT INTO users (username, email, password) '
            . 'VALUES (:name, :email, :password)';
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        return $result->execute();
    }


    public static function checkName($name)
    {
        if (strlen($name) >= 2) {
            return true;
        }
        return false;
    }

    public static function checkUsernameExists($name)
    {
        // Соединение с БД
        $db = DAO::getConnection();
        // Текст запроса к БД
        $sql = 'SELECT COUNT(*) FROM users WHERE username = :username';
        // Получение результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':username', $name, PDO::PARAM_STR);
        $result->execute();
        if ($result->fetchColumn())
            return true;
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

    public static function isGuest()
    {
        if (isset($_SESSION['user'])) {
            return false;
        }
        return true;
    }

}