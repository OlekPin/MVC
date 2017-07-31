<?php

/**
 * Created by PhpStorm.
 * User: fanto
 * Date: 27.07.2017
 * Time: 13:41
 */
class BlogController
{
    public function actionIndex()
    {
        $categories = array();
        $categories = Category::getCategoriesList();
        
        require_once (ROOT . '/views/blog/index.php');
        return true;
    }
}