<?php
/**
 * Created by PhpStorm.
 * User: mika
 * Date: 07/05/2015
 * Time: 16:14
 */

class DbNews {
    private $news;

    public function __construct(){
        $this->news = array(
            array(
                'title' => 'Db Title',
                'content'=>'Db Content'
            ),
            array(
                'title' => 'Db Title 2',
                'content'=>'Db Content 2'
            ),
        );
    }

    public function getNews(){
        return $this->news;
    }
}