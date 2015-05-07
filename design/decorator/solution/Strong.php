<?php
/**
 * Created by PhpStorm.
 * User: mika
 * Date: 07/05/2015
 * Time: 15:37
 */

class Strong implements Decorable
{
    private $object;

    public function __construct(Decorable $object)
    {
        $this->object = $object;
    }

    public function __toString()
    {
        return '<strong>'.$this->object->__toString().'</strong>';
    }
}