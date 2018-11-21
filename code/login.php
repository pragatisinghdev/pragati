<?php 

session_start(); 

if($_POST){
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['password'] = $_POST['password'];
    header("Location: login.php");
}

echo "Login Successful for {$_SESSION['email']}";

?>
