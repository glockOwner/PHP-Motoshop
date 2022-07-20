<?php

class Product
{
    const SHOW_BY_DEFAULT = 5;

    /*
     * Returns an array of products
     */
    public static function getLatestProducts($count = self::SHOW_BY_DEFAULT)
    {
        $count = intval($count);

        $db = Db::getConnection();

        $productsList = array();

        $result = $db->query("SELECT `id`, `item_name`,`price`, `img_path` FROM `goods`"
            . " ORDER BY `id` DESC"
            . " LIMIT " . $count);

        $i = 0;
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['item_name'] = $row['item_name'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['img_path'] = $row['img_path'];
            $i++;
        }
        return $productsList;

    }

    public static function getBestsellerProducts()
    {
        $db = Db::getConnection();

        $sql = "SELECT `id`, `item_name`,`price`, `img_path`, `num_of_sales` FROM `goods`"
                . " ORDER BY `num_of_sales` DESC"
                . " LIMIT " . 5;

        $result = $db->query($sql);

        $n = 0;
        while ($row = $result->fetch(PDO::FETCH_ASSOC))
        {
            $productsBestsellersList[$n]['id'] = $row['id'];
            $productsBestsellersList[$n]['item_name'] = $row['item_name'];
            $productsBestsellersList[$n]['price'] = $row['price'];
            $productsBestsellersList[$n]['img_path'] = $row['img_path'];
            $n++;
        }

        return $productsBestsellersList;
    }

    public static function getNumberOfPage($pageNumber = 1)
    {
        if ($_GET['page_switch']) {
            $pageNumber = $_GET['page_switch'];
        }
        return $pageNumber;
    }

    public static function getAmountOfPages($field, $fieldValue)
    {
        $db = Db::getConnection();
        $result = $db->query("SELECT `id`, `item_type`, `item_name`,`price`, `img_path` FROM `goods`"
            . "WHERE `$field`= '$fieldValue'"
            . " ORDER BY `id`");
        if ($result->rowCount() > 15) {
            $amountOfPages = intval(($result->rowCount()) / 15);
        } else {
            $amountOfPages = 1;
        }
        return $amountOfPages;
    }

