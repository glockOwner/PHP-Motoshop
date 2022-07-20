<?php
include_once 'models/User.php';
include_once 'models/Order.php';
include_once 'models/Cart.php';

class CabinetController
{
    public function actionIndex()
    {
        require_once 'views/cabinet/cabinet.php';
        return true;
    }

    public function actionHistory()
    {
        $userId = $_SESSION['user'];

        $orders = Order::getAllOrdersByUserId($userId);

        require_once 'views/cabinet/order_history.php';
        return true;

    }

    public function actionView($id)
    {
        //Получаем данные о заказе по ID
        $order = Order::getOrderById($id);

        //Получаем ID и количество товаров
        $productQuantity = json_decode($order['products'], true);

        //Получаем массив с айди товаров
        $productIds = array_keys($productQuantity);

        //Получаем инфо о товарах
        $products = Cart::getProductsByIds($productIds);

        require 'views/cabinet/order_history_view.php';
        return true;
    }



    public function actionEdit()
    {
        //Получаем идентификатор пользователя из сессии
        $userId = $_SESSION['user'];

        //Получаем данные пользователя через id
        $user = User::getUserById($userId);

        $email = $user['email'];
        $surname = $user['surname'];
        $name = $user['name'];
        $password = $user['password'];

        if ($_POST['edit'])
        {
            $surname = $_POST['surname'];
            $name = $_POST['name'];
            $password = $_POST['password'];

            $errors = false;

            if (!User::checkSurname($surname))
            {
                $errors[] = 'Фамилия должна быть не менее 2-х символов';
            }

            if (!User::checkName($name))
            {
                $errors[] = 'Имя должно быть не менее 2-х символов';
            }

            if (!User::checkPassword($password))
            {
                $errors[] = 'Пароль должен быть не менее 6-ти символов';
            }

            if ($errors == false)
            {
                $result = User::edit($userId,$surname, $name, $password);
            }
        }

        require_once 'views/cabinet/edit_personal_data.php';
        return true;
    }

}