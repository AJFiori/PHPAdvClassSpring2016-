<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <title>login</title>
    </head>
    <body>
        <cetner>
            <h1>Welcome to Meme Town</h1>
        </cetner>
        <br/>
        <center>
        <div>
             <?php if(!empty($username)) : ?>
            <p>Signed in as: <?php echo $username; ?></p>
            <h3>Log in</h3>
            <a href="../accountPage.php" >Your Account</a><br/>
            <a href="../logout.php">Log Out</a><br/>

            <?php else : ?>
            <p>Not Signed in</p>

            <a href="../login.php">Log in</a><br/>
            <a href="../signup.php">Sign UP</a><br/>
            <?php endif; ?>
            
            <form action="#" method="post">   
              Email: <br /><input name="email"/> <br /><br />
              Password: <br /><input name="password" type="password" /> <br /><br />

               <input type="submit" value="Submit" class="btn btn-primary" />
               <a href="signup.php" value="SignUP" class="btn btn-primary">Sign Up</a>
            
            </form><br />
        </div>
    </center>
    </body>
</html>
