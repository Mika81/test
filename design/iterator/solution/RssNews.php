<?php

class RssNews implements Iterator
{
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

    public function getArticles()
    {
        return $this->articles;
    }

    public function current()
    {
        return current($this->articles);
    }

    public function next()
    {
        return next($this->articles);
    }

    public function key()
    {
        return key($this->articles);
    }

    public function valid()
    {
        return $this->key() !== null;
    }

    public function rewind()
    {
        reset($this->articles);
    }
}