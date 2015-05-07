<?php

class TextStrong extends Text
{
        public function __toString()
        {
            return '<strong>'.parent::__toString().'</strong>';
        }
}