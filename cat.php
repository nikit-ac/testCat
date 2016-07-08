<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 08.07.2016
 * Time: 8:23
 */

class Animal
{

    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}


class Cat extends Animal
{
    public function meow()
    {
        return "Cat ".$this->name." is saying meow";
    }
}

$cat = new Cat('garfield');
echo $cat->getName();
echo "<br>";
echo $cat->meow();
