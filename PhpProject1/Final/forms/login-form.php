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
        <br/><br/>
        <center>
        <div>
            <h3>Log in</h3>
            <form action="#" method="post">   
              Email: <br /><input name="email"/> <br /><br />
              Password: <br /><input name="password" type="password" /> <br /><br />

               <input type="submit" value="Submit" class="btn btn-primary" />
               
            <div>
            <p><?php if(!empty($username)) { echo "Signed in as: " . $username; } else { echo "Not Signed in"; } ?></p>
            </div> 
            </form><br />
        </div>
    </center>
    </body>
</html>
