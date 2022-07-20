<?php
include_once 'models/User.php';

abstract class AdminBase
{
    /**
     * Проверяем, является ли пользователь администратором
     * @return bool|void
     */
    public static function checkAdminOrModer()
    {
        //Проверяем, залогинен ли пользователь
        if ($_SESSION['is_auth'])
        {
            //Получаем информацию о пользователе по его id
            $userId = $_SESSION['user'];
            $user = User::getUserById($userId);
            //Проверяем роль пользователя
            if ($user['role'] == 2 or $user['role'] == 1)
            {
                return true;
            }
            else
            {
                die('Доступ запрещён');
            }
        }
        //Если не залогинен, перенаправляем на страницу авторизации
        else
        {
            header('Location: /login');
        }
    }

    public static function checkAdmin()
    {
        {
            //Проверяем, залогинен ли пользователь
            if ($_SESSION['is_auth'])
            {
                //Получаем информацию о пользователе по его id
                $userId = $_SESSION['user'];
                $user = User::getUserById($userId);
                //Проверяем роль пользователя
                if ($user['role'] == 2)
                {
                    return true;
                }
                else
                {
                    return false;
                }
            }
            //Если не залогинен, перенаправляем на страницу авторизации
            else
            {
                header('Location: /login');
            }
        }
    }

}