<?php


class Category
{
    const SHOW_BY_DEFAULT = 6;

    /** Returns single category items with specified id
     * @rapam integer &id
     */

    public static function getCategoryItemByID($id)
    {
        $id = intval($id);


        if ($id) {
            /*			$host = 'localhost';
                        $dbname = 'php_base';
                        $user = 'root';
                        $password = '';
                        $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);*/
            $db = Db::getConnection();
            $result = $db->query('SELECT * FROM category WHERE id=' . $id);

//            $result->setFetchMode(PDO::FETCH_NUM);
            $result->setFetchMode(PDO::FETCH_ASSOC);

            $categoryItem = $result->fetch();


            return $categoryItem;
        }

    }

    public static function getCategoryList()
    {
        /* $host = 'localhost';
       $dbname = 'php_base';
       $user = 'root';
       $password = '';
       $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);*/

        $db = Db::getConnection();
        $categoryList = array();

        $result = $db->query('SELECT id, title FROM category');

        $i = 0;
        while ($row = $result->fetch()) {
            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['title'] = $row['title'];
            $i++;
        }

        return $categoryList;

    }


    /*
     * Returns an array of category items
     */

    public static function getNewsList($id = false, $page = 1)
    {
        /*		$host = 'localhost';
                $dbname = 'php_base';
                $user = 'root';
                $password = '';
                $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);*/
        $count=self::SHOW_BY_DEFAULT;
        if ($id) {
            $page = intval($page);
            $offset = ($page - 1) * self::SHOW_BY_DEFAULT;

            $db = Db::getConnection();
            $newsList = array();
            $result = $db->query(
                        "SELECT id, title FROM news"
                        ."WHERE id_cat='$id' "
                        . " ORDER BY id ASC"
                        ." LIMIT '4'"
                        ." OFFSET '4'");

            $i = 0;
            while ($row = $result->fetch()) {
                $newsList[$i]['id'] = $row['id'];
                $newsList[$i]['title'] = $row['title'];
                $i++;
            }

            return $newsList;

        }
    }
}

