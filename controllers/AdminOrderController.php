<?php
include_once 'models/AdminBase.php';
include_once 'models/Product.php';
include_once 'models/Order.php';
include_once 'models/Cart.php';

class AdminOrderController extends AdminBase
{
    public function actionView($id)
    {
        self::checkAdminOrModer();

        //Получаем данные о заказе по ID
        $order = Order::getOrderById($id);

        //Получаем ID и количество товаров
        $productQuantity = json_decode($order['products'], true);

        //Получаем массив с айди товаров
        $productIds = array_keys($productQuantity);

        //Получаем инфо о товарах
        $products = Cart::getProductsByIds($productIds);

        require 'views/admin_orders/view.php';
        return true;
    }

    public function actionIndex()
    {
        //Проверяем, админ ли
        self::checkAdminOrModer();

        $orders = Order::getAllOrders();

        require_once 'views/admin_orders/index.php';
        return true;
    }

    public function actionDelete($id)
    {
        //Проверяем, админ ли
        self::checkAdminOrModer();

        //Удаляем товар
        Order::deleteOrderById($id);
        //Перенаправляем админа на список заказов
        header('Location: /admin/order');
    }

    public function actionUpdate($id)
    {
        self::checkAdminOrModer();

        $order = Order::getOrderById($id);

        if ($_POST['update'])
        {
            $user_name = $_POST['user_name'];
            $user_phone = $_POST['user_phone'];
            $user_mail = $_POST['user_mail'];
            $user_postcode = $_POST['user_postcode'];
            $delivery_address = $_POST['delivery_address'];
            $date = $_POST['date'];
            $status = $_POST['status'];


            if ($user_name && $user_phone && $user_mail && $user_postcode && $delivery_address && $date && $status)
            {
                $result = Order::updateOrderById($id, $user_name, $user_phone, $user_mail, $user_postcode, $delivery_address, $date, $status);

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

        require_once 'views/admin_orders/update_order.php';
        return true;
    }
}