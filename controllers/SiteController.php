<?php

include_once ROOT. '/models/Site.php';


class SiteController {

    public function actionIndex()
    {

        $categoryList = array();
        $categoryList = Site::getCategoryList();

/*$categoryId=Site::getCategoryId();
foreach ($categoryId as $cat_id){

   $q=$cat_id;;*/


        $newsList = array();
        $newsList = Site::getNewsList(                                                                                                                                                                                                                                                                                                                                                                             3);

        require_once(ROOT . '/views/index.php');

        return true;
    }


}

