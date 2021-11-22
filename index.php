<?php
class User{
var $name;
var $email;
var $password;
var $is_admin=true;

function __construct($userName,$userEmail,$userPassword)
{
  $this->name=$userName;
  $this->email=$userEmail;
  $this->password=$userPassword;
}
function sayHello()
{
echo "hello";
}
function sayHelloUser()
{
echo "Hello $this->name";
}

}
// $u1=new User;
// $u1->name="Ahmad";
// $u1->email="Ahmad@gmail.com";
// $u1->password="123";
// echo "<pre>";
// print_r($u1);
// echo "</pre>";


$u2=new User("Noor","Noor@gmail.com","123ABC");
// $u2->name="Shahd";
// $u2->email="Shahd@gmail.com";
// $u2->password="123ABC";
echo "<pre>";
print_r($u2);
echo "</pre>";

$u2->sayHelloUser();
$u2->sayHello();
?>