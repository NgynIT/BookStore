<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'bookstore');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_CHARSET', 'utf8mb4'); // Specify the character set

// Create a connection
$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// Check the connection
if (!$con) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}

// Set the character set for the connection
mysqli_set_charset($con, DB_CHARSET);

// Select the database
$db = mysqli_select_db($con, DB_NAME);

// Check if the database selection was successful
if (!$db) {
    die("Failed to select database: " . mysqli_error($con));
}
?>
