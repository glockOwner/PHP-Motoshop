<?php
include_once ROOT . '/models/User.php';

class UserController
{
    public function actionRegister()
    {
        if ($_POST['reg'])
        {
            $login = $_POST['login'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $surname = $_POST['surname'];
            $name = $_POST['name'];

            $errors = false;

            if (!User::checkName($name))
            {
                $errors[] = 'Имя должно быть не менее 2-х символов';
            }

            if (!User::checkSurname($surname))
            {
                $errors[] = 'Фамилия должна быть не менее 2-х символов';
            }

            if (!User::checkPassword($password))
            {
                $errors[] = 'Пароль должен быть не менее 6-ти символов';
            }

            if (!User::checkEmail($email))
            {
                $errors[] = 'Введите правильную электронную почту';
            }

            if (User::checkEmailExists($email))
            {
                $errors[] = 'Такой Email уже существует';
            }


            if ($errors == false)
            {
                $result = User::registration($login, $password, $email, $surname, $name);
            }
        }
        require_once "views/registration/reg.php";

        return true;
    }

    public function actionLogin()
    {
        $login = '';
        $password = '';

        if ($_POST['auth'])
        {
            $login = $_POST['login'];
            $password = $_POST['password'];

            $errors = false;

            //Валидация пароля
            if (!User::checkPassword($password))
            {
                $errors[] = 'Пароль должен быть не менее 6-ти символов';
            }

            //Проверяем, существует ли пользователь
            $userId = User::checkUserData($login, $password);

            if ($userId == false)
            {
                //Если данные неправильные, показываем ошибку
                $errors[] = 'Неправильные данные для входа';
            }
            else
            {
                //Если данные правильные, запоминаем пользователя в сессии
                User::auth($userId, $login);

                //Перенаправляем пользователя в ЛК
                header('Location: /cabinet/');

            }
        }

        require_once "views/registration/login.php";

        return true;
    }

    //Удаляем данные о пользователе из сессии
    public function actionLogout()
    {
        unset($_SESSION['user_login']);
        unset($_SESSION['is_auth']);
        unset($_SESSION['user']);

        header('Location: /');

        return true;
    }

}