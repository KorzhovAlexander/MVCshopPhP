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


    public static function getProducts($page = 1,$count = self::SHOW_DEFAULT)
    {
        // Смещение (для запроса)
        $offset = ($page - 1) * self::SHOW_DEFAULT;

        $db=DAO::getConnection();

        $stm=$db->prepare("SELECT id, name, price, is_new,description FROM products where status>0 ORDER BY id DESC LIMIT :count OFFSET :offset");
        $stm->bindParam(':count', $count, PDO::PARAM_INT);
        $stm->bindParam(':offset', $offset, PDO::PARAM_INT);
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

    public static function getProductById($id)
    {
        // Соединение с БД
        $db = DAO::getConnection();
        // Текст запроса к БД
        $sql = 'SELECT * FROM products WHERE id = :id';
        // Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);
        // Выполнение коменды
        $result->execute();
        // Получение и возврат результатов
        return $result->fetch();
    }

    public static function getTotalProductsInCategory($idCategory)
    {
        // Соединение с БД
        $db = DAO::getConnection();
            if ($idCategory!=0){
                // Текст запроса к БД
                $sql = 'SELECT count(id) AS count FROM products WHERE status>0 AND category_id = :category_id';
                // Используется подготовленный запрос
                $result = $db->prepare($sql);
                $result->bindParam(':category_id', $idCategory, PDO::PARAM_INT);
            }
            else
                {
                $sql = 'SELECT count(id) AS count FROM products WHERE status>0';
                $result = $db->query($sql);
            }
        // Выполнение коменды
        $result->execute();
        // Возвращаем значение count - количество
        $row = $result->fetch();
        return $row['count'];
    }





}