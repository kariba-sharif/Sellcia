<?php

require_once('connection.php');

if(isset($_POST['login'])){
    
    $username = $_POST['username'];
    $password = $_POST['pass'];


    if(empty($username) || empty($password)){

        header('Location:loginform.php?fields=empty');
        exit();
    }
    else{
        $stmt = "SELECT Password FROM users WHERE UserName = '$username';";
        $result = mysqli_query($conn, $stmt);
        $row = mysqli_fetch_assoc($result);

        if(password_verify($password, $row['Password'])){
            session_start();

            $_SESSION["loggedin"] = true;
            $_SESSION["id"] = $id;
            $_SESSION["username"] = $username;


            header('Location:profiles/index.php');
            exit();
        }else{
            header('Location:loginform.php?fields=wrongusernameorpassword');
        }
    }
}