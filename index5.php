<?php
abstract class product{
public $name,$price;
function __construct($name,$price)
{
$this->name=$name;
$this->price=$price;
}


}
class coloredP extends product{
var $color;
}
class sizedP extends product{
var $size
}

$prod1=new product("product1",40);
echo "<pre>";
print_r($prod1);
echo "</pre>";






?>