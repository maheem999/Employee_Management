<?php
include 'db.php';

$sql = "SELECT * FROM employees";
$result = $connection->query($sql);

$employees = $result->fetch_all(MYSQLI_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter Employee Details</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <style>
        td, th{
            border: 1px solid black;
            padding: 12px ;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <h1 class="text-center text-4xl my-5"> Employee Details</h1>
    <table class="mx-auto border p-5">
        <thead class="py-2 bg-blue-500 text-white font-medium">
            <tr >
               
                <th >Employee Name</th>
                <th >Position</th>
                <th >salary</th>
                <th >Hire Date</th>
                <th >Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($employees as $employee): ?>
                <tr>
                    
                    <td><?= $employee['employee_name']; ?></td>
                    <td><?= $employee['position']; ?></td>
                    <td><?= $employee['salary']; ?></td>
                    <td><?= $employee['hire_date']; ?></td>
                    <td>
                        <a href="update_employees.php?id=<?= $employee['id']; ?>"><i class="fa-solid fa-pen-to-square border p-1.5 bg-blue-500 rounded-md text-white"></i></a>
                        <a href="delete_employees.php?id=<?= $employee['id']; ?>"><i class="fa-solid fa-trash border p-1.5 bg-red-500 rounded-md text-white"></i></a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>
