<!DOCTYPE HTML>  

<html>

    <head>
        <title>PRAGATI TASK MANAGER</title>
        <link rel="stylesheet" type="text/css" href="../css/style_signupphp.css">
    </head>

    <body>
        <header class="header">
            <div class="title">
                <h1>Pragati Task Manager</h1>
            </div>
        </header>  
        <div class="welcome_note">
            <p>
                Welcome, <br><br>
                <p class="detail">
                    Your email address is: <?php echo $_POST["email"]; ?>
                </p>                
            </p>
        </div>


    </body>
</html>