<?php
//start the session
    session_start();
    //check if login data is submitted
    if(isset($_POST) & !(empty($_POST['login'])))
    {
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['password'] = $_POST['password'];
    header("Location: ../dashboard.php");
    }

    //check if signup data is submitted
    if(isset($_POST) & !(empty($_POST['register'])))
    {
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION['fullname'] = $_POST['fullname'];
    $_SESSION['contact_no'] = $_POST['contact_no'];
    header("Location: ../dashboard.php");
    }
?>
