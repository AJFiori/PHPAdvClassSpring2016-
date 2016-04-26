<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../style3.css"/>
        <title></title>
    </head>
    <body>
        <?php include'../forms/viewpage-form.php';?>
        
<?php
    if (array_key_exists('delete_file', $_POST)) 
        {
        $path = './uploads/';
            
        $filename =  $path . "/" . $_POST['delete_file']; // build the full path here
            if (file_exists($filename)) {
                unlink($filename);
                echo "<center><h3 class='delete'> 'File ' . $filename . ' has been deleted'</h3></center>";
                } 
            else 
            {
            echo "<center><h3 class='delete'> 'Could not delete ' . $filename . ', file does not exist'</h3></center>";
            }
        }
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
        
        <?php foreach ($directory as $fileInfo) : ?>        
            <?php if ( $fileInfo->isFile() ) : ?>
        
        <?php // if(file_exists($filename)):?>
            <ol>
            <li><br/>
                <img src="<?php echo $fileInfo->getPathname(); ?>"/></li>
                <p><?php echo $fileInfo->getFilename(); ?></p>
                <p>uploaded on <?php echo date("l F j, Y, g:i a", $fileInfo->getMTime()); ?></p>
                <p>This file is <?php echo $fileInfo->getSize(); ?> byte's</p>
                <?php
                    echo '<form method="post">';
                    echo '<input type="hidden" value="'.$fileInfo.'" name="delete_file" />';
                    echo '<input type="submit" value="Delete image" class="btn btn-danger" />';
                    echo '</form>';
                   ?>
            </ol>
        
        <?php// endif;?>
            <?php endif; ?>
        <?php endforeach; ?>
        
        
    </body>
</html>
