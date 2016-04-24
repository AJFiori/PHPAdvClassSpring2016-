<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>login Page</title>
            <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    </head>
    <body>
    <?php 
        session_start();

        if(isset($_SESSION['username'])) $username = $_SESSION['username'];

    	require_once './autoload.php';

    	$userIDAO = new PasswordIDAO();
    	$validator = new Validation();
    	$util = new Util();

    	$values = filter_input_array(INPUT_POST);

    	if($util->isPostRequest()) 
        {    
            $message = array();

            // Checks fields if they're empty and valid
        if ($validator->valueIsEmpty($values['email']))
            {
                array_push($message,'Sorry email is empty');
            }
        
        elseif(!$validator->emailIsValid($values['email']))
            {
                array_push($message,'Sorry email is not valid');
            }
            
        elseif(!$userIDAO->exsistingEmail($values['email']))
            {
                array_push($message,'Sorry email is not registered');
            }

            if($validator->valueIsEmpty($values['password'])) 
            {
                array_push($message,'Sorry password is empty');
            } 
            
        elseif(!$validator->valueIsValid($values['password']))
            {
                array_push($message,'Sorry password is not valid');
            }

            // Adds the User
        if(count($message) === 0)
            {
                $results = $userIDAO->viewLogin($values);

                if(count($results) > 0)
                {   
                    $passwordCheck = password_verify($values['password'], $results[0]['password']);
        
                    if($passwordCheck == true)
                    {
                        array_push($message,'Succesfully logged in');
                        $_SESSION['username'] = $results[0]['email'];
                        $_SESSION['user_id'] = $results[0]['user_id'];
                        $username = $_SESSION['username'];
                    }
                    else 
                    {
                        array_push($message,'Email or password were incorrect');
                    }
                }
            }

            include './views/errors.php';
        }

     ?>
    <center>
        <div>
            <h3>Log in</h3>
            <form action="#" method="post">   
              Email: <br /><input name="email"/> <br /><br />
              Password: <br /><input name="password" type="password" /> <br /><br />

               <input type="submit" value="Submit" class="btn btn-primary" />
               <a href="./index.php" class="btn btn-primary">Go Back</a>
            </form><br />
        </div>
    </center>
    </body>
</html>