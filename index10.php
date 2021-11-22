<?php 
 class Number{
    public $number;

     function __construct($number)
    {
      $this->number=$number;
    }
    public function add1(){
      $this->number+=1;
      return $this;
    }
    public function add2()
    {
      $this->number+=2;
       return $this;
    }
    public function add3()
    {
        $this->number+=3;
        return $this;
    }
}
$x=new Number(5);
$x->add1();
$x->add2();
$x->add1();
$x->add3();
echo $x->number;





?>