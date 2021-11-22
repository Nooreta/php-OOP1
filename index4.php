<?php 
  class User{
public $name,$email,$password;
function __construct($name,$email,$password)
{
$this->name=$name;
$this->email=$email;
$this->password=$password;
}
 function printHello()
{
    echo "Hello $this->name";
}

}
class Admin extends User{
    function printHello()
    {
        echo "Hello $this->name";
    }
}

$admin=new User("Ahmad","Ahmad@gmail.com",'123abc');
echo "<pre>";
print_r($admin);
echo "</pre>";
$admin->printHello();
echo $admin->name;



?>
