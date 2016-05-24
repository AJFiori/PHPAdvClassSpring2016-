<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Meme Town</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body >
	<?php 
        session_start();

        if(isset($_SESSION['username'])) $username = $_SESSION['username'];
        if(isset($_SESSION['user_id'])) $user_id = $_SESSION['user_id'];

        require_once './autoload.php';

     ?>
<center>
        <h2>Welcome to Meme Town!</h2>
</center>
<br/><br/>
		
        <?php if(!empty($username)) : ?>
                <center>
			<p>Signed in as: <?php echo $username; ?></p>
                        <a href="accountPage.php" class="btn btn-primary">Your Account</a>
                        <a href="logout.php" class="btn btn-danger">Log Out</a><br/>
                </center>
			<?php else : ?>
                <center>
			
                    <a href="login.php" value="Login" class="btn btn-primary">Login</a>
                    <a href="signup.php" value="SignUP" class="btn btn-primary">Sign Up</a>
                        <p>Not Signed in</p>
                </center>
        <?php endif; ?>
		
		<?php 

                        $PhotoIDAO = new PhotoIDAO();

                        $photos = $PhotoIDAO->readAll();

                        $rand = rand(1, count($photos));
                        $counter = 1;

                        foreach($photos as $photo) :
                        if($rand == $counter) :

                            ?>

	
                   <?php else : ?>

						</div>
					<?php endif; ?>
			<?php $counter++; endforeach; ?>
                                                
                                           
</body>
</html>