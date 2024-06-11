<?php

class Car{
    public $name;
    public $color;

    function set_name($name){
        $this->name = $name;
        
    }
    function get_name(){
        return $this->name;
    }
}
$obj1 = new Car();
$obj1->set_name("krutik");
$n = $obj1->get_name();
echo $n;
