<?php


class productsController
{
    private static function getListCategory()
    {
        return categoryModel::getCategoriesList();
    }

    /* Для работы пагинации */
    private static function startPagination($idCategory,$page)
    {
        // Общее количетсво товаров (необходимо для постраничной навигации)
        $total = productsModel::getTotalProductsInCategory($idCategory);
        // Создаем объект Pagination - постраничная навигация
        return new Pagination($total, $page, productsModel::SHOW_DEFAULT, 'page-');
    }


    public function listAction($page=1)
    {
        // Список категорий для левого меню
        $categorylist= self::getListCategory();

        // Список всех товаров (особенно последних)
        $products_array=productsModel::getProducts($page);

        $pagination=self::startPagination(0,$page);


        require_once (ROOT.'/view/products/products.php');
        return true;
    }

    public function listCategoryAction($idCategory,$page=1)
    {
        // Список категорий для левого меню
        $categorylist= self::getListCategory();

        // Список товаров в категории
        $products_array=productsModel::getProductsListByCategory($idCategory,$page);

        $pagination=self::startPagination($idCategory,$page);

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