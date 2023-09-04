<?php
$dsn = 'mysql:host=localhost;dbname=user';
$username = 'root';
$password = '';
try {
    $db = new PDO($dsn, $username, $password);
    echo "Connected successfully";
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('database_error.php');
    exit();
}
