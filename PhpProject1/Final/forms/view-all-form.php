<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../style3.css"/>
        <title></title>
    </head>
    <body>
        <?php //include'../forms/viewpage-form.php';?>
        
<?php
   /* if (array_key_exists('delete_file', $_POST)) 
        {
        $path = './uploads/';
            
        $filename =  $path . "/" . $_POST['delete_file']; // build the full path here
        if (file_exists($filename))
            {
            unlink($filename);
            echo "<center><h3 class='delete'> 'File ' . $filename . ' has been deleted'</h3></center>";
            } 
            else 
            {
        echo "<center><h3 class='delete'> 'Could not delete ' . $filename . ', file does not exist'</h3></center>";
            }
        } */
        ?>
        
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
               <br/><?php echo($counter -2);?><br/>
               <?php if($txt[1] =="jpg" || $txt[1] =="png" || $txt[1] == "giff"):?>
                               
        <object src='./uploads/<?php echo$fileInfo?>'><embed src="./uploads/<?php echo$fileInfo?>"></embed></object>
                <?php endif;?>
                <br/>
                <p><?php echo $fileInfo->getFilename(); ?></p>
                <p>uploaded on <?php echo date("l F j, Y, g:i a", $fileInfo->getMTime()); ?></p>
                <p>This file is <?php echo $fileInfo->getSize(); ?> byte's</p>
                <br/>
        </center>       
            <?php endif; ?>
        <?php $counter++; endforeach; ?>
    </body>
</html>