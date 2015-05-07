<?php
/**
 * Created by PhpStorm.
 * User: mika
 * Date: 07/05/2015
 * Time: 16:17
 */

class RssNews {
    private $articles;

    public function __construct(){
        $this->articles = array(
            array(
                'title' => 'Rss Title',
                'content'=>'Rss Content'
            ),
            array(
                'title' => 'Rss Title 2',
                'content'=>'Rss Content 2'
            ),
        );
    }

    public function getArticles(){
        return $this->articles;
    }
}