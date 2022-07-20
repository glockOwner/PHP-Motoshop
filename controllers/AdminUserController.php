<?php
include_once 'models/AdminBase.php';
include_once 'models/User.php';

class AdminUserController extends AdminBase
{
    public function actionIndex()
    {
        self::checkAdminOrModer();

        $users = User::getAllUsers();

        require 'views/admin_users/index.php';
        return true;
    }

    public function actionUpdate($id)
    {
        self::checkAdminOrModer();

        $user = User::getUserById($id);

        if ($_POST['update'])
        {
            $user_login = $_POST['user_login'];
            $user_password = $_POST['user_password'];
            $user_surname = $_POST['user_surname'];
            $user_name = $_POST['user_name'];
            $user_email = $_POST['user_email'];
            $user_role = $_POST['user_role'];


            if ($user_login && $user_password && $user_surname && $user_name && $user_email && isset($user_role))
            {
                $result = User::updateUser($id, $user_login , $user_password , $user_surname , $user_name , $user_email , $user_role);

                if (!$result)
                {
                    $error = 'Заполните поля правильно!';
                }
            }
            else
            {
                $error = 'Заполните все поля';
            }
        }

        require_once 'views/admin_users/update_user.php';
        return true;
    }

    public function actionDelete($id)
    {
        self::checkAdminOrModer();

        User::deleteUser($id);

        header("Location:/admin/user");
    }
}