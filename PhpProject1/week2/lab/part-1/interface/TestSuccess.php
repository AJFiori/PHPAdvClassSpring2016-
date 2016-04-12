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
        include './autoload.php';
        
        $Success = new SuccessMessage();
        
        $Success->addMessage('Email', 'This is a vaild email');
        
        var_dump($Success);
        ?>
    </body>
</html>
