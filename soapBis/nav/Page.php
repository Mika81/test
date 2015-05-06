<?php
/**
 * Created by PhpStorm.
 * User: vincent
 * Date: 05/05/2015
 * Time: 15:16
 */

class Page
{
    private $name;
    private $active;
    private $uri;
    private $pages = [];

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = (string) $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param mixed $active
     */
    public function setActive($active)
    {
        $this->active = (bool) $active;
        return $this;
    }

    /**
     * @return array
     */
    public function getPages()
    {
        return $this->pages;
    }

    public function addPage(Page $page)
    {
        $this->pages[] = $page;
        return $this;
    }

    /**
     * @param array $pages
     */
    public function addPages(array $pages)
    {
        foreach($pages as $page) {
            $this->addPage($page);
        }
        return this;
    }

    /**
     * @return mixed
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * @param mixed $uri
     */
    public function setUri($uri)
    {
        $this->uri = $uri;
        return $this;
    }

    public function render(Page $page)
    {
        $out = '<li><a href="'.$this->getUri().'">'.$this->getName().'</a>';

        if (!empty($page->pages)) {
            $out .= '<ul>';
            foreach ($page->pages as $p) {
                $out .= $this->render($p);
            }
            $out .= '</ul>';
        }
        $out .= '</li>';
        return $out;
    }

    public function __toString()
    {
        $out  = '<ul>';
        $out .= $this->render($this);
        $out .= '</ul>';
        return $out;
    }
}