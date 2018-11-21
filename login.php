<?php session_start();
    $form_handler_url = 'handler/form_handler.php';
?>

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
        <form class="input_form" action="<?php echo $form_handler_url ?>" method="POST">
            <p class="head"><span>|</span>LOGIN</p>
            <div class ="details">
                <input type="text" name="email" placeholder="Enter Email">
                <label>Email</label>
                <input type="text" name="password" placeholder="Enter Password">
                <label>Password</label>
            </div>
        
        <div class="or">
            <p>-----------------------OR----------------------</p>
        </div>
        <div class="google_account">
            <a href="">SignUp Using Google Account</a>
        </div>
        <div class="login_click">
            <input type="submit" name="login" value="Login">
        </div>
        </form>
    </div>
</body>
</html>