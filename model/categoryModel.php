<?php


class categoryModel
{
    public static function getCategoriesList()
    {
        // Соединение с БД
        $db = DAO::getConnection();
        // Запрос к БД
        $result = $db->query('SELECT id, name FROM category WHERE status = 1 ORDER BY id ASC');
        // Получение и возврат результатов
        $i = 0;
        $categoryList = array();
        while ($row = $result->fetch()) {
            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['name'] = $row['name'];
            $i++;
        }
        return $categoryList;
    }
}