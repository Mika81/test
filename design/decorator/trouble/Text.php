<?php

class Text
{
    private $content;

    public function __construct($content)
    {
        $this->setContent($content);
    }

    public function setContent($content)
    {
        $this->content = (string) $content;
        return $this;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function __toString()
    {
        return $this->getContent();
    }
}