<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="style3.css">
        <title>View Images</title>
    
    
    </head>
    <body>
        <p><a href="memeIndex.php" class="btn btn-primary btn-lg btn-block">Home</a></p>
        <?php
        $files = array();
        $directory = '.' . DIRECTORY_SEPARATOR . 'uploads';
        $dir = new DirectoryIterator($directory);
        foreach ($dir as $fileInfo) {
            if ($fileInfo->isFile()) {
                $files[$fileInfo->getMTime()] = $fileInfo->getPathname();
            }
        }

        krsort($files);
//ksort($files);

        foreach ($files as $key => $path):
            ?> 
            <div class="meme"> 
                <img src="<?php echo $path; ?>" /> <br />
                <?php echo date("l F j, Y, g:i a", $key); ?>
                <a class="twitter-share-button" href="https://twitter.com/intent/tweet?text=Hello%20world">Tweet It!</a>
                <!-- Place this tag where you want the share button to render. -->
                <div class="g-plus" data-action="share" data-href="<?php echo $path; ?>"></div> 
            </div>

        <?php endforeach; ?>



        <!--<p><a href="memeIndex.php">Home</a></p>-->
        <!-- Place this tag in your head or just before your close body tag. -->
        <!--<script src="https://apis.google.com/js/platform.js" async defer></script>-->


    </body>
</html>