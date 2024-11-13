<?php
include 'dbconfig.php';

if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $id=$_POST['id'];
        $employee_name=$_POST['employee_name'];
        $position=$_POST['position'];
        $salary=$_POST['salary'];
        $hire_date=$_POST['hire_date']

        $sql="INSERT INTO employee(id,employee_name,position,salary,hire_date) VALUES('$id', '$employee_name','$position','$salary','$hire_date')";
        
        if($connection->query($sql)==TRUE)
        {
            header("Location: view_employee.php");
        }
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Create Employee Management</title>
 <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <h1 class="text-center text-4xl my-5">Create Employee Management</h1>

    <form action="create_employee.php" method = "POST" class="w-1/2 mx-auto py-4 space-y-4">
    <input name="id" type="number" placeholder="Enter employees id" class="w-full border border-blue-500 p-2 rounded-md">
    <input name ="employee_name" type="text" placeholder="Enter employees name" class="w-full border border-blue-500 p-2 rounded-md">
    <input name ="position" type="text" placeholder="Enter employees position" class="w-full border border-blue-500 p-2 rounded-md">
    <input name ="salary" type="text" placeholder="Enter employees salary" class="w-full border border-blue-500 p-2 rounded-md">
    <input name ="hire_date" type="date" placeholder="Enter hire date" class="w-full border border-blue-500 p-2 rounded-md">
    <button class="w-full bg-blue-500 text-white border border-blue-500 p-2 rounded-md">Submit</button>
    </form>
 
</body>
</html>