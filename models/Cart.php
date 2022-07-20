<?php

class Cart
{
    public static function addProduct($id)
    {
        $id = intval($id);
        //Создание пустого массива для товаров в корзине
        $productsInCart = array();

        //Помещаем в переменную сессию, если она уже есть
        if ($_SESSION['products_in_cart'])
        {
            $productsInCart = $_SESSION['products_in_cart'];
        }

        if (array_key_exists($id, $productsInCart))
        {
            $productsInCart[$id]++;
        }
        else
        {
            $productsInCart[$id] = 1;
        }

        $_SESSION['products_in_cart'] = $productsInCart;
    }

    public static function deleteProduct($id)
    {
        $id = intval($id);
        //Создание пустого массива для товаров в корзине
        $productsInCart = array();

        //Помещаем в переменную сессию, если она уже есть
        if ($_SESSION['products_in_cart'])
        {
            $productsInCart = $_SESSION['products_in_cart'];
        }

        if ($productsInCart[$id] > 1)
        {
            $productsInCart[$id]--;
        }
        else
        {
            unset($productsInCart[$id]);
        }

        $_SESSION['products_in_cart'] = $productsInCart;
    }

    public static function countItems()
    {
        if ($_SESSION['products_in_cart'])
        {
            $count = 0;

            foreach ($_SESSION['products_in_cart'] as $id => $quantity)
            {
                $count = $count + $quantity;
            }
            return $count;
        }
        else
        {
           return 0;
        }

    }

    public static function getProducts()
    {
        if (isset($_SESSION['products_in_cart']))
        {
            return $_SESSION['products_in_cart'];
        }
        else
        {
            return false;
        }
    }

    public static function getProductsByIds($productsIds)
    {
        $db = Db::getConnection();

        $idsString = implode(',', $productsIds);

        $sql = "SELECT * FROM `goods` WHERE `availability` = 1 AND id IN ($idsString)";

        $result = $db->query($sql);

        $i = 0;
        while ($row = $result->fetch(PDO::FETCH_ASSOC))
        {
            $products[$i]['id'] = $row['id'];
            $products[$i]['part_number'] = $row['part_number'];
            $products[$i]['item_name'] = $row['item_name'];
            $products[$i]['price'] = $row['price'];
            $i++;
        }

        return $products;

    }

    public static function getTotalPrice($products)
    {
        $productsInCart = self::getProducts();
        $total = 0;
        if ($productsInCart)
        {
            foreach ($products as $item)
            {
                $total += $item['price'] * $productsInCart[$item['id']];
            }
        }
        return $total;
    }

    public static function clear()
    {
        if (isset($_SESSION['products_in_cart']))
        {
            unset($_SESSION['products_in_cart']);
        }
    }
}