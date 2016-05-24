<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Meme Town Log In</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php 
        session_start();

        if(isset($_SESSION['username'])) $username = $_SESSION['username'];

    	require_once './autoload.php';

    	$PasswordIDAO = new PasswordIDAO();
    	$validator = new Validation();
    	$util = new Util();

    	$values = filter_input_array(INPUT_POST);

    	if($util->isPostRequest()) 
        {    
            $message = array();

            // Checking if empty and valid  
            if ($validator->valueIsEmpty($values['email']))
            {
                array_push($message,'Sorry email is empty');
            }
            elseif(!$validator->emailIsValid($values['email']))
            {
                array_push($message,'Sorry email is not valid');
            }
            elseif(!$PasswordIDAO->exsistingEmail($values['email']))
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

            // Add user
            if(count($message) === 0)
            {
                $results = $PasswordIDAO->readLogin($values);

                if(count($results) > 0)
                {   
                    $passwordCheck = password_verify($values['password'], $results[0]['password']);
        
                    if($passwordCheck == true)
                    {
                        array_push($message,'Succesfully logged in');
                        $_SESSION['username'] = $results[0]['email'];
                        $_SESSION['user_id'] = $results[0]['user_id'];
                        $username = $_SESSION['username'];
                        header("Location: ./index.php");
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
        <?php include './forms/login-form.php'; ?>
</body>
</html>