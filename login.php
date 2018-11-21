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
    <div class="login_box">
        <form class="input_form" action="code/login.php" method="POST">
            <p class="head"><span>|</span>LOGIN</p>
            <div class ="details">
                <input type="text" name="email" placeholder="Enter Email">
                <label>Email</label>
                <input type="text" name="contact_no" placeholder="Enter Contact No.">
                <label>Contact No</label>                
            </div>
        
        <div class="or">
            <p>-----------------------OR----------------------</p>
        </div>
        <div class="google_account">
            <a href="">SignUp Using Google Account</a>
        </div>
        <div class="login_click">
            <input type="submit" value="Login">
        </div>
        </form>
    </div>
</body>
</html>