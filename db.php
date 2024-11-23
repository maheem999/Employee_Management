<?php
$servername ="localhost";
$username="root";
$password="";
$dbname="company_management";

$connection = new mysqli($servername, $username, $password);



$connection->select_db($dbname);


?>
