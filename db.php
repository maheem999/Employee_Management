<?php
$servername ="localhost";
$username="root";
$password="";
$dbname="company_management";

$connection=new mysqli($servername, $username,$password,$dbname);

if($connection->connect_error)
{
    echo "fail to conect database";
}
?>
