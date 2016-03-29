<html>
    <head>
        <meta charset="UTF-8">
        <title>Add Address</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="style3.css"/>
    </head>
    <body>

<br />

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
            <option value="<?php echo $state; ?>">AL</option>
            <option value="<?php echo $state; ?>">AK</option>
            <option value="<?php echo $state; ?>">AZ</option>

            <option value="<?php echo $state; ?>">AR</option>
            <option value="<?php echo $state; ?>">CA</option>
            <option value="<?php echo $state; ?>">CO</option>

            <option value="<?php echo $state; ?>">CT</option>
            <option value="<?php echo $state; ?>">DE</option>
            <option value="<?php echo $state; ?>">FL</option>

            <option value="<?php echo $state; ?>">GA</option>
            <option value="<?php echo $state; ?>">HI</option>
            <option value="<?php echo $state; ?>">ID</option>

            <option value="<?php echo $state; ?>">IL</option>
            <option value="<?php echo $state; ?>">IN</option>
            <option value="<?php echo $state; ?>">IA</option>

            <option value="<?php echo $state; ?>">KS</option>
            <option value="<?php echo $state; ?>">KY</option>
            <option value="<?php echo $state; ?>">LA</option>

            <option value="<?php echo $state; ?>">ME</option>
            <option value="<?php echo $state; ?>">MD</option>
            <option value="<?php echo $state; ?>">MA</option>

            <option value="<?php echo $state; ?>">MI</option>
            <option value="<?php echo $state; ?>">MN</option>
            <option value="<?php echo $state; ?>">MS</option>

            <option value="<?php echo $state; ?>">MO</option>
            <option value="<?php echo $state; ?>">MT</option>
            <option value="<?php echo $state; ?>">NE</option>

            <option value="<?php echo $state; ?>">NV</option>
            <option value="<?php echo $state; ?>">NH</option>
            <option value="<?php echo $state; ?>">NJ</option>

            <option value="<?php echo $state; ?>">NM</option>
            <option value="<?php echo $state; ?>">NY</option>
            <option value="<?php echo $state; ?>">NC</option>

            <option value="<?php echo $state; ?>">ND</option>
            <option value="<?php echo $state; ?>">OH</option>
            <option value="<?php echo $state; ?>">OK</option>

            <option value="<?php echo $state; ?>">OR</option>
            <option value="<?php echo $state; ?>">PA</option>
            <option value="<?php echo $state; ?>">RI</option>

            <option value="<?php echo $state; ?>">SC</option>
            <option value="<?php echo $state; ?>">SD</option>
            <option value="<?php echo $state; ?>">TN</option>

            <option value="<?php echo $state; ?>">TX</option>
            <option value="<?php echo $state; ?>">UT</option>
            <option value="<?php echo $state; ?>">VT</option>

            <option value="<?php echo $state; ?>">VA</option>
            <option value="<?php echo $state; ?>">WA</option>
            <option value="<?php echo $state; ?>">WV</option>
            <option value="<?php echo $state; ?>">WI</option>
            <option value="<?php echo $state; ?>">WY</option>

    </select><br/><br/>

       Zip:<input name="zip" value="<?php echo $zip; ?>" /> <br /><br/>
       Birthday:<input type="date" name="birthday" value="<?php echo $birthday; ?>" /> <br /><br/>
       
       <input type="submit" value="submit" class="btn btn-primary" /> 
       
    </form>
    <?php if(count($error) !== 0): ?>
    <?php for($eCheck = 0;$eCheck < count($error);$eCheck++):?>
            <div class='error'><?php echo $error[$eCheck] ?></div>
    <?php endfor ?>
<?php endif ?>
    
    </center>
</div>
    </body>
</html>