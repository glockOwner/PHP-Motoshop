<?php

class User
{
    public static function registration($login, $password, $email, $surname, $name)
    {
        $db = Db::getConnection();

        $sql = "INSERT INTO `users` (`login`, `password`, `surname`, `name`, `email`, `role`) VALUES (:login, :password, :surname, :name, :email, 0)";

        $result = $db->prepare($sql);
        $result->bindValue(':login', $login, PDO::PARAM_STR);
        $result->bindValue(':password', $password, PDO::PARAM_STR);
        $result->bindValue(':surname', $surname, PDO::PARAM_STR);
        $result->bindValue(':name', $name, PDO::PARAM_STR);
        $result->bindValue(':email', $email, PDO::PARAM_STR);

        return $result->execute();
    }

    /*Проверка длины имени(должно быть больше 2-х или равно символов)*/
    public static function checkName($name)
    {
        if (strlen($name) >= 2) {
            return true;
        } else {
            return false;
        }
    }

    /*Проверка длины фамилии(должно быть больше 2-х или равно символов)*/
    public static function checkSurname($surname)
    {
        if (strlen($surname) >= 2) {
            return true;
        } else {
            return false;
        }
    }

    /*Проверка длины пароля(должно быть больше 5-ти символов)*/
    public static function checkPassword($password)
    {
        if (strlen($password) >= 6) {
            return true;
        } else {
            return false;
        }
    }

    /*Проверка почты(должно подходить под шаблон почты)*/
    public static function checkEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
    }

    //Смотрим, есть ли почта в базе данных
    public static function checkEmailExists($email)
    {
        $db = Db::getConnection();

        $result = $db->prepare("SELECT COUNT(*) FROM `users` WHERE `email` = :email");
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();

        if ($result->fetchColumn()) return true;
        else return false;
    }

    //Длина телефона должна быть от 11 символов
    public static function checkPhone($phone)
    {
        if (strlen($phone) >= 11)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    //Длина почтового индекса должна быть от 3-х символов
    public static function checkPostcode($postcode)
    {
        if (strlen($postcode) >= 3)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    /**
     * Проверяем, существует ли в БД пользователь с
     * заданными логином и паролем
     * @param $login логин
     * @param $password пароль
     */
    public static function checkUserData($login, $password)
    {
        $db = Db::getConnection();

        $sql = 'SELECT * FROM `users` WHERE `login` = :login AND `password` = :password';

        $result = $db->prepare($sql);
        $result->bindParam(':login', $login,PDO::PARAM_STR);
        $result->bindParam(':password', $password,PDO::PARAM_STR);
        $result->execute();

        $user = $result->fetch();

        if ($user)
        {
            return $user['id'];
        }
        else
        {
            return false;
        }

    }

    /**
     *
     * Запоминаем пользователя в сессию
     * @param $userId
     *
     */
    public static function auth($userId, $login)
    {
        session_start();
        $_SESSION['user_login'] = $login;
        $_SESSION['is_auth'] = true;
        $_SESSION['user'] = $userId;
    }

    /**
     * Получаем информацию о пользователе
     * @param $id айди_пользователя
     * @return $result
     */
    public static function getUserById($id)
    {
        $db = Db::getConnection();

        $sql = 'SELECT * FROM `users` WHERE `id` = :id';

        $result = $db ->prepare($sql);
        $result ->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();

        $result->setFetchMode(PDO::FETCH_ASSOC);
        return $result->fetch();

    }

    public static function edit($userId,$surname, $name, $password)
    {
        $db = Db::getConnection();

        $sql = "UPDATE `users` SET `surname` = :surname, `name` = :namme, `password` = :password
        WHERE `id` = :id ;";

        $result = $db->prepare($sql);
        $result->bindParam(':surname', $surname, PDO::PARAM_STR);
        $result->bindParam(':namme', $name, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        $result->bindParam(':id', $userId, PDO::PARAM_STR);
        $result->execute();

        return $result;
    }

    public static function getAllUsers()
    {
        $db = Db::getConnection();

        $sql = "SELECT * FROM `users`";

        $result = $db->query($sql);

        $n = 0;
        while ($row = $result->fetch(PDO::FETCH_ASSOC))
        {
            $users[$n]['id'] = $row['id'];
            $users[$n]['login'] = $row['login'];
            $users[$n]['password'] = $row['password'];
            $users[$n]['surname'] = $row['surname'];
            $users[$n]['name'] = $row['name'];
            $users[$n]['email'] = $row['email'];
            $users[$n]['role'] = $row['role'];

            $n++;
        }

        return $users;
    }

    public static function updateUser($id, $user_login , $user_password , $user_surname , $user_name , $user_email , $user_role)
    {
        $db = Db::getConnection();

        $sql = "UPDATE `users` SET `login` = :login, `password` = :password, `surname` = :surname, `name` = :name, `email` = :email, `role` = :role 
                WHERE `id` = :id";
        $result = $db->prepare($sql);
        $result->bindParam(':login', $user_login, PDO::PARAM_STR);
        $result->bindParam(':password', $user_password, PDO::PARAM_STR);
        $result->bindParam(':surname', $user_surname, PDO::PARAM_STR);
        $result->bindParam(':name', $user_name, PDO::PARAM_STR);
        $result->bindParam(':email', $user_email, PDO::PARAM_STR);
        $result->bindParam(':role', $user_role, PDO::PARAM_INT);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        return $result->execute();
    }

    public static function deleteUser($id)
    {
        $db = Db::getConnection();

        $sql = "DELETE FROM `users` WHERE  `id` = :id";
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT );
        $result->execute();
    }





}