<?php

class Italic implements Decorable
{
    private $object;

    public function __construct(Decorable $object)
    {
        $this->object = $object;
    }

    public function __toString()
    {
        return '<i>'.$this->object->__toString().'</i>';
    }
}