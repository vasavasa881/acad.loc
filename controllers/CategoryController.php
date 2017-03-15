<?php

include_once ROOT. '/models/Category.php';



class CategoryController {


    public function actionCategoryview($id=1, $page=1)

    {
        echo "category ".$id."<br>";
        echo "page ".$page;
            $categoryList=array();
            $categoryList=Category::getCategoryList();
        if ($id) {
            $categoryItem = Category::getCategoryItemByID($id);
            $newsList = array();
            $newsList = Category::getNewsList($id, $page);

            require_once(ROOT . '/views/categoryview.php');

            /*			echo 'actionView'; */
        }

        return true;

    }


}

