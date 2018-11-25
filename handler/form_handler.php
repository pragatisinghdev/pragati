<?php
//start the session
    session_start();
    include('escape_spchar.php');

    //connect to database
    $servername = "localhost";
    $username = "pragati";
    $password = "pragati";
    $database = "myrecords";
    $conn = new mysqli($servername, $username, $password, $database);


    //check if login data is submitted
    if(isset($_POST) & !(empty($_POST['login'])))
    {
    $_SESSION['email'] = _e($_POST['email']);
    $_SESSION['password'] = _e($_POST['password']);
    header("Location: ../dashboard.php");
    }

    //check if signup data is submitted
    if(isset($_POST) & !(empty($_POST['register'])))
    {
    $_SESSION['email'] = _e($_POST['email']);
    $_SESSION['password'] = _e($_POST['password']);
    $_SESSION['fullname'] = _e($_POST['fullname']);
    $_SESSION['contact_no'] = _e($_POST['contact_no']);

    //create a record in database
    $sql = "INSERT INTO users(fullname, email, contact_no, password)
            VALUES ('{$_SESSION['fullname']}','{$_SESSION['email']}','{$_SESSION['contact_no']}','{$_SESSION['password']}')";

    if($conn->query($sql))
        {header("Location: ../dashboard.php");}
    else
        {echo "Signup not successfull".$conn->error;}
    }
?>
