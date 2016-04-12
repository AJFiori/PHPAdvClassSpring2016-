<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        include './autoload.php';
        
        $Error = new errorMessage();
        
        $Error->addMessage('Email', 'This is a Invaild email');
        
        var_dump($Error);
        ?>
    </body>
</html>
