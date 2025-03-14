<?php

class Shape
{
    protected $base;
    protected $altura;

    function __set($name, $value)
    {
        $this->$name = $value;
    }

    function __get($name)
    {
        return $this->$name;
    }
}
;

