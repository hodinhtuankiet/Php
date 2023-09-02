<?php
function checkUser($user, $pass) {
    $conn = connectdb(); 
    $stmt = $conn->prepare("SELECT * FROM tbl_danhmuc WHERE user = :user AND pass = :pass");
    $stmt->bindParam(':user', $user, PDO::PARAM_STR);
    $stmt->bindParam(':pass', $pass, PDO::PARAM_STR);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}
