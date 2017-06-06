<?php




class CategoryController {


    public function actionCategory($id, $page = 1)

    {

        echo "category ".$id."<br>";
        echo "page ".$page."<br>";

            $categoryList=array();
            $categoryList=Category::getCategoryList();

            $categoryItem = Category::getCategoryItemByID($id);

            $newsList = array();
            $newsList = Category::getNewsList($id, $page);




        $total = Category::getTotalNewsInCategory($id);



        $pagination = new Pagination($total, $page, Category::SHOW_BY_DEFAULT, 'page-');





        require_once(ROOT . '/views/categoryview.php');


        return true;

    }


}

