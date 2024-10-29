<?php

include 'config.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

   
    $checkUser = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($checkUser);

    if ($result->num_rows > 0) {
<<<<<<< HEAD
      
=======
     
>>>>>>> 549adb70e2a4b48937dfd0f2a272bed9e9b568d3
        echo "Аккаунт тіркелген!";
    } else {
       
        if ($password !== $confirm_password) {
<<<<<<< HEAD
           
            echo "Пароль қате!";
        } else {
        
            $hashed_password = password_hash($password, PASSWORD_BCRYPT);

            
            $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";

            if ($conn->query($sql) === TRUE) {
              
                header("Location: http://sait/sait/register.php");
                exit();
            } else {
               
=======
          
            echo "Пароль қате!";
        } else {
           
            $hashed_password = password_hash($password, PASSWORD_BCRYPT);

            $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";

            if ($conn->query($sql) === TRUE) {
               
                header("Location: http://sait/sait/register.php");
                exit();
            } else {
              
>>>>>>> 549adb70e2a4b48937dfd0f2a272bed9e9b568d3
                echo "Қате: " . $sql . "<br>" . $conn->error;
            }
        }
    }
}

?>

