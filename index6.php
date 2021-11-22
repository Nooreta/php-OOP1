<?php
interface payment
{
    public function deduct($money);
    public function getCharged();
}
class visa implements payment{
    public function deduct($money)
    {
      echo "Deducted $money from Visa";
    }
    public function getCharged()
    {
        echo "Visa get charged";
    }
    
}
$v1=new visa;
$v1->deduct(400);



?>