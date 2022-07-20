<?php
include_once 'models/AdminBase.php';
include_once 'models/Product.php';

class AdminProductController extends AdminBase
{
    public function actionIndex()
    {
        //Проверяем, админ ли
        self::checkAdminOrModer();

        $products = Product::getAllProducts();

        require_once 'views/admin_product/index.php';
        return true;
    }

    public function actionCreate()
    {
        self::checkAdminOrModer();

        if ($_POST['reg_checkout'])
        {
            $product_name = $_POST['product_name'];
            $price = $_POST['price'];
            $engine_cubature = $_POST['engine_cubature'];
            $engine = $_POST['engine'];
            $engine_cooling = $_POST['engine_cooling'];
            $item_color = $_POST['item_color'];
            $part_number = $_POST['part_number'];
            $description = $_POST['description'];
            $packed_weight = $_POST['packed_weight'];
            $power = $_POST['power'];
            $transmission = $_POST['transmission'];
            $wheels = $_POST['wheels'];
            $fuel_supply_system = $_POST['fuel_supply_system'];
            $front_suspension = $_POST['front_suspension'];
            $back_suspension = $_POST['back_suspension'];
            $front_brake = $_POST['front_brake'];
            $back_brake = $_POST['back_brake'];
            $length_width_height = $_POST['length_width_height'];
            $base_length = $_POST['base_length'];
            $saddle_height = $_POST['saddle_height'];
            $weight = $_POST['weight'];
            $tank_capacity = $_POST['tank_capacity'];
            $item_status = $_POST['item_status'];
            $item_brand = $_POST['item_brand'];
            $item_type = $_POST['item_type'];
            $availability = $_POST['availability'];
            if (isset($_FILES) && $_FILES["img"]["error"]== UPLOAD_ERR_OK)
            {
                $img_array = explode('.', $_FILES["img_path"]["name"]);
                $img_path_name = implode('', preg_split("/[\\\"\?\/\|:*<>]+/", $product_name));
                switch (array($item_brand, $item_type))
                {
                    case array('kayo', 'pitbike'):
                        $img_path = "upload/pitbikes/kayo/" . $img_path_name . '.' . $img_array[1];
                        break;

                    case array('bse', 'pitbike'):
                        $img_path = "upload/pitbikes/bse/" . $img_path_name . '.' . $img_array[1];
                        break;

                    case array('gr', 'pitbike'):
                        $img_path = "upload/pitbikes/gr/" . $img_path_name . '.' . $img_array[1];
                        break;

                    case array('kayo', 'motorcycle'):
                        $img_path = "upload/motorcycles/kayo/" . $img_path_name . '.' . $img_array[1];
                        break;

                    case array('bse', 'motorcycle'):
                        $img_path = "upload/motorcycles/bse/" . $img_path_name . '.' . $img_array[1];
                        break;

                    case array('gr', 'motorcycle'):
                        $img_path = "upload/motorcycles/gr/" . $img_path_name . '.' . $img_array[1];
                        break;

                    case array('kayo', 'atv'):
                        $img_path = "upload/atvs/kayo/" . $img_path_name . '.' . $img_array[1];
                        break;

                    case array('bse', 'atv'):
                        $img_path = "upload/atvs/bse/" . $img_path_name . '.' . $img_array[1];
                        break;

                    case array('gr', 'atv'):
                        $img_path = "upload/atvs/gr/" . $img_path_name . '.' . $img_array[1];
                        break;
                }
                //Предотвращение появления у изображений одинаковых названий
                $n=1;
                while ($img_path == $product['img_path'])
                {
                    $img_path = $img_path . "$n";
                    $n++;
                }

                move_uploaded_file($_FILES["img_path"]["tmp_name"], $img_path);
            }
            if ($product_name && $price && $engine_cubature && $engine && $engine_cooling && $item_color && $part_number && $description && $packed_weight && $power && $transmission && $wheels && $fuel_supply_system && $front_suspension && $back_suspension && $front_brake && $back_brake && $length_width_height && $base_length && $saddle_height && $weight && $tank_capacity && $item_status && $item_brand && $item_type && $availability && $img_path)
            {
                $result = Product::createProduct($product_name, $price, $engine_cubature, $engine, $engine_cooling, $item_color, $part_number, $description, $packed_weight, $power, $transmission, $wheels, $fuel_supply_system, $front_suspension, $back_suspension, $front_brake, $back_brake, $length_width_height, $base_length, $saddle_height, $weight, $tank_capacity, $item_status, $item_brand, $item_type, $availability, $img_path);

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

        require_once 'views/admin_product/create_product.php';
        return true;
    }

    public function actionUpdate($id)
    {
        self::checkAdminOrModer();

        $product = Product::getProductById($id);

        if ($_POST['update'])
        {
            $product_name = $_POST['product_name'];
            $price = $_POST['price'];
            $engine_cubature = $_POST['engine_cubature'];
            $engine = $_POST['engine'];
            $engine_cooling = $_POST['engine_cooling'];
            $item_color = $_POST['item_color'];
            $part_number = $_POST['part_number'];
            $description = $_POST['description'];
            $packed_weight = $_POST['packed_weight'];
            $power = $_POST['power'];
            $transmission = $_POST['transmission'];
            $wheels = $_POST['wheels'];
            $fuel_supply_system = $_POST['fuel_supply_system'];
            $front_suspension = $_POST['front_suspension'];
            $back_suspension = $_POST['back_suspension'];
            $front_brake = $_POST['front_brake'];
            $back_brake = $_POST['back_brake'];
            $length_width_height = $_POST['length_width_height'];
            $base_length = $_POST['base_length'];
            $saddle_height = $_POST['saddle_height'];
            $weight = $_POST['weight'];
            $tank_capacity = $_POST['tank_capacity'];
            $item_status = $_POST['item_status'];
            $item_brand = $_POST['item_brand'];
            $item_type = $_POST['item_type'];
            $availability = $_POST['availability'];
            if ($_FILES["img_path"]["name"] && $_FILES["img"]["error"]== UPLOAD_ERR_OK)
            {
                $img_array = explode('.', $_FILES["img_path"]["name"]);
                $img_path_name = implode('', preg_split("/[\\\"\?\/\|:*<>]+/", $product_name));
                switch (array($item_brand, $item_type))
                {
                    case array('kayo', 'pitbike'):
                        $img_path = "upload/pitbikes/kayo/" . $img_path_name . '.' . $img_array[1];
                        break;

                    case array('bse', 'pitbike'):
                        $img_path = "upload/pitbikes/bse/" . $img_path_name . '.' . $img_array[1];
                        break;

                    case array('gr', 'pitbike'):
                        $img_path = "upload/pitbikes/gr/" . $img_path_name . '.' . $img_array[1];
                        break;

                    case array('kayo', 'motorcycle'):
                        $img_path = "upload/motorcycles/kayo/" . $img_path_name . '.' . $img_array[1];
                        break;

                    case array('bse', 'motorcycle'):
                        $img_path = "upload/motorcycles/bse/" . $img_path_name . '.' . $img_array[1];
                        break;

                    case array('gr', 'motorcycle'):
                        $img_path = "upload/motorcycles/gr/" . $img_path_name . '.' . $img_array[1];
                        break;

                    case array('kayo', 'atv'):
                        $img_path = "upload/atvs/kayo/" . $img_path_name . '.' . $img_array[1];
                        break;

                    case array('bse', 'atv'):
                        $img_path = "upload/atvs/bse/" . $img_path_name . '.' . $img_array[1];
                        break;

                    case array('gr', 'atv'):
                        $img_path = "upload/atvs/gr/" . $img_path_name . '.' . $img_array[1];
                        break;
                }
                //Предотвращение появления у изображений одинаковых названий
                $n=1;
                while ($img_path == $product['img_path'])
                {
                    $img_path_array = explode('.',$img_path);
                    $img_path = $img_path_array[0] . "$n" . '.' . $img_path_array[1];
                    $n++;
                }

                move_uploaded_file($_FILES["img_path"]["tmp_name"], $img_path);
            }
            if ($product_name && $price && $engine_cubature && $engine && $engine_cooling && $item_color && $part_number && $description && $packed_weight && $power && $transmission && $wheels && $fuel_supply_system && $front_suspension && $back_suspension && $front_brake && $back_brake && $length_width_height && $base_length && $saddle_height && $weight && $tank_capacity && $item_status && $item_brand && $item_type && $availability)
            {
                $result = Product::updateProduct($id, $product_name, $price, $engine_cubature, $engine, $engine_cooling, $item_color, $part_number, $description, $packed_weight, $power, $transmission, $wheels, $fuel_supply_system, $front_suspension, $back_suspension, $front_brake, $back_brake, $length_width_height, $base_length, $saddle_height, $weight, $tank_capacity, $item_status, $item_brand, $item_type, $availability, $img_path);

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

        require_once 'views/admin_product/update_product.php';
        return true;
    }

    public function actionDelete($id)
    {
        //Проверяем, админ ли
        self::checkAdminOrModer();

        //Удаляем товар
        Product::deleteProductById($id);
        //Перенаправляем админа на список товаров
        header('Location: /admin/product');
    }
}