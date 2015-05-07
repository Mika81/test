<?php

class TextParagraphe extends text{
    public function __toString()
    {
        return '<p>'.parent::__toString().'</p>';
    }
}