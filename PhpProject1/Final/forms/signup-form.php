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
        <title>Sign Up</title>
    </head>
    <body>
        <center>
            <h3>Create A New Account</h3>
            <form action="#" method="post">   
              Email: <br /><input name="email" value="<?php echo $values['email'] ?>" /> <br /><br />
              Password: <br /><input name="password" type="password" /> <br /><br />
              Confirm Password: <br /><input name="confpassword" type="password" /> <br /><br />

               <input type="submit" value="Submit" class="btn btn-primary" />
               <a href="./index.php" class="btn btn-primary">Go Back</a>
            </form><br />
        
    </center>
    </body>
</html>
