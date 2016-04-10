<html>
    <head>
        <meta charset="UTF-8">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <title></title>
    </head>
    <body>
              
         <?php
//Calls the getAllAddress functions
               $address = getAllAddress();
        ?>
        <br/><br/>
        
 <!--writes out the list for header of table-->
    <center>
        <table class="table table-striped">
            <thead>
                    <th>Full Name:</th>
                    <th>Email:</th>
                    <th>Address:</th>
                    <th>City:</th> 
                    <th>State:</th> 
                    <th>Zip Code:</th> 
                    <th>Birthday:</th>
                    <th>Update:</th>
                    <th>Delete:</th>
            </thead>
<!-- Takes info from DB and inserts it into the rows of the table -->        
        <?php foreach ($address as $row): ?>
            <tr>
                <td><?php echo $row['fullname']."";?></td>
                <td><?php echo $row['email']."";?></td>
                <td><?php echo $row['addressline1']."";?></td>
                <td><?php echo $row['city']."";?></td>
                <td><?php echo $row['state']."";?></td>
                <td><?php echo $row['zip']."";?></td>
                <td><?php echo  date("F j, Y",strtotime($row['birthday'])); ?></td>
                
<!-- update Address -->
<td><input type="button" class="btn btn-success" value="Update" onClick="location.href='updateAddress.php?address_id=<?php echo $row['address_id']?>'"/></td>

<!-- Delete Address -->
<td><input type="button" class="btn btn-danger" value="Delete" onClick="location.href='deleteAddress.php?address_id=<?php echo $row['address_id']?>'"/></td>
            </tr>
    <?php endforeach;?>
        </table>

    </body>
</html>
