<?php

$dsn = "mysql:host=localhost;dbname=rishton_school_management"; // Data Source Name (DSN) for the database connection
$username = "root"; // Username for the database
$password = "password"; // Password for the database

try {
    // Create a new PDO instance and establish a database connection
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Set the error mode to exception for better error handling

} catch (PDOException $e) { // Catch any PDO exception that occurs
    // Display the error message if the connection fails
    echo "Connection failed: " . $e->getMessage();
}

?>
