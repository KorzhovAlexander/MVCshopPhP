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



    public function setBasketAction($ProductID)
    {
/*        setcookie ("productID", "", time() - 3600);
        setcookie ("productID[]", "", time() - 3600);
        die();*/
        // Приводим $id к типу integer
        $id = intval($ProductID);

        // Пустой массив для товаров в корзине
        $productsInCart = array();

        // Если в корзине уже есть товары (они хранятся в сессии)
        if (isset($_COOKIE['productID'])) {
            // То заполним наш массив товарами
            $productsInCart = json_decode($_COOKIE['productID'], true);;
        }
        // Проверяем есть ли уже такой товар в корзине
        if (array_key_exists($id, $productsInCart)) {
            // Если такой товар есть в корзине, но был добавлен еще раз, увеличим количество на 1
            $productsInCart[$id] ++;
        } else {
            // Если нет, добавляем id нового товара в корзину с количеством 1
            $productsInCart[$id] = 1;
        }
        // Записываем массив с товарами в сессию
        setcookie("productID", json_encode($productsInCart),time()+120);

        // Возвращаем количество товаров в корзине
        echo json_encode($productsInCart);

        return true;
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