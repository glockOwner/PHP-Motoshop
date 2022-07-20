<?php

class Order
{
    /**
     * Сохранение заказа в БД
     * @param $userName
     * @param $userMail
     * @param $userPhone
     * @param $userPostcode
     * @param $userLocality
     * @param $deliveryAddress
     * @param $userId
     * @param $products
     * @return bool
     */
    public static function save($userName, $userMail, $userPhone, $userPostcode, $userLocality, $deliveryAddress, $userId, $products)
    {
        $db = Db::getConnection();
        foreach ($products as $id => $qty)
        {
            $sqlUpdateSales = "UPDATE `goods` SET `num_of_sales` = `num_of_sales` + :qty WHERE `id` = :id";
            $resultUpdateSales = $db->prepare($sqlUpdateSales);
            $resultUpdateSales->bindParam(':qty', $qty, PDO::PARAM_INT);
            $resultUpdateSales->bindParam(':id', $id, PDO::PARAM_INT);
            $resultUpdateSales->execute();
        }

        $products = json_encode($products);


        $sql = "INSERT INTO `product_orders` (`user_name`, `user_mail`, `user_phone`, `user_postcode`, `user_locality`, `delivery_address`, `user_id`, `date`, `products`, `status`) 
VALUES (:userName, :userMail, :userPhone, :userPostcode, :userLocality, :deliveryAddress, :userId, CURRENT_TIMESTAMP, :products, '0');";

        $result = $db->prepare($sql);
        $result->bindParam(':userName', $userName,PDO::PARAM_STR);
        $result->bindParam(':userMail', $userMail,PDO::PARAM_STR);
        $result->bindParam(':userPhone', $userPhone,PDO::PARAM_STR);
        $result->bindParam(':userPostcode', $userPostcode,PDO::PARAM_STR);
        $result->bindParam(':userLocality', $userLocality,PDO::PARAM_STR);
        $result->bindParam(':deliveryAddress', $deliveryAddress,PDO::PARAM_STR);
        $result->bindParam(':userId', $userId,PDO::PARAM_STR);
        $result->bindParam(':products', $products,PDO::PARAM_STR);

        return $result->execute();
    }



    public static function getOrderById($id)
    {
        $db = Db::getConnection();

        $sql = "SELECT * FROM `product_orders` WHERE `id` = '$id';";
        $result = $db->query($sql);


        return $result->fetch(PDO::FETCH_ASSOC);
    }

    public static function getAllOrders()
    {
        $db = Db::getConnection();

        $sql = "SELECT * FROM `product_orders`";

        $result = $db->query($sql);

        $n = 0;
        while ($row = $result -> fetch(PDO::FETCH_ASSOC))
        {
            $orders[$n]['id'] = $row['id'];
            $orders[$n]['user_name'] = $row['user_name'];
            $orders[$n]['user_phone'] = $row['user_phone'];
            $orders[$n]['date'] = $row['date'];
            $orders[$n]['status'] = $row['status'];
            $n++;
        }

        return $orders;
    }

    public static function getAllOrdersByUserId($userId)
    {
        $db = Db::getConnection();

        $sql = "SELECT * FROM `product_orders` WHERE `user_id` = '$userId'";

        $result = $db->query($sql);

        $n = 0;
        while ($row = $result -> fetch(PDO::FETCH_ASSOC))
        {
            $orders[$n]['id'] = $row['id'];
            $orders[$n]['user_name'] = $row['user_name'];
            $orders[$n]['user_phone'] = $row['user_phone'];
            $orders[$n]['date'] = $row['date'];
            $orders[$n]['status'] = $row['status'];
            $n++;
        }

        return $orders;
    }

    public static function deleteOrderById($id)
    {
        $db = Db::getConnection();

        $sql = "DELETE FROM `product_orders` WHERE `id` = :id";
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }

    public static function updateOrderById($id, $user_name, $user_phone, $user_mail, $user_postcode, $delivery_address, $date, $status)
    {
        $db = Db::getConnection();

        $sql = "UPDATE `product_orders` SET `user_name` = :user_name, `user_phone` = :user_phone, `user_mail` = :user_mail, `user_postcode` = :user_postcode, `delivery_address` = :delivery_address, `date` = '$date', `status` = :status 
        WHERE `id` = :id;";

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':user_name', $user_name, PDO::PARAM_STR);
        $result->bindParam(':user_phone', $user_phone, PDO::PARAM_STR);
        $result->bindParam(':user_mail', $user_mail, PDO::PARAM_STR);
        $result->bindParam(':user_postcode', $user_postcode, PDO::PARAM_STR);
        $result->bindParam(':delivery_address', $delivery_address, PDO::PARAM_STR);
        $result->bindParam(':status', $status, PDO::PARAM_INT);

        $result -> execute();

        return $result;
    }
}