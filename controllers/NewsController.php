<?php

class NewsController {



	public function actionView($id)
	{
        $categoryList=array();
        $categoryList=Category::getCategoryList();
		if ($id) {
			$newsItem = News::getNewsItemByID($id);

	require_once(ROOT . '/views/view.php');

/*			echo 'actionView'; */
		}

		return true;

	}

}

