<?php
/**
 * Created by PhpStorm.
 * User: mika
 * Date: 07/05/2015
 * Time: 15:03
 */

class TextParagrapheStrong extends TextStrong
{
    public function __toString()
    {
        return '<p>'.parent::__toString().'</p>';
    }
}