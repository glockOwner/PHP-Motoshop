<?php

class Index
{

    /**
     * Returns an array of goods items
     */
    public static function getGoodsList()
    {
        //Запрос к БД
        $db = Db::getConnection();

        $goodsList = array();

        $result = $db->query('SELECT * FROM goods');
        $i = 0;
        while ($row = $result->fetch(PDO::FETCH_ASSOC)){

        }
        return $goodsList;

    }


}