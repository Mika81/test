<?php

class NewsManager {
    private $sources = [];

    public function addSource($source)
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
        foreach ($this->sources as $source) {
            if ($source instanceof RssNews) {
                foreach ($source->getArticles() as $article) {
                    echo $article['title'] . '<br>';
                    echo $article['content'] . '<br><br>';
                }
            } elseif ($source instanceof DbNews) {
                foreach ($source->getNews() as $article) {
                    echo $article['title'] . '<br>';
                    echo $article['content'] . '<br><br>';
                }
            }
        }
    }
}