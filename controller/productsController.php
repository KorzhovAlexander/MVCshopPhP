<?php


class productsController
{
    public function listAction($page=1)
    {
        // Список категорий для левого меню
        $categorylist=categoryModel::getCategoriesList();

        // Список всех товаров (особенно последних)
        $products_array=productsModel::getLatestProducts();

        require_once (ROOT.'/view/products/products.php');
        return true;
    }

    public function listCategoryAction($idCategory,$page=1)
    {
        // Список категорий для левого меню
        $categorylist=categoryModel::getCategoriesList();

        // Список товаров в категории
        $products_array=productsModel::getProductsListByCategory($idCategory);
        require_once (ROOT.'/view/products/products.php');
        return true;
    }

    public function listByIDAction($idProduct)
    {
        $product_array=productsModel::getProductById($idProduct);
        require_once (ROOT.'/view/products/product.php');
        return true;

    }
}