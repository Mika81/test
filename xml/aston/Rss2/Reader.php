<?php

namespace Aston\Rss2;

/**
 *
 * Reader.php
 */

class Reader
{
    /**
     * @var string
     */
    private $filename;

    /**
     * @var simpleXMLElement
     */
    private $xml;

    /**
     * Constructor
     *
     * @param string $filename
     */
    function __construct($filename) {
        $this->filename = (string) $filename;
        $this->xml = simplexml_load_file($filename);
    }

    public function getItems(){
    $items = [];
    foreach($this->xml->channel->item as $xmlItem)
    {
        $item = new Item();
        $item->setTitle($xmlItem->title)
            ->setDescription($xmlItem->description)
            ->setLink($xmlItem->link)
            ->setDate(new \Datetime($xmlItem->pubDate))
            ->setPicture($xmlItem->thumbnail['url'])
            ->setAuthor($xmlItem->author);

        array_push($items, $item);
    }
    return $items;
}

    public function reader()
    {
        $items = $this->xml;

        foreach($items->channel as $channel){
            echo $channel->lastBuildDate . " :<br/><br/>";
            foreach($channel->item as $item){
                echo "<strong>".$item[0]->category. "</strong><br/>";
                echo $item->title. "<br/>";
                echo "<i>".$item->description. "</i><br/>";
                echo "<br/>";
            }
        }
    }
}