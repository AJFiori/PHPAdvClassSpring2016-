
    <?php 
        require_once './autoload.php';
        
     	session_start();

        if(isset($_SESSION['username'])) $username = $_SESSION['username'];

    	require_once './autoload.php';

    	$passwordIDAO = new PasswordIDAO();
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
            
        elseif($passwordIDAO->exsistingEmail($values['email']))
            {
                array_push($message,'Sorry email is already registered');
            }

        if($validator->valueIsEmpty($values['password'])) 
            {
                array_push($message,'Sorry password is empty');
            } 
            
        elseif(!$validator->valueIsValid($values['password']))
            {
                array_push($message,'Sorry password is not valid');
            }
            
        elseif($values['password'] !== $values['confpassword'])
			{
                         array_push($message,'Sorry password did not match the confirmation password');
			}
            else
            {
            	$values['password'] = password_hash($values['password'], PASSWORD_DEFAULT);
            }

            // Add user
        if(count($message) === 0)
            {
                if($passwordIDAO->create($values))
                {
                    array_push($message,'Succesfully Added');
                }
            }

            include './views/errors.php';
        }

     ?>
    <?php include './forms/signup-form.php'; ?>
  