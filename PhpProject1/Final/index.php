<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login Meme Town</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    </head>
    <body>
    <cetner>
        <h1>Welcome to Meme Town</h1>
    </cetner>
        <br/><br/><br/><br/><br/><br/>
    <?php 
        session_start();

        if(isset($_SESSION['username'])) $username = $_SESSION['username'];

     ?>
<center>  
    <a href="login.php" value="Login" class="btn btn-primary">Login</a>
    <a href="signup.php" value="SignUP" class="btn btn-primary">Sign Up</a>
    
        <br/><br/>

        <div>
            <p><?php if(!empty($username)) { echo "Signed in as: " . $username; } else { echo "Not Signed in"; } ?></p>
        </div>
</center> 
    </body>
</html>
