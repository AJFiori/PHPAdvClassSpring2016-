<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../style3.css"/>
        <title></title>
    </head>
    <body>
        <?php
        // http://php.net/manual/en/class.directoryiterator.php
        //DIRECTORY_SEPARATOR 

        $folder = './uploads';
        if ( !is_dir($folder) ) {
            die('Folder <strong>' . $folder . '</strong> does not exist' );
        }
        $directory = new DirectoryIterator($folder);
        
        ?>
           <?php
                $counter = 1;
               foreach ($directory as $fileInfo) : ?> 
        
        <!--Explodes the string into an array-->
             <?php $txt = (explode(".", $fileInfo));?>
             <?php if ( $fileInfo->isFile() ) : ?>
        
        <center>
               <br/><?php// echo($counter -2);?><br/>
               <?php if($txt[1] =="jpg" || $txt[1] =="png" || $txt[1] == "giff"):?>
                               
        <object src='./uploads/<?php echo$fileInfo?>'><embed src="./uploads/<?php echo$fileInfo?>"></embed></object>
                <?php endif;?>
                <br/>
                <p>uploaded on <?php echo date("l F j, Y, g:i a", $fileInfo->getMTime()); ?></p>
                <br/>
        </center>       
            <?php endif; ?>
        <?php $counter++; endforeach; ?>
    </body>
</html>