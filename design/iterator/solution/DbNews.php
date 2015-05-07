<?php

class DbNews implements Iterator
{
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

    public function current()
    {
        return current($this->news);
    }

    public function next()
    {
        return next($this->news);
    }

    public function key()
    {
        return key($this->news);
    }

    public function valid()
    {
        return $this->key() !== null;
    }

    public function rewind()
    {
        reset($this->news);
    }
}