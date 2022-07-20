<?php

include_once ROOT . '/models/Index.php';
include_once  ROOT . '/models/Product.php';
class IndexController
{
    public function actionIndex()
    {
        $gooodsList = Index::getGoodsList();
        $newProducts = Product::getLatestProducts(5);
        $bestSellers = Product::getBestsellerProducts();

        require_once ROOT . '/views/index/index.php';



        return true;
    }
}