<?php
/**
 * Created by PhpStorm.
 * User: mika
 * Date: 07/05/2015
 * Time: 14:54
 */

class TextItalic extends Text
{
    public function __toString()
    {
        return '<i>'.parent::__toString().'</i>';
    }
}