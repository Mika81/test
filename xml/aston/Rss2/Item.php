<?php

namespace Aston\Rss2;

/**
 * Created by PhpStorm.
 * User: mika
 * Date: 04/05/2015
 * Time: 14:48
 */

class Item {
    private $title;
    private $description;
    private $link;
    private $date;
    private $picture;
    private $author;


    //SETTERS
    public function setTitle($title)
    {
        $this->title = (string) $title;
        return $this;
    }

    public function setDescription($description)
    {
        $this->description = (string) $description;
        return $this;
    }

    public function setLink($link)
    {
        $this->link = (string) $link;
        return $this;
    }

    public function setDate(\DateTime $date)
    {
        $this->date = $date;
        return $this;
    }

    public function setPicture($picture)
    {
        $this->picture = (string) $picture;
        return $this;
    }

    public function setAuthor($author)
    {
        $this->author = (string) $author;
        return $this;
    }

    //GETTERS
    public function getTitle()
    {
        return $this->title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getLink()
    {
        return $this->link;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getPicture()
    {
        return $this->picture;
    }

    public function getAuthor()
    {
        return $this->author;
    }
}