<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lab 3 Password Hash</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    </head>
    <body>
        <br/><br/><br/><br/><br/><br/>
    <?php 
        session_start();

        if(isset($_SESSION['username'])) $username = $_SESSION['username'];

     ?>
<center>  
    <a href="login.php" value="Login" class="btn btn-primary">Login</a>
    <a href="signup.php" value="SignUP" class="btn btn-primary">Sign Up</a>
    <a href="admin.php" value="Admin" class="btn btn-primary">Admin</a>
        <br/><br/>

        <div>
            <p><?php if(!empty($username)) { echo "Signed in as: " . $username; } else { echo "Not Signed in"; } ?></p>
        </div>
</center> 
    </body>
</html>
