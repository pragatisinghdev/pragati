<?php session_start() ?>

<!DOCTYPE html>
<html>
<head>
    <title>PRAGATI TASK MANAGER</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <header class="header">
        <div class="heading">
            <h1>Pragati Task Manager</h1>
        </div>
    </header>
    <div class="signup_attributes">
        <p class="head"><span>|</span>SIGN UP</p>
        <form class="input_form" action="code/signup.php" method="POST">
            <div class="full_name">
                <label>Full Name</label>
                <input type="text" name="fullname" placeholder="Enter FullName">
                <label>Contact No</label>
                <input type="text" name="contact_no" placeholder="Enter Contact No.">
            </div>
            <div class ="details">
                <label>Email</label>
                <input type="text" name="email" placeholder="Enter Email">
                <label>Password</label>
                <input type="text" name="password" placeholder="Enter Password">
            </div>
        
        <div class="or">
            <p>--------------------------OR------------------------</p>
        </div>
        <div class="google_account">
            <a href="">SignUp Using Google Account</a>
        </div>
        <div class="signup_click">
            <input type="submit" value="Sign Up">
        </div>
        </form>
    </div>
</body>
</html>
