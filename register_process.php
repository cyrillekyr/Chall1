<?php
// Database connection or any other necessary setup
// For simplicity, we're not using a database in this example

// Retrieve submitted username and password
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Perform any necessary validation, hashing, etc. for password
// For simplicity, we're not doing any validation in this example

// You might store the username and password in a database here

echo 'Registration successful. <a href="index.php">Login</a>';
?>