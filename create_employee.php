<?php
include "dbconfig.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $employee_name = $_POST['employee_name'];
    $position = $_POST['position'];
    $salary = $_POST['salary'];
    $hire_date = $_POST['hire_date'];

    $sql = "INSERT INTO `employee` (`id`, `employee_name`, `position`, `salary`, `hire_date`) 
            VALUES ('$id', '$employee_name', '$position', '$salary', '$hire_date')";

    if ($conn->query($sql) === TRUE) {
        header("Location: employees_list.php");
        exit();
    } else {
        $error_message = "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Database</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-blue-600 via-indigo-700 to-purple-800 flex justify-center items-center min-h-screen text-white">

    <div class="bg-gray-50 p-10 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6 text-center text-indigo-600">Enter Employee Details</h2>
        <form action="" method="POST" class="space-y-6">
            <?php if (isset($error_message)): ?>
                <p class="text-red-500 text-center font-semibold"><?= $error_message; ?></p>
            <?php endif; ?>

            <div>
                <label for="id" class="block text-sm font-medium text-gray-700">ID</label>
                <input type="number" name="id" id="id" class="mt-1 block w-full p-2.5 border rounded-lg focus:outline-none focus:ring focus:ring-indigo-500 text-black" required>
            </div>

            <div>
                <label for="employee_name" class="block text-sm font-medium text-gray-700">Employee Name</label>
                <input type="text" name="employee_name" id="employee_name" class="mt-1 block w-full p-2.5 border rounded-lg focus:outline-none focus:ring focus:ring-indigo-500 text-black" required>
            </div>

            <div>
                <label for="position" class="block text-sm font-medium text-gray-700">Position</label>
                <input type="text" name="position" id="position" class="mt-1 block w-full p-2.5 border rounded-lg focus:outline-none focus:ring focus:ring-indigo-500 text-black" required>
            </div>

            <div>
                <label for="salary" class="block text-sm font-medium text-gray-700">Salary</label>
                <input type="text" name="salary" id="salary" class="mt-1 block w-full p-2.5 border rounded-lg focus:outline-none focus:ring focus:ring-indigo-500 text-black" required>
            </div>

            <div>
                <label for="hire_date" class="block text-sm font-medium text-gray-700">Hire Date</label>
                <input type="date" name="hire_date" id="hire_date" class="mt-1 block w-full p-2.5 border rounded-lg focus:outline-none focus:ring focus:ring-indigo-500 text-black" required>
            </div>

            <div>
                <button type="submit" name="submit" class="w-full py-3 px-6 bg-indigo-500 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-300">
                    Submit
                </button>
            </div>
        </form>
    </div>

</body>
</html>
