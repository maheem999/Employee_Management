<?php
include 'db.php';

if(ISSET($_GET['id'])){
    $id = $_GET['id'];

    $sql = "SELECT * FROM employees WHERE id=$id";

    $result = $connection->query($sql);
    
    $employees = $result->fetch_assoc();
}

if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $id=$_POST['id'];
        $employee_name=$_POST['employee_name'];
        $position=$_POST['position'];
        $salary=$_POST['salary'];
        $hire_date=$_POST['hire_date'];

        $sql="UPDATE employees SET id='$id', employee_name= '$employee_name', position='$position', salary='$salary', hire_date='$hire_date' WHERE id = $id";
        
        if($connection->query($sql)==TRUE)
        {
            header("Location: employees_list.php");
        }
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Create Employees Details</title>
 <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
 <h1 class="text-center text-4xl my-5">Update Employees</h1>

 <form action="update_employees.php" method = "POST" class="w-1/2 mx-auto py-4 space-y-4">
 <input name="id" type="hidden" value="<?= $employees['id']; ?>" placeholder="Enter id" class="w-full border border-blue-500 p-2 rounded-md">
 <input name="id" type="number" value="<?= $employees['id']; ?>" placeholder="Enter employees id" class="w-full border border-blue-500 p-2 rounded-md">
 <input name ="employee_name" type="text" value="<?= $employees['employee_name']; ?>" placeholder="Enter employee name" class="w-full border border-blue-500 p-2 rounded-md">
 <input name ="position" type="text" value="<?= $employees['position']; ?>" placeholder="Enter employee position" class="w-full border border-blue-500 p-2 rounded-md">
 <input name ="salary" type="number" value="<?= $employees['salary']; ?>" placeholder="Enter employee salary" class="w-full border border-blue-500 p-2 rounded-md">
 <input name ="hire_date" type="date" value="<?= $employees['hire_date']; ?>" placeholder="Enter employee hire date" class="w-full border border-blue-500 p-2 rounded-md">
 <button class="w-full bg-blue-500 text-white border border-blue-500 p-2 rounded-md">Submit</button>
 </form>
 
</body>
</html>
