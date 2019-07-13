<?php


class productsModel
{
    const SHOW_DEFAULT = 8;

    public static function getLatestProducts($count = self::SHOW_DEFAULT)
    {
        $db=DAO::getConnection();

        $stm=$db->prepare("SELECT id, name, price, is_new FROM products where status>0 ORDER BY id DESC LIMIT :count");
        $stm->bindParam(':count', $count, PDO::PARAM_INT);
        $stm->setFetchMode(PDO::FETCH_ASSOC);

        $stm->execute();


        $productsList = array();
        // Получение и возврат результатов
        $i = 0;
        while ($row = $stm->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['is_new'] = $row['is_new'];
            $i++;
        }
        return $productsList;

    }
}