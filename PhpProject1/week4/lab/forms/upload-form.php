<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <title>Upload</title>
    </head>
    <body>
        <br/><br/><br/><br/><br/><br/>
        <!-- The data encoding type, enctype, MUST be specified as below -->
    <center>
        <form enctype="multipart/form-data" action="upload.php" method="POST">
            <!-- MAX_FILE_SIZE must precede the file input field -->
            <!-- <input type="hidden" name="MAX_FILE_SIZE" value="30000" /> -->
            <!-- Name of input element determines name in $_FILES array -->
            <h1>Send this file:</h1> <input name="upfile" type="file"/>
            <br/>
            <input type="submit" value="Send File" class="btn btn-primary" />
            <a href="DirectoryIterator.php" value="SignUP" class="btn btn-primary">View All</a>
        </form>
    </center>
       
    </body>
</html>