<?php 
class A{
    use A;
}
trait A{
    public function testA()
     {
         echo "A";
     }
    }

    trait B{
        function testB()
        {
            echo "B";
        }
    }
    class C{
        use A,B;
    }
    $c=new C;
    $c->testA();
    $c->testB();



?>