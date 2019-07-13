<?php


class productsModel
{
    const SHOW_DEFAULT = 8;

    private static function DBToArray($DBdate)
    {
        $productsList = array();
        // Получение и возврат результатов
        $i = 0;
        while ($row = $DBdate->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['is_new'] = $row['is_new'];
            $productsList[$i]['description'] = $row['description'];
            $i++;
        }
        return $productsList;
    }


    public static function getLatestProducts($count = self::SHOW_DEFAULT)
    {
        $db=DAO::getConnection();

        $stm=$db->prepare("SELECT id, name, price, is_new,description FROM products where status>0 ORDER BY id DESC LIMIT :count");
        $stm->bindParam(':count', $count, PDO::PARAM_INT);
        $stm->setFetchMode(PDO::FETCH_ASSOC);

        $stm->execute();

        return self::DBToArray($stm);

    }

    public static function getProductsListByCategory($categoryId, $page = 1)
    {
        $limit = productsModel::SHOW_DEFAULT;
        // Смещение (для запроса)
        $offset = ($page - 1) * self::SHOW_DEFAULT;
        // Соединение с БД
        $db = DAO::getConnection();
        // Текст запроса к БД
        $sql = 'SELECT id, name, price, is_new,description FROM products '
            . 'WHERE status > 0 AND category_id = :category_id '
            . 'ORDER BY id ASC LIMIT :limit OFFSET :offset';
        // Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':category_id', $categoryId, PDO::PARAM_INT);
        $result->bindParam(':limit', $limit, PDO::PARAM_INT);
        $result->bindParam(':offset', $offset, PDO::PARAM_INT);
        // Выполнение коменды
        $result->execute();

        return self::DBToArray($result);
    }



}