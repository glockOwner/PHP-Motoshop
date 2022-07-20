<?php
include_once 'models/Cart.php';
include_once 'models/User.php';
include_once 'models/Order.php';

class CartController
{
    public function actionAdd($id)
    {
        Cart::addProduct($id);

        $referer = $_SERVER['HTTP_REFERER'];
        header('Location: ' . $referer);
    }

    public function actionDelete($id)
    {
        Cart::deleteProduct($id);

        header('Location: /cart');
    }

    public function actionIndex()
    {
        //Получаем данные из корзины
        $productsInCart = Cart::getProducts();

        if ($productsInCart)
        {
            //Получаем информацию о товарах для списка
            $productsIds = array_keys($productsInCart);
            $productsInCart = Cart::getProductsByIds($productsIds);

            //Получаем общую стоимость
            $totalPrice = Cart::getTotalPrice($productsInCart);
        }

        require_once 'views/cart/cart.php';
        return true;
    }

    public function actionCheckout()
    {
        if ($_POST['reg_checkout'])
        {
            $name = $_POST['name'];
            $mail = $_POST['mail'];
            $phone = $_POST['phone'];
            $postcode = $_POST['postcode'];
            $locality = $_POST['locality'];
            $delivery_address = $_POST['delivery_address'];

            $errors = false;

            if (!User::checkName($name))
            {
                $errors[] = 'Имя должно быть не менее 2-х символов';
            }
            if (!User::checkEmail($mail))
            {
                $errors[] = 'Введите правильную электронную почту';
            }
            if (!User::checkPhone($phone))
            {
                $errors[] = 'Введите правильный номер телефона в формате 7950-***-**-**';
            }
            if (!User::checkPostcode($postcode))
            {
                $errors[] = 'Длина почтового индекса должна быть от 3-х символов';
            }

            if ($errors == false)
            {
                $productsInCart = Cart::getProducts();
                if ($_SESSION['is_auth'])
                {
                    $userId = $_SESSION['user'];
                }
                else
                {
                    $userId = false;
                }

                $result = Order::save($name, $mail, $phone, $postcode, $locality, $delivery_address, $userId, $productsInCart);

                if ($result)
                {
                    //Оповещаем администратора о новом заказе
                    $adminMail = 'danil.avdeev.2004@gmail.com';
                    $message = 'my.site/admin/orders';
                    $subject = 'Новый заказ!';

                    mail($adminMail, $subject, $message);

                    Cart::clear();
                }

            }
            else
            {
                //Показываем итоги покупок: Общее количество товаров и стоимость
                $productsInCart = Cart::getProducts();
                $productKeys = array_keys($productsInCart);
                $products = Cart::getProductsByIds($productKeys);
                $totalPrice = Cart::getTotalPrice($products);
                $totalQuantity = Cart::countItems();
            }
        }
        else
        {
            if (isset($_SESSION['products_in_cart']))
            {
                $productsInCart = Cart::getProducts();
                $productKeys = array_keys($productsInCart);
                $products = Cart::getProductsByIds($productKeys);
                $totalPrice = Cart::getTotalPrice($products);
                $totalQuantity = Cart::countItems();
                if ($_SESSION['is_auth'])
                {
                    $user = User::getUserById($_SESSION['user']);
                }
            }
            else
            {
                header('Loacation: /');
            }
        }

        require_once 'views/cart/checkout.php';
        return true;
    }

}