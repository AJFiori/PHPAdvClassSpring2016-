<html>
    <head>
        <meta charset="UTF-8">
        <title>Add Address</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    </head>
    <body>

<br />
<?php
$fullname = filter_input(INPUT_POST, 'fullname');
$email = filter_input(INPUT_POST, 'email');
$addressline1 = filter_input(INPUT_POST, 'addressline1');
$city = filter_input(INPUT_POST, 'city');
$state = filter_input(INPUT_POST, 'state');
$zip = filter_input(INPUT_POST, 'zip');
$birthday = filter_input(INPUT_POST, 'birthday');

?>

<div class="container">
    <center>
    <h1>Add A Address</h1>
    <br/>
    <br/>
    <form action="#" method="post">   
       Full Name: <input name="fullname" value="<?php echo $fullname; ?>" /> <br /><br/>
       Email: <input name="email" value="<?php echo $email; ?>" /> <br /><br/>
       Address:<input name="address" value="<?php echo $addressline1; ?>" /> <br /><br/>
       City:<input name="city" value="<?php echo $city; ?>" /> <br /><br/>
       
  <select>
   
  <option value="State">Please Select State:</option>
  <option value="AL">AL</option>
  <option value="AK">AK</option>
  <option value="AZ">AZ</option>
  
  <option value="AL">AR</option>
  <option value="AK">CA</option>
  <option value="AZ">CO</option>
  
  <option value="AL">CT</option>
  <option value="AK">DE</option>
  <option value="AZ">FL</option>
  
  <option value="AL">GA</option>
  <option value="AK">HI</option>
  <option value="AZ">ID</option>
</select><br/><br/>

       Zip:<input name="zip" value="<?php echo $zip; ?>" /> <br /><br/>
       Birthday:<input name="birthday" value="<?php echo $birthday; ?>" /> <br /><br/>
       <input type="submit" value="submit" class="btn btn-primary" />
    </form>
    </center>
</div>
    </body>
</html>