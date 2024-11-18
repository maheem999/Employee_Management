<?php
include 'db.php';

if(ISSET($_GET['id'])){
    $id = $_GET['id'];

    $sql = "DELETE FROM employees WHERE id=$id";

    if($connection->query($sql)==TRUE)
        {
            header("Location: employees_list.php");
        }
}
?>
