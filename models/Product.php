<?php

class Product{

    const SHOW_BYDEFAULT = 1;

    public static function getLatestProducts($count = self::SHOW_BYDEFAULT)
    {
        $count = intval($count);
        $db = Db::getConnection();
        $productsList = array();

        $result = $db->query('SELECT id, name, price, is_new FROM product LIMIT' . $count);
        $i = 0;
        while ($row = $result->fetch()){
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['is_new'] = $row['is_new'];
            $i++;
        }
        return $productsList;
    }

    public static function getProductsListByCategory($categoryId = false, $page = 1)
    {
        if ($categoryId){

            $page = intval($page);
            $offset = ($page - 1) * self::SHOW_BYDEFAULT;

            $db = Db::getConnection();
            $products = array();

            $result = $db->query("SELECT id, name, price, image, is_new FROM product WHERE status = '1' AND category_id = '$categoryId' ORDER BY id ASC LIMIT ".self::SHOW_BYDEFAULT . " OFFSET " . $offset);
            $i = 0;
            while ($row = $result->fetch()){
                $products[$i]['id'] = $row['id'];
                $products[$i]['name'] = $row['name'];
                $products[$i]['image'] = $row['image'];
                $products[$i]['price'] = $row['price'];
                $products[$i]['is_new'] = $row['is_new'];
                $i++;
            }
            return $products;
        }
    }

    public static function getProductById($id)
    {
        $id = intval($id);
        $db = Db::getConnection();
        if($id) {
            $result = $db->query('SELECT * FROM product WHERE  id=' . $id);
            $result->setFetchMode(PDO::FETCH_ASSOC);

            return $result->fetch();
        }

    }

    public static function getTotalProductsInCategory($categoryId)
    {
        $db = Db::getConnection();

            $result = $db->query('SELECT count(id) AS count FROM product WHERE  status= "1" AND category_id ="'.$categoryId.'"');
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $row = $result->fetch();
            return $row['count'];
    }

    public static function getProductDescription($prodDescId)
    {
        $db = Db::getConnection();
        $result = $db->query('SELECT description FROM product WHERE id ="'.$prodDescId.'"');
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $row = $result->fetch();
        return $row['description'];
    }



}