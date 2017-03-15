<?php


class Site
{

    /** Returns single category items with specified id
     * @rapam integer &id
     */

static $id_cat;

    public static function getCategoryList()
    {
        /*		$host = 'localhost';
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


    /*public static function getCategoryId()
    {
                $host = 'localhost';
                $dbname = 'php_base';
                $user = 'root';
                $password = '';
                $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);

        $db = Db::getConnection();
        $categoryId = array();

        $result = $db->query('SELECT id FROM category');

        $i = 0;
        while ($row = $result->fetch()) {
            $categoryId[$i] = $row['id'];
            $i++;


        }



        return $categoryId;


    }*/


    /**
     * Returns an array of category items
     */

    public static function getNewsList($id_cat) {
        /*		$host = 'localhost';
                $dbname = 'php_base';
                $user = 'root';
                $password = '';
                $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);*/

        $db = Db::getConnection();
        $newsList = array();
        $result = $db->query('SELECT id, title, date, author_name, short_content FROM news WHERE id_cat='.$id_cat.' ORDER BY id ASC LIMIT 5');

        $i = 0;
        while($row = $result->fetch()) {
            $newsList[$i]['id'] = $row['id'];
            $newsList[$i]['title'] = $row['title'];
            $newsList[$i]['date'] = $row['date'];
            $newsList[$i]['author_name'] = $row['author_name'];
            $newsList[$i]['short_content'] = $row['short_content'];
            $i++;
        }

        return $newsList;

    }

}