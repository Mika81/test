<?php
/**
 * Created by PhpStorm.
 * User: mika
 * Date: 07/05/2015
 * Time: 15:06
 */

class TextParagrapheStrongItalic extends TextItalic
{
    public function __toString()
    {
        return '<p><strong>'.parent::__toString().'</strong></p>';
    }
}
