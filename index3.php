<?php
class connect{
var $serverName;
var $userName;
var $password;
var $dbName;
var $conn;
function __construct($serverName,$userName,$password,$dbName)
{
    $this->serverName=$serverName;
    $this->userName=$userName;
    $this->password=$password;
    $this->dbName=$dbName;
    $this->conn=mysqli_connect($this->serverName,
    $this->userName, 
    $this->password,
    $this->dbName);
    echo "Connected";
}

}
$KFC=new connect('localhost','root','','KFC');



?>