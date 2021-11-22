<?php 
class calc{
    var $num1;
    var $num2;

    function __construct($num1,$num2)
    {
     $this->num1=$num1;
     $this->num2=$num2;
    }
    function add(){
       return $this->num1+$this->num2;
    }
    function subtract()
    {
       return $this->num1-$this->num2;
    }
    function mult()
    {
     return $this->num1*$this->num2;
    
    }
    function divide()
    {
    return $this->num1/$this->num2;
    }
    
}
$calc1=new calc(3,4);
echo "<pre>";
print_r($calc1);
echo "</pre>";

echo $calc1->add();
echo "\r\n ";
echo $calc1->subtract();
echo "\r\n ";
echo $calc1->mult();
echo "\r\n ";
echo $calc1->divide();
echo "\r\n ";



?>