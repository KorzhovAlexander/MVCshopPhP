<?php


class productsController
{
    public function listAction($page=1)
    {
        // Список категорий для левого меню
        $categorylist=categoryModel::getCategoriesList();

        // Список всех товаров (особенно последних)
        $products_array=productsModel::getProducts($page);

        /* */
        // Общее количетсво товаров (необходимо для постраничной навигации)
        $total = productsModel::getTotalProductsInCategory(0);
        // Создаем объект Pagination - постраничная навигация
        $pagination = new Pagination($total, $page, productsModel::SHOW_DEFAULT, 'page-');

        require_once (ROOT.'/view/products/products.php');
        return true;
    }

    public function listCategoryAction($idCategory,$page=1)
    {
        // Список категорий для левого меню
        $categorylist=categoryModel::getCategoriesList();

        // Список товаров в категории
        $products_array=productsModel::getProductsListByCategory($idCategory,$page);

        /* */
        // Общее количетсво товаров (необходимо для постраничной навигации)
        $total = productsModel::getTotalProductsInCategory($idCategory);
        // Создаем объект Pagination - постраничная навигация
        $pagination = new Pagination($total, $page, productsModel::SHOW_DEFAULT, 'page-');
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