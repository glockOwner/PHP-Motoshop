<?php
include_once ROOT . '/models/Product.php';
class ProductController
{
    public function actionMotorcycles()
    {
        $productBrand = $_GET['product_brand'];

        $catalogList = Product::getMotorcyclesList($productBrand);
        $pageNumber = Product::getNumberOfPage();
        $amountOfPages = Product::getAmountOfPages("item_type", "motorcycle");

        require_once 'views/product/catalog.php';
        return true;
    }

    public function actionPitbikes()
    {
        $productBrand = $_GET['product_brand'];

        $catalogList = Product::getPitbikesList($productBrand);
        $pageNumber = Product::getNumberOfPage();
        $amountOfPages = Product::getAmountOfPages("item_type", "pitbike");

        require_once 'views/product/catalog.php';
        return true;
    }

    public function actionAtvs()
    {
        $productBrand = $_GET['product_brand'];

        $catalogList = Product::getAtvsList($productBrand);
        $pageNumber = Product::getNumberOfPage();
        $amountOfPages = Product::getAmountOfPages("item_type", "atv");

        require_once 'views/product/catalog.php';
        return true;
    }

    public function actionView($productId)
    {
        $product = Product::getProductById($productId);

        require_once 'views/product/view.php';
        return true;
    }

}