<?php

class NewsManager {
    private $sources = [];

    public function addSource(Iterator $source)
    {
        $this->sources[] = $source;
        return $this;
    }

    public function getSources()
    {
        return $this->sources;
    }

    public function showNews()
    {
        foreach ($this->getSources() as $source) {
            foreach ($source as $article) {
                echo $article['title'] . '<br>';
                echo $article['content'] . '<br><br>';
            }
        }
    }
}