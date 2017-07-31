<?php

class Category
{
    /**
     * Returns single news item with specified id
     * @param $id
     */
//    public static function getNewsItemById($id)
//    {
//        $id= intval($id);
//        if ($id) {
//
//            $db = Db::getConnection();
//            $result = $db->query('SELECT * FROM posts WHERE  id=' . $id);
//            $result->setFetchMode(PDO::FETCH_ASSOC);
//
//            $newsItem = $result->fetch();
//            return $newsItem;
//        }
//
//    }


    /**
     * Returns an array of categries
     */
    public static function getCategoriesList()
    {
        $db = Db::getConnection();
        $categoriesList = array();

        $result = $db->query('SELECT id, title FROM category ORDER BY sort_order ASC');

        $i = 0;
        while ($row = $result->fetch()){
            $categoriesList[$i]['id'] = $row['id'];
            $categoriesList[$i]['title'] = $row['title'];
            $i++;
        }

        return $categoriesList;
    }
}