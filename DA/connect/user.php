<?php
function connectdb()
{
    $dsn = 'mysql:host=localhost;dbname=user';
    $username = 'root';
    $password = '';
    try {
        $db = new PDO($dsn, $username, $password);
        return $db; // Trả về đối tượng PDO
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
}
function checkUser($user, $pass)
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM table_user WHERE user = '" . $user . "' AND pass = '" . $pass . "'");
    $stmt->execute();
    $re = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchAll();
    return $result[0]['role'];
}
