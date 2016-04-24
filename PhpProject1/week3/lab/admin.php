<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin Page</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    </head>
    <body>
    <?php 
     	session_start();

        if(!isset($_SESSION['user_id'])) header('Location: ./login.php');

        if(isset($_SESSION['username'])) $username = $_SESSION['username'];

        require_once './autoload.php';

        $util = new Util();

        if($util->isPostRequest()) 
        {    
            session_destroy();
            $username = "";
            header('Location: ./login.php');
        }

     ?>
    <center>
        <div>
            <h3>Admin Page</h3>
            <form action="#" method="post">   
              <input type="submit" value="Log Out" class="btn btn-primary" />
              <a href="./index.php" class="btn btn-primary">Go Back</a>
            </form><br />
        </div>
    </center>
    </body>
</html>