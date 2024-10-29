<?php
session_start(); 

include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    $username = $conn->real_escape_string($username);

    
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
         $user = $result->fetch_assoc();
          echo $user['username'];
          echo $user['password'];
          $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        if (password_verify($password, $user['password'])) {
            
            $_SESSION['username'] = $user['username'];
            $_SESSION['user_$userid'] = $user['id'];

            echo "Сіз жүйеге сәтті кірдіңіз!";
            
            header("http://sait/1.php#home");
            exit();
        } else {
            echo "Құпиясөз қате!";
        }
    } else {
        echo "Пайдаланушы табылған жоқ!";
    }
}
?>
