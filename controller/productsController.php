<?php

include_once ROOT.'/model/productsModel.php';
include_once ROOT.'/model/categoryModel.php';


class productsController
{
    public function listAction()
    {
        $categorylist=array();
        $products_array=array();
        $products_array=productsModel::getLatestProducts();
        $categorylist=categoryModel::getCategoriesList();
        require_once (ROOT.'/view/products/products.php');
        return true;
    }

    public function listCategoryAction($idCategory)
    {
        $categorylist=array();
        $categorylist=categoryModel::getCategoriesList();

        $products_array=array();
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