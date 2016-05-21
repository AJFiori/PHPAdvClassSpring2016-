
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
        <?php include'./index.php';?>