    public static function getMotorcyclesList($productBrand = false)
    {
        $db = Db::getConnection();
        if ($productBrand)
        {
            $sql = "SELECT `id`, `item_type`, `item_name`,`price`, `img_path` FROM `goods`"
                . "WHERE `item_type`= 'motorcycle' AND `item_brand`= '$productBrand'"
                . " ORDER BY `id` DESC;";
        }
        else
        {
            $sql = "SELECT `id`, `item_type`, `item_name`,`price`, `img_path` FROM `goods`"
                . "WHERE `item_type`= 'motorcycle'"
                . " ORDER BY `id` DESC;";
        }
        $result = $db->query($sql);

        $numberOfPage = self::getNumberOfPage();
        for ($i = $numberOfPage * 15 - 15; $i < $numberOfPage * 15; $i++) {
            $n = 0;
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $motorcyclesList[$n]['id'] = $row['id'];
                $motorcyclesList[$n]['item_name'] = $row['item_name'];
                $motorcyclesList[$n]['price'] = $row['price'];
                $motorcyclesList[$n]['item_type'] = $row['item_type'];
                $motorcyclesList[$n]['img_path'] = $row['img_path'];
                $n++;
            }
        }
        return $motorcyclesList;
    }

    public static function getPitbikesList($productBrand = false)
    {
        $db = Db::getConnection();
        if ($productBrand)
        {
            $sql = "SELECT `id`, `item_type`, `item_name`,`price`, `img_path` FROM `goods`"
                . "WHERE `item_type`= 'pitbike' AND `item_brand`= '$productBrand'"
                . " ORDER BY `id` DESC;";
        }
        else
        {
            $sql = "SELECT `id`, `item_type`, `item_name`,`price`, `img_path` FROM `goods`"
                . "WHERE `item_type`= 'pitbike'"
                . " ORDER BY `id` DESC;";
        }
        $result = $db->query($sql);

        $numberOfPage = self::getNumberOfPage();
        for ($i = $numberOfPage * 15 - 15; $i < $numberOfPage * 15; $i++) {
            $n = 0;
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $pitbikesList[$n]['id'] = $row['id'];
                $pitbikesList[$n]['item_name'] = $row['item_name'];
                $pitbikesList[$n]['price'] = $row['price'];
                $pitbikesList[$n]['item_type'] = $row['item_type'];
                $pitbikesList[$n]['img_path'] = $row['img_path'];
                $n++;
            }
        }
        return $pitbikesList;
    }

    public static function getAtvsList($productBrand = false)
    {
        $db = Db::getConnection();
        if ($productBrand)
        {
            $sql = "SELECT `id`, `item_type`, `item_name`,`price`, `img_path` FROM `goods`"
                . "WHERE `item_type`= 'atv' AND `item_brand`= '$productBrand'"
                . " ORDER BY `id` DESC;";
        }
        else
        {
            $sql = "SELECT `id`, `item_type`, `item_name`,`price`, `img_path` FROM `goods`"
                . "WHERE `item_type`= 'atv'"
                . " ORDER BY `id` DESC;";
        }
        $result = $db->query($sql);

        $numberOfPage = self::getNumberOfPage();
        for ($i = $numberOfPage * 15 - 15; $i < $numberOfPage * 15; $i++) {
            $n = 0;
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $atvsList[$n]['id'] = $row['id'];
                $atvsList[$n]['item_name'] = $row['item_name'];
                $atvsList[$n]['price'] = $row['price'];
                $atvsList[$n]['item_type'] = $row['item_type'];
                $atvsList[$n]['img_path'] = $row['img_path'];
                $n++;
            }
        }
        return $atvsList;

    }

    public static function getProductById($id)
    {
        $id = intval($id);

        if ($id)
        {
            $db = Db::getConnection();

            $result = $db -> query("SELECT * FROM `goods` WHERE `id`=" . "$id");
            $result -> setFetchMode(PDO::FETCH_ASSOC);

            return $result -> fetch();
        }

    }

    public static function getAllProducts()
    {
        $db = Db::getConnection();

        $sql = "SELECT * FROM `goods`";
        $result = $db -> query($sql);

        $n = 0;
        while ($row = $result -> fetch(PDO::FETCH_ASSOC))
        {
            $product[$n]['id'] = $row['id'];
            $product[$n]['part_number'] = $row['part_number'];
            $product[$n]['item_name'] = $row['item_name'];
            $product[$n]['price'] = $row['price'];
            $n++;
        }

        return $product;
    }
    public static function getAllProductsByUserId($userId)
    {
        $db = Db::getConnection();

        $sql = "SELECT * FROM `goods`";
        $result = $db -> query($sql);

        $n = 0;
        while ($row = $result -> fetch(PDO::FETCH_ASSOC))
        {
            $product[$n]['id'] = $row['id'];
            $product[$n]['part_number'] = $row['part_number'];
            $product[$n]['item_name'] = $row['item_name'];
            $product[$n]['price'] = $row['price'];
            $n++;
        }

        return $product;
    }



    /**
     * Удаляет товар с указанным id
     * @param $id
     * @return false|PDOStatement
     */
    public static function deleteProductById($id)
    {
        $db = Db::getConnection();

        $sql = "DELETE FROM `goods` WHERE `id` = :id";
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }

    public static function createProduct($product_name, $price, $engine_cubature, $engine, $engine_cooling, $item_color, $part_number, $description, $packed_weight, $power, $transmission, $wheels, $fuel_supply_system, $front_suspension, $back_suspension, $front_brake, $back_brake, $length_width_height, $base_length, $saddle_height, $weight, $tank_capacity, $item_status, $item_brand, $item_type, $availability, $img_path)
    {
        $db = Db::getConnection();

        $sql = "INSERT INTO `goods` (`item_name`, `price`, `item_status`, `item_brand`, `engine_cubature`, `item_type`, `engine`, `engine_cooling`, `wheels`, `item_color`, `part_number`, `availability`, `description`, `img_path`, `packed_weight`, `power`, `transmission`, `fuel_supply_system`, `front_suspension`, `back_suspension`, `front_brake`, `back_brake`, `length_width_height`, `base_length`, `saddle_height`, `weight`, `tank_capacity`)
        VALUES ('$product_name', '$price', '$item_status', '$item_brand', '$engine_cubature', '$item_type', '$engine', '$engine_cooling', '$wheels', '$item_color', '$part_number', '$availability', '$description', '$img_path', '$packed_weight', '$power', '$transmission', '$fuel_supply_system', '$front_suspension', '$back_suspension', '$front_brake', '$back_brake', '$length_width_height', '$base_length', '$saddle_height', '$weight', '$tank_capacity')";

        $result = $db->query($sql);

        return $result;
    }

    public static function updateProduct($id, $product_name, $price, $engine_cubature, $engine, $engine_cooling, $item_color, $part_number, $description, $packed_weight, $power, $transmission, $wheels, $fuel_supply_system, $front_suspension, $back_suspension, $front_brake, $back_brake, $length_width_height, $base_length, $saddle_height, $weight, $tank_capacity, $item_status, $item_brand, $item_type, $availability, $img_path)
    {
        $db = Db::getConnection();

        $sql = "UPDATE `goods` SET `item_name` = '$product_name', `price` = '$price', `item_status` = '$item_status', `item_brand` = '$item_brand', `engine_cubature` = '$engine_cubature', `item_type` = '$item_type', `engine` = '$engine', `engine_cooling` = '$engine_cooling', `wheels` = '$wheels', `item_color` = '$item_color', `part_number` = '$part_number', `availability` = '$availability', `description` = '$description', `img_path` = '$img_path', `packed_weight` = '$packed_weight', `power` = '$power', `transmission` = '$transmission', `fuel_supply_system` = '$fuel_supply_system', `front_suspension` = '$front_suspension', `back_suspension` = '$back_suspension', `front_brake` = '$front_brake', `back_brake` = '$back_brake', `length_width_height` = '$length_width_height', `base_length` = '$base_length', `saddle_height` = '$saddle_height', `weight` = '$weight', `tank_capacity` = '$tank_capacity'
        WHERE `id` = :id;";

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        $result -> execute();

        return $result;
    }




}