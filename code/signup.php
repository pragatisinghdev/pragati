<?php 

session_start();

if($_POST){
    $_SESSION['fullname'] = $_POST['fullname'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['contact_no'] = $_POST['contact_no'];
    header("Location: signup.php");
}

echo "Signup Successful for {$_SESSION['email']}";

}

?>
